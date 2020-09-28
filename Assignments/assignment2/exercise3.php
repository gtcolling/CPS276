<?
$sizeCol = 5;
$sizeRow = 15;
for ($i = 1; $i < ($sizeCol + 1); $i++) {
$col[] = $i;
}
for ($i = 1; $i < ($sizeRow + 1); $i++) {
    $row[] = $i;
}
?>

<html>
    <table border = 1>
    <? foreach ($row as $r){ ?>
        <tr>
            <? foreach ($col as $c) {?>
                <td> <? echo("Row {$r} Cell {$c}")?> </td>
            <? } ?>
        </tr>
    <? } ?>
    </table>
<html>