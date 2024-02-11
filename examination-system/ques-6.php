
<?php
include_once("config.php");
?>
<html>
<head>
	<title>question6</title>
	<link rel='stylesheet' href='style4.css'>
</head>
<body >
	<form action="" method="post" name="form3" >
		<h1 class='head'>Question 6 of 10<br/></h1>

		<h2 class='ques'>6) The foirst Asian Games were held in<br/></h2>
		<p class='options'>
		<input type="radio" name="choice" value="N">a) China<br/>
		<input type="radio" name="choice" value="Y">b) India<br/>
		<input type="radio" name="choice" value="N">c) Pakistan<br/>
		<input type="radio" name="choice" value="N">d) Iran<br/>
		
		<input type="submit"   name="submit6" value="submit-Q6" class='sub' ></p>


	</form>
<?php
include_once("config.php");
$roll=$_GET['roll'];

$res=mysqli_query($connection,"INSERT INTO $roll(ques) VALUES(6)")	;
if(isset($_POST['choice']))
{
if(isset($_POST['submit6']))
{
$choice=$_POST['choice'];
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=6");
echo "<p class='answer'>Answer submitted</br></p> ";
}
else
{
$choice='N';
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=6");
}
}
echo "<br/><a href= 'ques-5.php?roll=$roll'><p class='Prev-Q'>Prev-Q</p></a>";
echo "<br/><a href= 'ques-7.php?roll=$roll'><p class='Next-Q'>Next-Q</p></a>";

?>

</body>
</html>