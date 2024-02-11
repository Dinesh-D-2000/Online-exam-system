<?php
include_once("config.php");
?>
<html>
<head>
	<title>question9</title>
	<link rel='stylesheet' href='style4.css'>
</head>
<body>
	<form action="" method="post" name="form3" >
		<h1 class='head'>Question 9 of 10<br/></h1>
	<h2 class='ques'> 9) With which game is Brookland associated?<br/></h2>
	<p class='options'>
		<input type="radio" name="choice" value="N">a) Hockey<br/>
		<input type="radio" name="choice" value="N">b) Golf<br/>
		<input type="radio" name="choice" value="Y">c) Football<br/>
		<input type="radio" name="choice" value="N">d) Tennis<br/>
		
		<input type="submit"  name="submit9" value="submit-Q9" class='sub' ></p>
	</form>
<?php
include_once("config.php");
$roll=$_GET['roll'];

$res=mysqli_query($connection,"INSERT INTO $roll(ques) VALUES(9)")	;
if(isset($_POST['choice']))
{
if(isset($_POST['submit9']))
{
$choice=$_POST['choice'];
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=9");
echo "<p class='answer'>Answer submitted</br></p> ";
}
else
{
$choice='N';
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=9");
}
}
echo "<br/><a href= 'ques-8.php?roll=$roll'><p class='Prev-Q'>Prev-Q</p></a>";
echo "<br/><a href= 'ques-10.php?roll=$roll'><p class='Next-Q'>Next-Q</p></a>";

?>

</body>
</html>