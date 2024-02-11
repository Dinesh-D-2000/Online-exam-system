<?php
include_once("config.php");
?>


<html>
<head>
	<title>question3</title>
	<link rel='stylesheet' href='style4.css'>
</head>

	<form action="" method="post" name="form3" >
		<h1 class='head'>Question 3 of 10<br/></h1>
		<h2 class='ques'>3)The Arjuna Awards were instituted in the year<br/></h2>
		<p class='options'>
		<input type="radio" name="choice" value="N">a)1965<br/>
		<input type="radio" name="choice" value="N">b) 1963<br/>
		<input type="radio" name="choice" value="Y">c) 1961<br/>
		<input type="radio" name="choice" value="N">d) 1975<br/>
		
		<input type="submit" name="submit3" value="submit-Q3" class='sub' ></p>
	</form>

<?php
include_once("config.php");
$roll=$_GET['roll'];

$res=mysqli_query($connection,"INSERT INTO $roll(ques) VALUES(3)")	;
if(isset($_POST['choice']))
{
if(isset($_POST['submit3']))
{
$choice=$_POST['choice'];
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=3");
echo "<p class='answer'>Answer submitted</br></p> ";
}
else
{
$choice='N';
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=3");
}
}

echo "<br/><a href= 'ques-2.php?roll=$roll'><p class='Prev-Q'>Prev-Q</p></a>";
echo "<br/><a href= 'ques-4.php?roll=$roll'><p class='Next-Q'>Next-Q</p></a>";
?>

</body>
</html>