<?php

include_once("config.php");
if(isset($_POST['submit2']))
{
	$roll=$_POST['roll'];
	$dob=$_POST['dob'];
	$result=mysqli_query($connection,"INSERT INTO registry(dob,roll) VALUES('$dob','$roll')");
	echo "<link rel='stylesheet' href='style5.css'>";
	echo "<p class='para' >Your details are succesfully registered<br/></p>";
	echo " <p class='para'>Your login details:<br/>Roll_no:$roll<br/>password:$dob<br/></p>";
}
?>
<html>
<head>
	<title>Success</title>
</head>
<body >
	<a href="login.html"><p align='center'><font size='5px'>click to go back to login page</font></p></a>
</body>
</html>