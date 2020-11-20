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
  <title>Date and Time</title>
  <h1>Add Note</h1>
  <a href='pag2.php' target='mypage'>Display Note</a>
  <form method="post" action="">
  <div class="form-group">
    <label>Date and Time</label>
    <?php
require_once("db.php");
if (isset($_POST['btnSubmit'])) {
    $dateTime = explode("T",$_REQUEST['dateTime']);
    $dateTime = $dateTime[0]." ".$dateTime[1];

    function validateDate($date, $format = 'Y-m-d H:i')
    {
      $d = DateTime::createFromFormat($format, $date);
      return $d && $d->format($format) == $date;
    }

    if(validateDate($dateTime) === false){
      echo"<br>";    
      echo('Error. Please enter date with correct numbers, in the following format: yyyy-mm-ddThh:ii');
    }
    else{
      getPDO($db);
      $sql = 'INSERT INTO a9 (note, entered_at)VALUES(?,?)';
      $args = array();
      $args[] = $_REQUEST['note'];
      $args[] = $_REQUEST['dateTime'];
      execute($sql, true, $args);
    }
}
?>
    <input type="datetime-local" class="form-control" id="dateTime" name="dateTime">
  </div>
  <div class="form-group">
    <label>Note</label>
    <textarea type="text" class="form-control" id="note" name="note">
</textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="btnSubmit">Add Note</button>
</form>
</body>