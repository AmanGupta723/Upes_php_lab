
<!doctype html>
<html>
<head>
<body>
<form action="" method="POST">
Enter the seat number:
<input type="text" name="n1">
<input type="submit">
</form>
</body>
</head>
</html>
<?php

if($_POST)
{
    $num=$_POST[n1];
    $check=$num%8;
    if($check==0)
        echo "side upper";
        
        
        if($check==7)
            echo "side lower";
            
            if($check==3)
                echo "upper";
                
                
                if($check==6)
                    echo "upper";
                    
                    if($check==2)
                        echo "Middle";
                        
                        
                        if($check==5)
                            echo "Middle";
                            
                            if($check==1)
                                echo "lower";
                                
                                if($check==4)
                                    echo "lower";
                                    
}
?>