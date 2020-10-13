<?php
class NameList {
    public static function add() {
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
    return $nameStr;
    }
    public static function clear() {
    if(isset($_POST['clearName'])) {

        }
    }
}
?>