<?php

$servername="localhost";
$username="dinesh";
$password="password";
$dbname="online_exam";
$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection==false)
{
	echo "<p align='right'> <font color=red > Dinesh's Database not connected</font></p><br/>";
	

}
else 
{
	echo "<p align='right'> <font color=green >Dinesh's Database connected</font></p><br/>";
	

}
?>