<?
$user = 'gcolling';
$pass = '1234';
?>

<html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body>
   <?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=CPS276', $user, $pass);

    $sql = "INSERT INTO practice (p_id, p_title, p_author)
    VALUES (2, 'The Hobbit', 'J.R. Tolkein')";
    $dbh->query($sql);
    /*if ($dbh->query($sql) === TRUE) {
        echo "Inserted Value";
    } else {
        echo "Error: " . $dbh->error;
    }*/
    //echo("<br>");

    foreach($dbh->query('SELECT * from practice') as $row) {
        print_r($row);
        echo("<br>");
    }
    $dbh = null;
    } catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
   </body>
</html>