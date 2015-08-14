<?php
session_start();
if(!isset ($_SESSION['username']))
{
   
    include 'denieaccess.php';
    die;
}
include 'connectdb.php';

              $user=$_SESSION['username'];
              $query=mysql_query("select * from studentdetails where username='$user'");
              $result=mysql_fetch_array($query);
              ?>
<html>
    <head>
        </head>
    <body>

                <?php echo"".$_SESSION['username']?>
       
      
 <a href='logout.php'><span>Sign Out</span></a>
 
             
              <?php echo '<a href=>'.$result['firstname'].'  '.$result['lastname'].'</a>';
              ?>
          
    
       <fieldset><legend>My Profile Details</legend>
               
                
           <form action="update.php" method="POST" name="register" onsubmit="return validateform();">
                       <p>First Name:
                           <input type="text" name="fname" id=""value="<?php echo "".$result['firstname'] ?>"</p>
                 
                    <hr ></hr>
                    
                        <p>Last Name:
                   <input type="text" name="lname" id=""value="<?php echo "".$result['lastname'] ?>"</p>
                        <hr></hr>
                     <p>E-mail:
                     <?php echo '<a href=#>'.$result['email'].'</a>' ?></p>
                     
                     <table>
                      <tr>
                          <td><input type="submit"name="" value="Save"</td>
                          <td>&nbsp;&nbsp;&nbsp;</td>
                        <td><input type="reset" name="" value="Reset"></input></td>
                    </tr>
                </table>
                      </form>
                </fieldset>
   
 

       
        <div id="footer">Copyright &COPY; ..All rights reserved.</div>
    </body>
</html>
