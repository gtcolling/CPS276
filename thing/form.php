<?php
    
?>

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
        <input type="text" name="name" id="name" class="form-control"
            value="<? echo isset($_POST["name"]) ? $name = $_POST["name"] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="address">Address
            <?if(isset($_POST['submit'])){
                if($validator->checkFormat($_REQUEST['address'],"address") == "error"){
                    ?> <label class="error">Address cannot be blank and must have a valid address<?
                }
            }?>
        </label>
        <input type="text" name="address" id="address" class="form-control"
            value="<? echo isset($_POST['address']) ? $_POST['address'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="city">City
            <?if(isset($_POST['submit'])){
                if($validator->checkFormat($_REQUEST['city'],"city") == "error"){
                    ?> <label class="error">City cannot be blank and must be a valid city<?
                }
            }?>
        </label>
        <input type="text" name="city" id="city" class="form-control"
            value="<? echo isset($_POST['city']) ? $_POST['city'] : ''; ?>">
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
        <input type="text" name="phone" id="phone" class="form-control"
            value="<? echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="email">Email Address
            <?if(isset($_POST['submit'])){
                if($validator->checkFormat($_REQUEST['email'],"email") == "error"){
                    ?> <label class="error">Email cannot be blank and must be typed as a proper email<?
                }
            }?>
        </label>
        <input type="text" name="email" id="email" class="form-control"
            value="<? echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="birthDate">Date of Birth
            <?if(isset($_POST['submit'])){
                if($validator->checkFormat($_REQUEST['birthDate'],"birthDate") == "error"){
                    ?> <label class="error">DoB cannot be blank and must be written 99/99/9999<?
                }
            }?>
        </label>
        <input type="text" name="birthDate" id="birthDate" class="form-control"
            value="<?echo isset($_POST['birthDate']) ? $_POST['birthDate'] : ''; ?>">
    </div>
    <div class="form-group col-md-12">Please check all contacnt types you would like (optional):
    </div>
    <div class="form-horizontal'">
        <input type="checkbox" class="checkbox inline" id="newsLetter" name="newsLetter"
        <? if(isset($_REQUEST['submit']) && $_REQUEST['newsLetter']){?>
                checked
            <?}?>>
        <label class="form-check-label" for="newsLetter">Newsletter</label>
        <input type="checkbox" class="checkbox inline" id="emailUpdate" name="emailUpdate"
        <? if(isset($_REQUEST['submit']) && $_REQUEST['emailUpdate']){?>
                checked
            <?}?>>
        <label class="form-check-label" for="emailUpdate">Email Updates</label>
        <input type="checkbox" class="checkbox inline" id="textUpdate" name="textUpdate"
        <? if(isset($_REQUEST['submit']) && $_REQUEST['textUpdate']){?>
                checked
            <?}?>>
        <label class="form-check-label" for="textUpdate">Text Updates</label>
    </div>
    <div class="form-group col-md-12" name="age">Please select an age range (you must select one):
    </div>
    <input type="hidden" name="age">
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" value="10-18" id="age1" name="age" class="custom-control-input"
            <?if(isset($_REQUEST['submit']) && $_POST['age'] == "10-18"){?>
                checked
            <?}?>>
        <label class="custom-control-label" for="age1">10-18</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" value="19-30" id="age2" name="age" class="custom-control-input"
            <? if(isset($_REQUEST['submit']) && $_REQUEST['age'] == "19-30"){?>
                checked
            <?}?>>
        <label class="custom-control-label" for="age2">19-30</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" value="31-50" id="age3" name="age" class="custom-control-input"
            <? if(isset($_REQUEST['submit']) && $_REQUEST['age'] == "31-50"){?>
                checked
            <?}?>>
        <label class="custom-control-label" for="age3">31-50</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" value="51+" id="age4" name="age" class="custom-control-input"
            <? if(isset($_REQUEST['submit']) && $_REQUEST['age'] == "51+"){?>
                checked
            <?}?>>
        <label class="custom-control-label" for="age4">51+
            <?if(isset($_POST['submit'])){
                if($_REQUEST['age'] == null && $validator->checkFormat($_REQUEST['age'],"age") == "error"){ ?> 
                <label class="error">You must select and age range<?
                }
            }?>
        </label>
    </div>
    <br>
    <div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</div>
	</form>
	</body>
</html>