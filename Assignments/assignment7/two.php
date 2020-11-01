<?php
class File {
    public static function checkFileSize() {
        $error = false;
        if ($_FILES["myFile"]["size"] < 100000)
        {
            return $error;
        }
    else {
        $error = true;
        return $error;
    }
    }

    public static function saveFile() {
        $target_dir = "files/";
        $file = $_FILES["myFile"]["name"];
        $target_file = $target_dir . $file;
        if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $target_file)) {
            echo("File Added!");
            return $target_file;
        } else {
            echo("Error, file not added!");
        }
}
    public static function writeToDB($fileName, $filePath) {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=CPS276', 'gcolling', '1234');
            $sql = "INSERT INTO a7 (a7_id, file_path, file_name)
            VALUES (0, '$filePath', '$fileName')";
            $dbh->query($sql);
            $dbh = null;
            } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
?>