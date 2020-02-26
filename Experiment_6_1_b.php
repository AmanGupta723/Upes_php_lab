<!DOCTYPEhtml>
<html>
<head>
</head>
<body>
<?php
$file = fopen("studentdetails.txt","r") or die("Unable to open file");
while(!feof($file))
{
    echo fgets($file)."<br>";
}
fclose($file);
?>
	</body>
</html>
