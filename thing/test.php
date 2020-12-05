<html>
<form action="" name="frm" method="post">
<input type="checkbox" name="hobby[]" value="coding">  coding &nbsp
<input type="checkbox" name="hobby[]" value="database">  database &nbsp
<input type="checkbox" name="hobby[]" value="software engineer">  soft Engineering <br>
<input type="submit" name="submit" value="submit"> 
</form>
</html>

<?php
    if(isset($_POST['submit'])){
        $hobby = $_POST['hobby'];

        foreach ($hobby as $hobys=>$value) {
             echo "Hobby : ".$value."<br />";
        }
    }
?>