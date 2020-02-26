<?php
session_start();
?>
<!doctype html>
<html>
<head>
<body>
<form action="" method="POST">
set your user_id<br>
<input type ="text" name="user"><br>
set your password:<br>
<input type="password" name ="pass"><br>
<input type ="submit"><br>
</form> 
</body>
</head>
</html>
<?php
if($_POST)
{
$_SESSION["user"]=$_POST['user'];
$_SESSION["password"]=$_POST['pass'];

}
?>
