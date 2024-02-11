<?php
include_once("config.php");
?>

<html>
<head>
	<title>question1</title>
	<link rel='stylesheet' href='style4.css'>
	<link rel='stylesheet' href='style5.css'>
</head>
<body >
	
	<form action="" method="post" name="form3" >
	
		<h1 class='head'>Question 1 of 10<br/></h1>
		
			<h2 class='ques'>1) The National Chemical Laboratory is located in</h2><br/>

		<p class='options'>
		<input type="radio" name="choice" value="N">a) mumbai<br/>
		<input type="radio"  name="choice" value="N">b) bengaluru<br/>
		<input type="radio"  name="choice" value="N">c) hyderabad<br/>
		<input type="radio"  name="choice" value="Y" >d) pune<br/>
		<input type="submit"  name="submit1" value="submit-Q1" class='sub'></p>
		
			</form>
		


<?php
include_once("config.php");
$roll=$_GET['roll'];

$res=mysqli_query($connection,"INSERT INTO $roll(ques) VALUES(1)")	;
if(isset($_POST['choice']))
{
if(isset($_POST['submit1']))
{
$choice=$_POST['choice'];
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=1");
echo "<p class='answer'>Answer submitted</br></p> ";
}
else
{
$choice='N';
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=1");
}
}
echo "<br/><a href= 'ques-2.php?roll=$roll'><p class='Next-Q'>Next-Q</p></a>";
?>

</body>
</html>