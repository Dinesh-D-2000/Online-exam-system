<?php
include_once('config.php');
?>

<html>
<head>
	<title>Results</title>
	<link rel='stylesheet' href='style5.css'>
	<link rel='stylesheet' href='style6.css'>

</head>
<body>
<?php
include_once('config.php');
$roll=$_GET['roll'];
$result=mysqli_query($connection,"INSERT INTO submitted VALUES('$roll') ");
$sum=0;
$result=mysqli_query($connection,"SELECT choice FROM $roll WHERE choice='Y'" );
while($res=mysqli_fetch_array($result))
{

$sum=$sum+1;

}
echo "<br/><p class='para'>Your response has been successfully submitted</p>";
echo "<table align='center' style='border: 4px solid green' cellsapcing=0 cell pading=0>
<tr> <td><font color=blue size='4pt'>Your marks:</td><td>$sum</font></td></tr>
</table>";
$result1=mysqli_query($connection,"UPDATE registry SET marks=$sum where roll='$roll'" );
date_default_timezone_set('Asia/Calcutta');
$current_time1=date('h:i:s a');

	$result3=mysqli_query($connection,"UPDATE registry SET end_time='$current_time1' where roll='$roll'");



echo "<a href= 'index.html'><p class='red'>EXIT</p></a>";

?>

</body>>
</html>