<?php 
//write the code for displaying the names when the "Display Names" button is clicked here.
require_once "/var/www/html/CPS276/starting-scripts/classes/Pdo_methods.php";
$connection = new PdoMethods();
$connection->dbOpen();

$sql2 = ("SELECT name FROM a8 ORDER BY name;");
$results = $connection->selectNotBinded($sql2);

$thing = "";
foreach($results as $row){
    $thing = $thing . $row['name'] . "\n";
}

$val['names'] = $thing;

echo(json_encode($val));
?>