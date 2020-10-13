<?php
$nameStr = '';
if (isset($_POST['addName'])) {
    $oldName = trim($_POST['myTextArea']);
    $userName = $_POST['userName'];
    $arr = explode(' ', $userName);
    if (isset($oldName)) {
        $nameStr = $arr[1] . ", " . $arr[0] . "\n" . $oldName;
    } else {
        $nameStr = $arr[1] . ', ' . $arr[0];
    }
    $nameArray = explode("\n", $nameStr);
    sort($nameArray);
    $nameStr = trim(implode("\n", $nameArray));
}
if(isset($_POST['clearName'])) {
}
?>