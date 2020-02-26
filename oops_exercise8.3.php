<?php
//3. Create a web application that takes the faculty feedback from the student and stores it in a file. 
//Given the subject name and the faculty name, the application has to display the average feedback for each criterion
//and the comments given by all students.
//The student has to enter the feedback form with the following details: 
//faculty name, subject, date, student id, student name, feedback rating, and comments.
//Create a class called as feedback to hold the details as mentioned above.
//when the student clicks the “submit feedback” button, the details has to be stored in the feedback object after which
//the details are retrieved and stored in a file, when the faculty name and the subject are given,
//feedback summary is displayed as follows student notebook php core . Use it to Innovative Learning Center.?
?>
<!doctype html>
<html>
<head>
<style>
table, th,td{
  border: 1px solid black;
    border-color: black;
      border-collapse: collapse;
    
};
</style>
</head>
<body>
<form action =""method="Post">
Enter the faculty name:<br>
<input type ="text" name="faculty_name"><br>
Enter the subject:<br>
<input type ="text" name="subject"><br>
Enter the date:<br>
<input type ="date"name="date"><br>
Enter the student_id:<br>
<input type="text" name="student_id"><br>
Enter the Student name:<br>
<input type="text" name="student_name"><br>
<p> Rating scale 6 - Excellent, 5 - Very Good, 4 - Good, 3 - Fair / Average, 2 - Poor, 1 - Yes, 0 - No</p>
<Table >
<tr>
<td > FACULTY FEEDBACK FORM</td>
</tr>
<tr>
<td>Question</td>
<td> feedback_Rating </td>
<td>      comments<td>
</tr>
<tr>
<td> Amount of material covered in the course</td>
<td><input type="number" name="Rate1" min="0" max="6"></td>
<td><input type="text" name="Comment1"></td>
</tr>
<tr>
<td>Topics were covered in logical sequence</td>
<td><input type="number" name="Rate2" min="0" max="6"></td>
<td><input type="text" name="Comment2"></td>
</tr>
<tr>
<td>Assignment are sufficient and helpful</td>
<td><input type="number" name="Rate3" min="0" max="6"></td>
<td><input type="text" name="Comment3"></td>
</tr>
<tr>
<td>Overall, the courses was helpful</td>
<td><input type="number" name="Rate4" min="0" max="6"></td>
<td><input type="text" name="Comment4"></td>
</tr>
</Table>
<input type="submit" 
</form>
</body>
</head>
</html>
<?php 
if($_POST)
{
 class feedback
 {
    
 var $r1;
 var $r2;
 var $r3;
 var $r4;
 var  $avg;
 public function __construct($rate1,$rate2,$rate3,$rate4)
     {
     $this->r1 = $rate1;
     $this->r2 = $rate2;
     $this->r3 = $rate3;
     $this->r3 = $rate4;
 }
 public function average()
 {
     $this->avg=($this->r1+$this->r2+$this->r3+$this->r3)/4;
     return $this->avg;
 }
     
  }
 $faculty=$_POST['faculty_name'];
$sub=$_POST['subject'];
$date=$_POST['date'];
$id=$_POST['student_id'];
$student=$_POST['student_name'];
$rate1=$_POST['Rate1'];
$rate2=$_POST['Rate2'];
$rate3=$_POST['Rate3'];
$rate4=$_POST['Rate4'];
$comment1=$_POST['Comment1'];
$comment2=$_POST['Comment2'];
$comment3=$_POST['Comment3'];
$comment4=$_POST['Comment4'];

$f1 = new feedback($rate1,$rate2,$rate3,$rate4);
$average_rating=$f1->average();
$string ="Faculty name :".$faculty.PHP_EOL." Subject :".$sub.PHP_EOL."Date :".$date.PHP_EOL."student_id:".$id.PHP_EOL."Student_name=".$student.PHP_EOL.
"rating=".$average_rating.PHP_EOL."The comments given by all students".PHP_EOL." Amount of material covered in the course = ".$comment1.PHP_EOL.
"Topics were covered in logical sequence = ".$comment2.PHP_EOL."Assignment are sufficient and helpful = ".$comment3.PHP_EOL."Overall, the courses was helpful = ".$comment4
.PHP_EOL;
$file = fopen("feedbackform.txt","a") or die("Unable to open file");
fwrite($file,$string);
}
?>