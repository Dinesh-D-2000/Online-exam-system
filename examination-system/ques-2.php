<?php
include_once("config.php");
?>

<html>
<head>
	<title>question2</title>
	<link rel='stylesheet' href='style4.css'>

</head>
<body>

	<form action="" method="post" name="form3" >
			<h1 class='head'>Question 2 of 10<br/></h1>
		<h2 class='ques'>2) The first woman to climb mount Everest was<br/></h2>

		<p class='options'>
			<input type="radio" name="choice" value="N">a) Marie Jose perec<br/>
			
		<input type="radio" name="choice" value="N">b) Florence Griffith Joyner<br/>
		<input type="radio" name="choice" value="Y">c) Junko Tabei<br/>
		<input type="radio" name="choice" value="N">d) Jackie Joyner Kersee<br/>
		
		<input type="submit" name="submit2" value="submit-Q2" class='sub' ></p>
	</form>



<?php
include_once("config.php");
$roll=$_GET['roll'];

$res=mysqli_query($connection,"INSERT INTO $roll(ques) VALUES(2)")	;
if(isset($_POST['choice']))
{
if(isset($_POST['submit2']))
{
$choice=$_POST['choice'];
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=2");
echo "<p class='answer'>Answer submitted</br></p> ";
}
else
{
$choice='N';
$res2=mysqli_query($connection,"UPDATE $roll SET choice='$choice' where ques=2");
}
}
echo "<br/><a href= 'ques-1.php?roll=$roll'><p class='Prev-Q'>Prev-Q</p></a>";
echo "</br><a href= 'ques-3.php?roll=$roll'><p class='Next-Q'>Next-Q</p></a>";

?>


</body>
</html>