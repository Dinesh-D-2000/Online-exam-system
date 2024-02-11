
<?php
include_once("config.php");
?>

<html>
<head>
	<title>question4</title>
	<link rel='stylesheet' href='style4.css'>
</head>
<body >
	<form action="" method="post" name="form3" >
		<h1 class='head'>Question 4 of 10<br/></h1>
		<h2 class='ques'>4) Which one of the following countries is not a member of the OPEC?<br/></h2>
		<p class='options'>
		<input type="radio" name="choice" value="N">a) Algeria<br/>
		<input type="radio" name="choice" value="N">b) Indonesia<br/>
		<input type="radio" name="choice" value="Y">c) Malaysia<br/>
		<input type="radio" name="choice" value="N">d) Nigeria<br/>
		
		<input type="submit" name="submit4" value="submit-Q4" class='sub' ></p>
	</form>

<?php
include_once("config.php");
$roll=$_GET['roll'];

$res=mysqli_query($connection,"INSERT INTO $roll(ques) VALUES(4)")	;
if(isset($_POST['choice']))
{
if(isset($_POST['submit4']))
{
$choice=$_POST['choice'];
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=4");
echo "<p class='answer'>Answer submitted</br></p> ";
}
else
{
$choice='N';
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=4");
}
}
echo "<br/><a href= 'ques-3.php?roll=$roll'><p class='Prev-Q'>Prev-Q</p></a>";
echo "<br/><a href= 'ques-5.php?roll=$roll'><p class='Next-Q'>Next-Q</p></a>";

?>

</body>
</html>