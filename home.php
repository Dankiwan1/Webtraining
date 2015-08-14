<!DOCKTYPE HTML>
<?php
session_start();

if(!isset ($_SESSION['username']))
{
   
    include 'denieaccess.php';
   die;
   //header('location:denieaccess.php');
}

include 'connectdb.php';

              $user=$_SESSION['username'];
              $query=mysql_query("select * from studentdetails where username='$user'");
              $result=mysql_fetch_array($query);
              ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Welcome</title>
        
    </head>
    <body>

                <?php echo" Welcome ".$_SESSION['username']?> <a href="editprofile.php">Edit Details</a>
				<br>
      
          
 
              <label>Your Details are:</label>&nbsp;
              <?php echo '<a href="#">'.$result['firstname'].'  '.$result['lastname'].'</a>';
              ?><br><br>
              <a href='logout.php'><span>Sign Out</span></a>
			 
		
    </body>
</html>
