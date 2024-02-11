<?php
include_once("config.php");
?>
<html>
<head>
	<title>question10</title>
	<link rel='stylesheet' href='style4.css'>
</head>
<body >
	<form action="" method="post" name="form3" >
		<h1 class='head'>Question 10 of 10<br/></h1>

	<h2 class='ques'>10) How may squares are there in a Chess Board?<br/></h2>
	<p class='options'>
	
		<input type="radio" name="choice" value="N">a) 36<br/>
		<input type="radio" name="choice" value="N">b) 48<br/>
		<input type="radio" name="choice" value="Y">c) 64<br/>
		<input type="radio" name="choice" value="N">d) 72<br/>
		
		<input type="submit" name="submit10" value="submit-Q10" class='sub' ></p>
	</form>
<?php
include_once("config.php");
$roll=$_GET['roll'];

$res=mysqli_query($connection,"INSERT INTO $roll(ques) VALUES(10)")	;
if(isset($_POST['choice']))
{
if(isset($_POST['submit10']))
{
$choice=$_POST['choice'];
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=10");
echo "<p class='answer'>Answer submitted</br></p> ";
}
else
{
$choice='N';
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=10");
}
}
echo "<br/><a href= 'ques-9.php?roll=$roll'><p class='Prev-Q'>Prev-Q</p></a>";
echo "<br/><a href= 'end-1.php?roll=$roll'><p class='Next-Q'>Next-Q</p></a>";

?>

</body>
</html>