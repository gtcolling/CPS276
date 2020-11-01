<?
    if (isset($_POST['btnSubmit'])) {
        $username = $_POST['userName'];
        $pass = $_POST['pass'];
    }

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
  <title>Database Practice</title>
  <h1>Create new User</h1>
    <br>
<form method="post">
  <div class="form-group">
    <label>Enter Username</label>
    <input type="text" class="form-control" id="userName">
    <label>Enter Password</label>
    <input type="password" class="form-control" id="pass">
  <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
  </div>
</form>
</body>