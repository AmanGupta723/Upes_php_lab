<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="" method="POST">
Enter the number : <input type ="text" name="no" maxlength="5"><br>

<input type="submit" value="submit">
</form>
</body>
</html>

<?php
if($_POST)
{
$n = $_POST["no"];
if($n%2==0)
{
echo "$n is even number";
}
else 
{
echo"$n is odd number";
}
}

?>
