<?
$error = "Error";
$fileLink = "";
require_once("writing.php");
$file = new File;
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
  <title>File Maker</title>
  <h1>File and Folder Maker</h1>
    <h5>Enter a folder name and the contents of a file. Folder name should contain alpha numeric characters only.</h5>
    <?if (isset($_POST['btnSubmit'])) {
        $folderName = $_POST['folderName'];
        $fileText = $_POST['fileContents'];
        $fileLink = $file->createFolder($folderName, $fileText);
        if ($fileLink == false) {

        } else { ?>
            <a href='<?=$fileLink?>' target='mypage'><?echo($fileLink)?></a>
       <? }
    }?>
    <br>
    <br>
    <br>
    <br>
  <form method="post" action="">
  <div class="form-group">
    <label>Folder Name</label>
    <input type="text" class="form-control" id="folderName" name="folderName" value="<?echo($folderName)?>">
  </div>
  <div class="form-group">
    <label>File Contents</label>
    <textarea type="text" class="form-control" id="fileContents" name="fileContents">
<?echo($fileText)?>
</textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
</form>
</body>