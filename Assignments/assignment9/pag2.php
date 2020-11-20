<?php
require_once("db.php");

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
  <title>Display</title>
  <h1>Display Notes</h1>
  <a href='a9.php' target='mypage'>Add Note</a>
  <form method="post" action="">
  <div class="form-group">
    <label>Beginning Date</label>
    <input type="date" class="form-control" id="begDate" name="begDate">
  </div>
  <div class="form-group">
    <label>Ending Date</label>
    <input type="date" class="form-control" id="endDate" name="endDate">
  </div>
  <button type="submit" class="btn btn-primary" name="btnSubmit2">Get Notes</button>
  <br>
  <br>
<? if (isset($_POST['btnSubmit2'])) {
        $args = array();
        $args[] = $_REQUEST['begDate'];
        $args[] = $_REQUEST['endDate'];
        getPDO($db);
        $sql = 'SELECT * from a9 WHERE entered_at >= ? AND entered_at <= ? ORDER BY entered_at';
        $results = execute($sql, true, $args);
        if(empty($results)) {
            echo("No notes for the dates in the selected range.");
            die();
        }
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Note</th>
    </tr>
  </thead>
  <tbody>
<?  foreach ($results as $rows => $row) {
      $dateObject = date_create_from_format('Y-m-d H:i:00', $row['entered_at']);
      $readable = $dateObject->format('m/d/Y g:i a');
?>
    <tr>
      <td><?echo($readable);?></td>
      <td><?echo($row['note']);?></td>
    </tr>
  <?}?>
  </tbody>
</table>
<?}?>
</form>
</body>