<?php
//1.	Write JavaScript to validate the following fields of the above registration page.
//a. Name (Name should contains alphabets and the length should not be less than 6 characters).
//b. Password (Password should not be less than 6 characters length).
//c. E-mail id (should not contain any invalid and must follow the standard pattern name@domain.com)
//d. Phone number (Phone number should contain 10 digits only).
?>
<! doctype html>
<html>  
<body>
<script type="text/javascript">
function msg()
var name=document.getElementByI("name");//var number=document.getElementById("number").value;
document.write(name); 
</script>  
<form >
Enter your Name:<br>
<input type="text" name="name" placeholder="should not be less than 6 Char" "/><br>
<input type="button" value="name" onclick= "msg()"/>
<br>
</form>
<script type="text/javascript">  
 
</script>  
</body>  
</html