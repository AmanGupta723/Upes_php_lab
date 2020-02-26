<!doctype html>
<html>
<head>
<form action="" method="POST">
ENTER THE NUMBER
<INPUT TYPE="text" name="n1">
<select name="option">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
<input type ="text" name="n2">
<input type ="submit">
</form>
</head>
</html>
<?php 
class calculator{

function add($a,$b)
{
  return $a+$b;  
}
function subtract($a,$b)
{
    return $a-$b;
}
function multiply($a,$b)
{
    return $a*$b;
}
function division($a,$b)
{
    return $a/$b;
}
}
if ($_POST)
{
    $a1=$_POST['n1'];
    $a2=$_POST['n2'];
    $op=$_POST['option'];
    $c1=new calculator;
    if ($op=='+')
    {
        echo $c1->add($a1,$a2);
        
    }
    if ($op=='-')
    {
        echo $c1->subtract($a1,$a2);
        
    }
    
    if ($op=='*')
    {
        echo $c1->multiply($a1,$a2);
        
    }
    if ($op=='/')
    {
        echo $c1->division($a1,$a2);
        
    }
    
    
}

?>