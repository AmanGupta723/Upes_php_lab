<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<body>
<form action="" method="POST">

Enter user name:<br>
<input type="text" name= "name"><br>
Enter password: <br>

<input type="password" name ="pass"><br>
<input type="submit"><br>
    


<?php 
if($_POST)
{
if ($_SESSION['user']==$_POST['name']&&$_SESSION['password']==$_POST['pass'])
{
   
   echo "<a href=\"https://www.google.com/\"> Visit Google.com!</a>";
}
else 
{
    echo "wrong password and user name";
}
}
?>
</form> 
</body>
</head>
</html>