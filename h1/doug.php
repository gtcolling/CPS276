<?php
var_dump($_REQUEST);
var_dump($_POST);
var_dump($_GET);

$val = empty($_REQUEST['pw']) ? '' : $_REQUEST['pw]'];

?>

<html><body>
    <form action ="get.php" method="post">
        <input name="pw" type="text" value="<?echo($val1);?>">
        <input type="submit" value="Click Here">
    </form>
</body></html>