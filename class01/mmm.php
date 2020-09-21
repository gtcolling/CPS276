<?
$fname='xxx';
$lname='';
?>

<html>
    <form action="mmm.php" method="post">
        <table border="0" cellspacing="1" cellpadding="1">
            <tr>
                <td>Enter First name</td>
                <td><input value="<?echo($fname);?>" type="text" name="fname" size=20 maxlength=10></td>
            </tr>
            <tr>
                <td align="left">Enter Last name</td>
                <td><input type="text" name="lname" size =20 maxlength=10> </td>
            </tr>
        </table>
        <input type="submit" value="Press Me">
    </form>
</html>
