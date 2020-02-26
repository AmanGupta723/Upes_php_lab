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
}
</script>

</script>
</head>
<body>
<form name="myform"  method="post" action="#" onsubmit="return email_validation();">
Email: <input type="text" name="email"><br/>
<input type="submit" value="register">
</form></body>
</html>