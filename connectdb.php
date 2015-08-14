<?php
$dbname="webtraining";//Database name
$dbhost="localhost";// Database host
$dbuser="root";//Database user
$dbpass="";//Database password

$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
mysql_select_db($dbname);
?>
