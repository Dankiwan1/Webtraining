<?php
session_start();
if(isset ($_POST['submit']))
{
include 'connectdb.php';
$username=$_POST['username'];
$password=$_POST['password'];
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$result="SELECT * FROM studentdetails where (username='$username' and password='$password')";
$sql=  mysql_query($result);
$count=  mysql_num_rows($sql);
if($count==1){
$_SESSION['loggedin']="Yes";
$_SESSION['username']=$username;

header('location:home.php');
   
}
else{
   
  echo'Password is Incorrect.</div>';
   include 'index.html';

}}

?>