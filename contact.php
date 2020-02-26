<html>
<head>
</head>
<body>
<h3> contact list </h3><br>
<form action="" method="POST">
Name:<br>
<input type="text" name="name" placeholder="  Aman "><br>
E-mail:<br>
<input type="email" name= "email" placeholder="aman.mannni.gupta@gmail.com"><br>
 contact no:<br>
 <input type ="tel" name="number" placeholder="9865634"><br>
 <input type ="submit">
</form>
</body>
</html>
<?php
if($_POST) 
{
    $information = array($_POST['name']=>array( $_POST['email'],$_POST['number']));
    
    $keys = array_keys($information);
    for($i = 0; $i < count($information); $i++)
    {
        echo $keys[$i] . "<br>";
        
        foreach($information[$keys[$i]] as $key => $value)
        {
            echo $key . " : " . $value . "<br>";
        
        echo "<br>";
    }
    
    
    
    }
}
?>