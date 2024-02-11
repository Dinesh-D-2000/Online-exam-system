<?php
include_once("config.php");
?>
<html>
<head>
	<title>question7</title>
	<link rel='stylesheet' href='style4.css'>
</head>
<body >
	<form action="" method="post" name="form3" >
		<h1 class='head'>Question 7 of 10<br/></h1>
		<h2 class='ques'>7) Toda tribes mainly live in<br/></h2>
		<p class='options'>
		<input type="radio" name="choice" value="N">a) Madhya Pradesh<br/>
		<input type="radio" name="choice" value="Y">b) Tamil Nadu<br/>
		<input type="radio" name="choice" value="N">c) Kerala<br/>
		<input type="radio" name="choice" value="N">d) Odisha<br/>
		
		<input type="submit" name="submit7" value="submit-Q7"  class='sub'></p>
	</form>
<?php
include_once("config.php");
$roll=$_GET['roll'];

$res=mysqli_query($connection,"INSERT INTO $roll(ques) VALUES(7)")	;
if(isset($_POST['choice']))
{
if(isset($_POST['submit7']))
{
$choice=$_POST['choice'];
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=7");
echo "<p class='answer'>Answer submitted</br></p> ";
}
else
{
$choice='N';
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=7");
}
}
echo "<br/><a href= 'ques-6.php?roll=$roll'><p class='Prev-Q'>Prev-Q</p></a>";
echo "<br/><a href= 'ques-8.php?roll=$roll'><p class='Next-Q'>Next-Q</p></a>";

?>

</body>
</html>