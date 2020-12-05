<?php

require_once('StickyForm.php');
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
    <div class="container">
    <form method="post" action="#">
    <div class="form-group">
        <label for="name">Name
            <?if(isset($_POST['submit'])){
                if($validator->checkFormat($_REQUEST['name'],"name") == "error"){
                    ?> <label class="error">Name cannot be blank and must be a standard name<?
                }
            }?>
        </label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
	<div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" name="address" id="address" class="form-control">
    </div>
    <div class="form-group">
	<label for="city">City
            <?if(isset($_POST['submit'])){
                if($validator->checkFormat($_REQUEST['city'],"city") == "error"){
                    ?> <label class="error">City cannot be a blank space must be a valid city </label><?
                }
            }?>
        </label>
        <input type="text" name="city" id="city" class="form-control">
    </div>
    <div class="form-group">
        <label for="inputAddress">State</label>
        <select name="state" id="state" class="form-control">
            <option>Inidana</option>
            <option>Ohio</option>
            <option selected>Michigan</option>
            <option>California</option>
            <option>Florida</option>
      </select>
    </div>
    <div class="form-group">
        <label for="phone">Phone Number
            <?if(isset($_POST['submit'])){
                if($validator->checkFormat($_REQUEST['phone'],"phone") == "error"){
                    ?> <label class="error">Phone cannot be blank and must be written 999.999.9999<?
                }
            }?>
        </label>
        <input type="text" name="phone" id="phone" class="form-control">
    </div>
    <div class="form-group">
        <label for="inputAddress">Email Address</label>
        <input type="text" name="email" id="email" class="form-control">
    </div>
	<div class="form-group">
        <label for="birthDate">Date of Birth
            <?if(isset($_POST['submit'])){
                if($validator->checkFormat($_REQUEST['birthDate'],"birthDate") == "error"){
                    ?> <label class="error">DoB cannot be blank and must be written 99/99/9999<?
                }
            }?>
        </label>
        <input type="text" name="birthDate" id="birthDate" class="form-control">
    </div>
    <div class="form-group col-md-12">Please check all contacnt types you would like (optional):
    </div>
    <div class="form-horizontal'">
        <input type="checkbox" class="checkbox inline" id="newsLetter" name="newsLetter">
        <label class="form-check-label" for="newsLetter">Newsletter</label>
        <input type="checkbox" class="checkbox inline" id="emailUpdate" name="emailUpdate">
        <label class="form-check-label" for="emailUpdate">Email Updates</label>
        <input type="checkbox" class="checkbox inline" id="textUpdate" name="textUpdate">
        <label class="form-check-label" for="textUpdate">Text Updates</label>
    </div>
    <div class="form-group col-md-12">Please select an age range (you must select one):
    </div>
	<div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="age1" name="age" class="custom-control-input">
        <label class="custom-control-label" for="age1">10-18</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="age2" name="age" class="custom-control-input">
        <label class="custom-control-label" for="age2">19-30</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="age3" name="age" class="custom-control-input">
        <label class="custom-control-label" for="age3">31-50</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="age4" name="age" class="custom-control-input">
        <label class="custom-control-label" for="age4">51 +</label>
    </div>
    <br>
    <div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    <?}else{?>
        display form
    <?}?>
    </body>
</html> 