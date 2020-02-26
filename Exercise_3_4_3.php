
 
<?php 

    {
        $string = 'MynameisAmanGuptaa';
        $vowels = array('a','e','i','o','u');
        $len = strlen($string);
        $num = 0;
        
       
        for($i=0; $i<$len; $i++){
            foreach($vowels as $value)
            if($string[$i]==$value)
            {
                $num++;
            }
        }
        
      
        echo "Number of vowels ". $num ."\n";
    }
 
?>