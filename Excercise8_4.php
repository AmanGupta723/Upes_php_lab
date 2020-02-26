<?php
//. Create a class employee with id, name, age, gender, designation and salary. write a function display employee details() to
// accept an employee object and display the details of the employee. designation of the employee can be either “programmer”,
//“project lead” or “team member”. the function should throw a design proper exception (with a meaningful message) if the designation
// of an employee is not any of these.
//Write a function called view employeedetails (), which calls the display employeedetails() method in question 
//1. modify the displayemployeedetails () function to propagate the designation improperexception that is handled in view 
//employeedetails() function that displays a message called “sorry!!!! employee details cannot be viewed”.
?>

<!doctype html>
<html>
<head>
<body>
<form action="" method="POST">
Enter your id<br>
<input type="text" name="id"><br>
Enter your name<br>
<input type="text" name="name"><br>
Enter your age<br>
<input type="text" name="age"><br>
Enter your gender<br>
<input type= "text" name="gender"><br>
Enter your designation<br>
<input type="text" name="design"><br>
Enter your salary<br>
<input type ="text" name="salary"><br> 
<input type="submit"><br>
</form>
</body>
</head></html>

<?php 
class employees
{
    var $id;
    var $name;
    var $age;
    var $gender;
    var $designation;
    var $salary;
    function employedetail($id,$name,$age,$gender,$designation,$salary)
    {
        $this->id=$id;
        $this->name=$name;
        $this->age=$age;
        $this->gender=$gender;
        $this->designation=$designation;
        $this->salary=$salary;
    }
    function display_employee_detail(){
        echo "id = ".$this->id."<br>";
        echo "name=". $this->name."<br>";
        echo "age=".$this->age."<br>";
        echo "gender=".$this->gender."<br>";
        echo  "salary=".$this->salary."<br>";
        if ($this->designation!="programmer"&&$this->designation!="project lead"&&$this->designation!="team member") {
            throw new exception("the designation of an employee is not from the programmer,
project lead or team member");
         }
        echo "designation = ".$this->designation."<br>";
    }
}
    
$E1=new employees;
$E1->employedetail($_POST['id'],$_POST['name'],$_POST['age'],$_POST['gender'],$_POST['design'],$_POST['salary']);
try
{
    $E1->display_employee_detail();
}
catch(Exception $e)
{
    echo "Message: ".$e->getMessage();
}
?>