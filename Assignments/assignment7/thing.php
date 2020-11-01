<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html>
    <body>
        <title>List Files</title>
        <h1>List Files</h1>
        <a href='one.php' target='ok'>Add File</a>
        <?
            $dbh = new PDO('mysql:host=localhost;dbname=CPS276', 'gcolling', '1234');
        
            foreach($dbh->query('SELECT * from a7') as $row) { 
                $filePath = $row[1]?>
            <ul>
                <li><a href='<?=$filePath?>' target='mypage2'><?echo($row[2])?></a></li>
            </ul>
            <?}?>
    </body>
