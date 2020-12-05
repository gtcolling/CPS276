<?php

require_once('StickyForm.php');
require_once('db.php');
getPDO($db);

/* WRITE THE NECESSARY PHP CODE HERE NOT THE $RESULT ARRAY ON LINES 35 AND 36.  YOU WILL NEED TO RETURN AN ARRAY THAT CONTIANS TO INDEXES. FIRST IS A PLACE FOR A MESSAGE (MAYBE BLANK OR NOT DEPENDING ON THE SITUATION) AND THE OTHER IS THE FORM OR THE TABLE DISPLAYING THE DATA */
$validator = new StickyForm();
$page='form';


if(!empty($_REQUEST['page'])){
    $page=$_REQUEST['page'];
    if($_REQUEST['page']!= 'form' && $_REQUEST['page'] != 'display'){
        $page = "form";
        echo($page);
    }
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

	<? if($page == 'form'){
        require_once("form.php");?>
    <?}else{
        require_once("displayRecords.php");?>
	<?}?>
	</body>
</html>

<?if(isset($_POST['submit']) && $validator->checkErrors() === false){
    echo("Entry added!");

    $contactArray = array();

    if(isset($_POST['newsLetter'])){
        $contactArray[] = "News Letter";
    }
    if(isset($_POST['emailUpdate'])){
        $contactArray[] = "Email Update";
    }
    if(isset($_POST['textUpdate'])){
        $contactArray[] = "Text Update";
    }

    if(empty($contactArray)){
        $contactString = "No contact options selected";
    }else{
        $contactString = implode(", ", $contactArray);
    }

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
}?>