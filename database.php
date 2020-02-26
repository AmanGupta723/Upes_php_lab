<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password )
 or die("Connection Failed");
$db ="CREATE database db1;";
$query = "CREATE TABLE students (Name VARCHAR(30), Rollno int);";
$result =  mysqli_query($query);
