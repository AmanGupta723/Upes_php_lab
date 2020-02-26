<html>
<body>
<form action=""  method="post">
enter the string:
<input type="text" name="string">
<input type="submit">
</form></body>
</html>
<?php

if($_POST)
{
   
    $s=$_POST['string'];

echo ctype_alpha($s);
 

}
?>