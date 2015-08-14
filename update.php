<?php
session_start();
include 'connectdb.php';
$current_user=$_SESSION['username'];
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$sql="UPDATE  studentdetails  SET firstname='$firstname',lastname='$lastname'where username='$current_user'";
mysql_query($sql);
include'home.php';


 ?>