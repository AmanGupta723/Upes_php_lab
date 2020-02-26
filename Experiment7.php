<!doctype html>
<html>
<head>
<script>
function email_validation()
{
    var x=document.myform.email.value;
    var atposition=x.indexOf("@");
    var dotposition=x.lastIndexOf(".");
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){
        alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);
        return false;
    }
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
</head>
<body>
<form name="myform"  method="post" action="#" onsubmit="return email_validation();">

Name: <input type="text" name="name"><br/>
Password: <input type="password" name="password"><br/>
Email: <input type="text" name="email"><br/>
<input type="submit" value="register"></form>
</body>
</html>