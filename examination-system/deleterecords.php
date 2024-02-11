<?php
include_once("config.php");
?>

<html>
<head>
	<title>Deleterecords</title>
	

</head>
<body >
	<form action='' method='post' name= 'form10'>
		<p align='center'><h1 align="center">Roll:<input type="text" name="roll" ></h1></p>
		<p align='center'><input type="submit" name="submit25" value='submit' class='sub'></form></p>
	<?php
	include_once("config.php");
	if(isset($_POST['submit25']))
	{
		$roll=$_POST['roll'];
		$result1=mysqli_query($connection,"DROP TABLE $roll");
		$result2=mysqli_query($connection,"DELETE FROM registry where roll='$roll'");
		$result3=mysqli_query($connection,"DELETE FROM submitted where roll='$roll'");
		echo "<br/><p align='center'><font color='red' size='4pt'>Record of $roll has been deleted</font></p>";

	}
	?>

</body>
</html>