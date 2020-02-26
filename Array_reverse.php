<?php    
$season=array("summer","winter","spring","autumn");    
$reverseseason=array_reverse($season);  
$preserveseason=array_reverse($season, true);
print_r($season);

print_r($reverseseason);

print_r($preserveseason);
?>    
