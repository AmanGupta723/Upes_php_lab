<html>

<body>
<form action="" method='POST'>
Enter the number with commas: 
<input type="text" name="n1"> 
<input type="submit">
</form>
</body>
</html>

<?php
if($_POST)
{
    $N=$_POST['n1'];
$num=explode(",",$N);

$index=array();
$j=0;
for($i=5;$i<=100;$i=$i+5)
{
    $index[$i]=$num[$j];
    $j++;
}
print_r($index);
}
?>