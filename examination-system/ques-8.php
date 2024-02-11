<?php
include_once("config.php");
?>
<html>
<head>
	<title>question8</title>
	<link rel='stylesheet' href='style4.css'>
</head>
<body >
	<form action="" method="post" name="form3" >
		<h1 class='head'>Question 8 of 10<br/></h1>
		<h2 class='ques'>8) The term ‘Duck’ is associated with :<br/></h2>
		<p class='options'>
		<input type="radio" name="choice" value="N">a) Soccer<br/>
		<input type="radio" name="choice" value="N">b) Volleyball<br/>
		<input type="radio" name="choice" value="N">c) Golf<br/>
		<input type="radio" name="choice" value="Y">d) Cricket<br/>
		
		<input type="submit"  name="submit8" value="submit-Q8" class='sub' ></p>
	</form>
<?php
include_once("config.php");
$roll=$_GET['roll'];

$res=mysqli_query($connection,"INSERT INTO $roll(ques) VALUES(8)")	;
if(isset($_POST['choice']))
{
if(isset($_POST['submit8']))
{
$choice=$_POST['choice'];
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=8");
echo "<p class='answer'>Answer submitted</br></p> ";
}
else
{
$choice='N';
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=8");
}
}
echo "<br/><a href= 'ques-7.php?roll=$roll'><p class='Prev-Q'>Prev-Q</p></a>";
echo "<br/><a href= 'ques-9.php?roll=$roll'><p class='Next-Q'>Next-Q</p></a>";

?>

</body>
</html>