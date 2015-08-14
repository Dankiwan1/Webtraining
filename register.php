
<?php
include 'connectdb.php';
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
        

$sql="insert into studentdetails(firstname,lastname,username,email,password)VALUES('$firstname','$lastname','$username','$email','$password')";
//mysql_query($sql);
 $result_insert_user = mysql_query($sql);
	          
	                echo 'Thank you for registering!';
		 include'index.html';
	          
	        
			?>
	