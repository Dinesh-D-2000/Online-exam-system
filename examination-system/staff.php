<?php
include_once("config.php");
?>


<html>
<head>
	<title>List</title>
</head>
<body>
<table width='50%' border=1  align="center">

<?php
if(isset($_POST['submit20']))
{
	$roll=$_POST['roll'];
	$password=$_POST['password'];
	if($roll=='4880' AND $password=='macro@01')
	{
		echo "<p align='center'><font color='green' size='6pt'>Staff login successful</font></p>";
		echo "<a href='deleterecords.php'><p align='right'><font color='red' size='2pt'>Delete students records</font></p></a>";
		$result=mysqli_query($connection,"SELECT * FROM registry");
		echo "<tr>";
		echo "<td><font size='4pt' color='red'>D.O.B</font></td>";
		echo "<td><font size='4pt' color=red>Username</font></td>";
		echo "<td><font size='4pt' color=red>marks</font></td>";
		echo "<td><font size='4pt' color='red'>start_time</font></td>";
		echo "<td><font size='4pt' color='red'>end_time</font></td>";

		if(mysqli_num_rows($result)>0)
		{
			while($res=mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>",$res['dob']."</td>";
				echo "<td>",$res['roll']."</td>";
				echo "<td>",$res['marks']."</td>";
				echo "<td>",$res['start_time']."</td>";
				echo "<td>",$res['end_time']."</td>";
			}
		}
	}
	else
	{
			echo "<p align='center'><font color='red' size='6pt'>Staff login unsuccessful</font></p>";
			echo "<p align='right'><font color='red' size='6pt'>Delete students records</font></p>";
	}
}
?>
</table>
</body>
</html>