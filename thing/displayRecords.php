<?php
$sql = 'SELECT * FROM a10';
$results = execute($sql, true);
$deleteBox = array();
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
	<form method="post" action="" id="display">
	<div>
	<button onclick="return confirm('Are you sure?');" type="submit" name="delete" class="btn btn-danger" from_id="display">Delete</button>
	</div>
	<br>
	<?if (!empty($results)){?>
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
					<th scope="col">Delete</th>
    			</tr>
  			</thead>
  			<tbody>
			  <?foreach ($results as $rows => $row) {?>
    			<tr>
      				<td><?echo($row['Name'])?></td>
      				<td><?echo($row['Address'])?></td>
					<td><?echo($row['City'])?></td>
					<td><?echo($row['State'])?></td>
					<td><?echo($row['Phone'])?></td>
					<td><?echo($row['Email'])?></td>
					<td><?echo($row['BirthDate'])?></td>
					<td><?echo($row['Contact'])?></td>
					<td><?echo($row['Age'])?></td>
					<?$id = $row['ID']?>
					<td><input type="checkbox" value="<?echo($id);?>" name="deleteBox[]"></td>
					<td><?echo($id)?></td>
    			</tr>
				<?}?>
  			</tbody>
		</table>
			  <?} else{echo("No entries to display.");}?>
		</form>
    </body>
</html>
<?
if (isset($_POST['delete'])) {
	$deleteBox = $_REQUEST['deleteBox'];
	if (empty($deleteBox)){
		echo("You must check a box field to delete!");
	}
	$sql2 = 'DELETE FROM a10 WHERE ID = ?';
	foreach($deleteBox as $things => $thing){
		$deleteResults  = array();
		$deleteResults[] = $thing;
		execute($sql2, true, $deleteResults);
		unset($deleteResults);
	}
	header("Refresh:0");
}
?>