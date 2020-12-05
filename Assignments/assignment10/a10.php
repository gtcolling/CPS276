<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CPS 276 Assignment 4</title>
  </head>
  <body>
    <div class = "container">
    <form method="post">
        <h1 for="addName"> Add Names </h1>
        <button type="submit" class="btn btn-primary" name="addName">Add Names</button>
        <button type="submit" class="btn btn-primary" name="clearName">Clear Names</button>
        <div class="form-row">
        <div class="form-group col-md-12">
            <label for="firstname">Name (letters only)</label>
            <input type="name" name = "userName" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label for="firstname">Address (just numbers and street)</label>
            <input type="name" name = "userName" class="form-control">
        </div>
        <div class="form-group col-md-12">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
        <option>Alaska </option>
        <option> Maine </option>
        <option selected> Michigan </option>
        <option> New York </option>
        <option> West Virginia </option>
        </select>
        </div>
        </div>
    </form>
    </div>
  </body>
</html>