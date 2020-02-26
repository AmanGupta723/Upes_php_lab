<?php

	$course=$_REQUEST['course'];
	$hostel=$_REQUEST['hostel'];
	$mess=$_REQUEST['mess'];
	$travel=$_REQUEST['travel'];
	
	if($course=="Mechanical")
	{
		$cfee=50000;
	}
	elseif($course=="Electrical")
	{
		$cfee=55000;
	}
	elseif($course=="Computers")
	{	
		$cfee=60000;
	}
	elseif($course=="B.des")
	{	
		$cfee=50000;
	}
	
	else
	{
		$cfee=80000;
	}
	
	
	if($hostel=="yes")
	{
		$hfee=36000;

	}
	else
	{
		$hfee=0;
	}
	if($mess=="yes")
	{
		$mfee=50000;
	
	}
	else
	{
		$mfee=0;
	}
	if($travel=="yes")
	{
		$tfee=20000;
	
	} 
	else
	{
		$tfee=0;
	}
	
	$lfee=5000;
	$idfee=500;
	$efee=6000;
	$ofee=10000; 
	
	$ttt=$ofee+$efee+$idfee+$lfee+$tfee+$mfee+$hfee+$cfee;	
?>

<html>
<head>
<title>fee</title>
</head>
<body>
<table border=1 align=center>
<tr>
	<th colspan=2>Your FEE for this semester</th>
<tr>
<tr>
	<th>facilities and course</th><th>FEE</th>
</tr>
<tr>
	<td>Tution</td><td><?php echo $cfee;?></td>
</tr>	
<tr>
	<td>hostel</td><td><?php echo $hfee;?></td>
</tr>	
<tr>
	<td>mess</td><td><?php echo $mfee;?></td>
</tr>	
<tr>
	<td>travel</td><td><?php echo $tfee;?></td>
</tr>	
<tr>
	<td>library</td><td><?php echo $lfee;?></td>
</tr>	
<tr>
	<td>id card</td><td><?php echo $idfee;?></td>
</tr>	
<tr>
	<td>Exam </td><td><?php echo $efee;?></td>
</tr>	
<tr>
	<td>Other</td><td><?php echo $ofee;?></td>
</tr>	
<tr>
	<th>Total</th><th><?php echo $ttt; ?></th>
</tr>