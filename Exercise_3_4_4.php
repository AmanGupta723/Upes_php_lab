
<!DOCTYPE HTML>
<html>
<head>
<body >
 <h1 text-alignt:center >Registration form</h1>
<form action= "" method="POST">
Firstname: <br>
<input type ="text" name="Firstname" ><br>
lastname: <br>
<input type="text" name ="Lastname"><br>
gender<br>
<input type="radio" name ="gender" value="male"> male<br>
<input type="radio" name ="gender" value="female"> female<br>
<input type="radio" name ="gender" value="other" >other<br>
<input type="submit"><br>
</form>
</body>
</head>
</html>
<?php


if($_POST)
{if (male==$_POST['gender'])
{$firstname= $_POST[Firstname];

$lastname=$_POST[Lastname];
    echo ('Mr '.$firstname.$lastname);
}

else
{
    echo $firstname.$lastname;
}
}
?>