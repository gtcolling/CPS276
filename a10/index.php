<?php

require_once('StickyForm.php');
require_once('db.php');
//require_once 'form.php';

/* WRITE THE NECESSARY PHP CODE HERE NOT THE $RESULT ARRAY ON LINES 35 AND 36.  YOU WILL NEED TO RETURN AN ARRAY THAT CONTIANS TO INDEXES. FIRST IS A PLACE FOR A MESSAGE (MAYBE BLANK OR NOT DEPENDING ON THE SITUATION) AND THE OTHER IS THE FORM OR THE TABLE DISPLAYING THE DATA */
$validator = new StickyForm();
$page='form';


if(!empty($_REQUEST['page'])){
	$page=$_REQUEST['page'];
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Final Project</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
			.error {
				color: red;
				margin-left: 5px;
			}
			.space {
				margin-right: 30px;
				float: left;
			}
			nav ul li {
				list-style: none;
			}
			</style>
	</head>

	<body class="container">
		<nav>
			<ul>
				<li><a href="index.php?page=form">Add Contact Information</a></li>
				<li><a href="index.php?page=display">Display All Contacts Information</a></li>
			</ul>
		</nav>

	<? if($page == 'form'){?>
	<?}else{?>
        <?
        getPDO($db);
        $sql = 'SELECT * FROM a10';
        $results = execute($sql, true);
        if(empty($results)) {
            echo("No contacts.");
            die();
        } else { ?>
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Birthdate</th>
      <th scope="col">Contact</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
<?}}?>
	</body>
</html>
<?
if(isset($_POST['submit']) && $validator->checkErrors() === false){
    $contactArray = array();

    if(isset($_POST['newsLetter'])){
        $contactArray[] = "newsLetter";
    }
    if(isset($_POST['emailUpdate'])){
        $contactArray[] = "emailUpdate";
    }
    if(isset($_POST['textUpdate'])){
        $contactArray[] = "textUpdate";
    }
    if(empty($contactArray)){
        $contactString = "No contact options selected";
    }else{
        $contactString = implode(", ", $contactArray);
    }

    getPDO($db);
    
    $args = array();
    $args[] = $_REQUEST['name'];
    $args[] = $_REQUEST['address'];
    $args[] = $_REQUEST['city'];
    $args[] = $_REQUEST['state'];
    $args[] = $_REQUEST['phone'];
    $args[] = $_REQUEST['email'];
    $args[] = $_REQUEST['birthDate'];
    $args[] = $contactString;
    $args[] = $_REQUEST['age'];

    $sql =
    'INSERT INTO a10
    (Name, Address, City, State, Phone, Email, BirthDate, Contact, Age) 
    VALUES (?,?,?,?,?,?,?,?,?)';

    execute($sql, true, $args);
}
?>