<!DOCTYPE HTML>
<html>
<head> 
<title> calculator</title>
<body>
<form action="" method="POST">
Enter 1st number: 
<input type="text" name="n1" >
<select name="op">
<option value="+">+</option>
<option value="-">-</option>
<option value="%">%</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
Enter 2nd number:
<input type="text" name="n2" >

<input type="submit">
</form>
<?php
if($_POST)
{
$a=$_POST[n1];
$b=$_POST[n2];
$c=$_POST[op];
switch($c)
{
 case'+':
$result=$a+$b;
break;
case'-':
$result=$a-$b;
break;
case'%':
$result=$a%$b;
break;
case'*':
$result=$a*$b;
break;
case'/':
$result=$a/$b;
break;
}

echo "result = ",$result;

}
?>

</body>
</head>
</html>
 




