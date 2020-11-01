<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$tooBig = 'default';
require_once("two.php");
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
<body style="padding-right: 20px; padding-left: 20px; padding-top: 20px;">
  <title>Assignment 7</title>
  <h1>File Upload</h1>
            <a href='thing.php' target='mypage'>Show File List</a>
    <br>
    <form enctype="multipart/form-data" method="post">
  <div class="form-group">
    <label><?if (isset($_POST['btnClick'])) {
                $fileName = $_POST['fileName'];
                $file = new File;
                $tooBig = $file->checkFileSize();
                if ($tooBig === true) {
                  echo("File too big!");
                }
                else if ($tooBig === false) {
                  $filePath = $file->saveFile();
                  $file->writeToDB($fileName, $filePath);
                }
               } else {
                 echo("File Name");
               }
            ?></label> 
    <br>
    <input type="text" placeholder="File Name" name="fileName" id="fileName">
  </div>
  <div>
        <input type="submit" value="Upload File" name="btnClick" id="btnClick"/>&nbsp;
        <input accept=".pdf" type="file" name="myFile" id="myFile"/>
</div>
</form>
</body>