<!DOCTYPE html>
<html>
	<head>
		<title> Experiment - 4 </title>
	</head>
	<body>
		<form action="" method="post">
			Enter String : <input type="text" name="string"><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
<?php
    if($_POST)
    {
        $str = $_POST["string"];
        echo strtoupper($str);
    }
?>