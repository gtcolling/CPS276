<?php
require_once "/var/www/html/CPS276/starting-scripts/classes/Pdo_methods.php";
//require_once "/var/www/html/CPS276/starting-scripts/classes/Db_conn.php";
$connection = new PdoMethods();
$connection->dbOpen();

if (empty($_REQUEST['data'])) {
    $val['masterstatus'] = 'error';
    $val['msg'] = 'no data sent';
} else {
    $data = json_decode($_REQUEST['data'],true);
    if (empty($data['name'])) {
        $val['masterstatus'] = 'error';
        $val['msg'] = 'no data sent';
    } else {
        $val['masterstatus'] = 'success';
        $nameInput = explode(" ", $data['name']);
        $nameOutput[0] = $nameInput[1].",";
        $nameOutput[1] = $nameInput[0];
        $nameOutput = implode(" ",$nameOutput);
        $name = $nameOutput;

        // You now have the name entered by the user.
        // Turn this into format lastname, firstname, and insert it into the a8 table.
        // Now select all the records from the a8 table.
        // Turn all these records into one string with is a "\n" delimited list of names.
        // Take this string and set it here:  $val['names'] = $myNames

        $sql = "INSERT INTO a8 (name)
        VALUES ('$name')";
        $connection->selectBinded($sql, '\n');
        
        $sql2 = ("SELECT name FROM a8 ORDER BY name;");
        $results = $connection->selectNotBinded($sql2);

        $thing = "";
        foreach($results as $row){
        $thing = $thing . $row['name'] . "\n";
        }
        //outputs text entered
        //$val['names'] = $name;

        $val['names'] = $thing;

        //$val['names'] = "last, first\nanotherlast, anotherfirst";
    }
}
echo(json_encode($val));