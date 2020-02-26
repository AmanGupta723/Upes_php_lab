<!DOCTYPEhtml>
<html>
	<head>
		<title> Question - 1(c) </title>
	</head>
	<body>
		<?php
            $array = file("studentdetails.txt");
            $city="bihar";
for($i=0;$i<count($array);$i++)
            {
if(stripos($array[$i],$city))
                {
                    $str = explode(":",$array[$i]);
echo"$str[1]<br>";
                }
            }
		?>
	</body>
</html>
