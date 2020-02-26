<!DOCTYPE html>
<html>
	<head>
		<title> Experiment - 4 Question - 3(1)</title>
	</head>
	<body>
		<form action="" method="post">
			Enter Name : <input type="text" name="text1"><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
<?php 
    if($_POST)
    {
        $str = $_POST["text1"];
        $arr1 = explode(" ",$str);
        echo "First Name is : $arr1[0] <br>";
        echo "Middle Name is : $arr1[1] <br>";
        echo "Last Name is : $arr1[2] <br>";
    }
?>