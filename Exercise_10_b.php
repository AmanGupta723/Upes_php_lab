
<html>
<body>
<script>
function validateform(){
    var name=document.myform.name.value;
    var password=document.myform.password.value;
    
    if (name.length<6){
        alert("Name must be greater than 6 characters");
        return false;
    }else if(password.length<6){
        alert("Password must be at least 6 characters long.");
        return false;
    }
}
</script>
<body>
<form name="myform" method="post" action="" onsubmit="return validateform()" >
Name: <input type="text" name="name"><br/>
Password: <input type="password" name="password"><br/>
<input type="submit" value="register">
</form>
</body>
</html>
