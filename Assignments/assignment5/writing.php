<?
class File {
    public static function  createFolder($folderName, $fileText) {
        $folderName = "directories/" . $folderName;
        $fileName = "readme.txt";
        $file_path = $folderName . '/' . $fileName;
        
        if(file_exists($folderName)) {
            //echo("A directory already exists with that name.");
            echo("A directory already exists with that name.");
            return false;
        }else {
            mkdir ($folderName, 0777);
            file_put_contents($file_path, $fileText);
            return $file_path;
        }
    }
    public static function displayMessage() {
    
    }
}
?>