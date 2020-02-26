<!DOCTYPE html>
<html>
<title>words count</title>
<body>
<h2>Words Count </h2><br>
<form action="" method="POST">
Enter the words:<br>
  <textarea name="words" rows="10" cols="30"></textarea><br>


<input type="submit" value="Submit"><br><br>


<?php  
if($_POST)
{
$c=$_POST["words"];
$name = str_word_count(strtolower($c), 1);
$name1=array();
$num=array();
$t=0;
$r=0;
for($i=0;$i<count($name);$i++)
{
    if($name[$i]!=" "){
    
 $name1[$r]=$name[$i];
          $name = str_replace("$name[$i]"," ",$name,$t);
         $num[$r]=$t;
         $r++;
          
}
}
$p=0;
foreach($name1 as $n)
{
  echo $n." count = ".$num[$p]."<br>";
  $p++;
}
}
?>