<!doctype html>
<html>
<head>
<body>
<form action="" method="POST">
number:
<input type="text" name="number">
<input type="submit" value="submit">
</form>
<?php
if($_POST)
{ 
function factorial($number)
 { 

    if ($number < 2) { 
        return 1; 
    } else { 
       return ($number * factorial($number-1)); 
    } 
}
echo factorial($_POST[number]);
}
?>




</body>
</head>
</html>
