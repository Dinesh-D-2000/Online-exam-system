<?php

include_once("config.php");

if(isset($_GET['submit'] ))
{	
	
	$roll=$_GET['roll'];
	$dob=$_GET['dob'];
	$result1=mysqli_query($connection,"SELECT * FROM registry where roll ='$roll' AND dob='$dob' ");
	$result2=mysqli_query($connection,"SELECT * FROM submitted where roll ='$roll'");
	if(mysqli_num_rows($result2)>0)
	{
		echo "<br/><p align= 'center'><font color='red' size='6pt'>Your response is already submitted</font></p>";
	}
	else
	{

	if(mysqli_num_rows($result1)>0)
	{

	while($res=mysqli_fetch_array($result1))
	{
		
	
	if($res['roll']='$roll' )
	{
	
		date_default_timezone_set('Asia/Calcutta');
		$current_time=date('h:i:s a');
		
			$result=mysqli_query($connection,"CREATE TABLE $roll (ques int primary key , choice varchar(5) DEFAULT 'N') ");
			$result3=mysqli_query($connection,"UPDATE registry SET start_time='$current_time' where roll='$roll'");
			
			echo "<p align='center'><font color= 'green' size='6pt'>Login successful</font></p>";
			
			echo "<br/><a href= 'ques-1.php?roll=$roll'><p align='center'><font color ='green' size= '6pt'>proceed</font></p></a>";}
			
			
			
		}}
		else
		{
			echo "<br/><p align= 'center'><font color='red' size='6pt'>Oops!! Sorry You have not registered</font></p>";
		}}

		

}
?>	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #CCFFCC">

</body>
</html>



	
	
