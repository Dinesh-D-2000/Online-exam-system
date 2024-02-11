<?php
include_once("config.php");
?>


<html>
<head>
	<title>End test</title>
	<link rel="stylesheet" href="style6.css">
</head>
<body >

<?php
include_once("config.php");
$roll=$_GET['roll'];
echo "<br/><a href= 'results.php?roll=$roll'><p class='red'>END TEST</p></a>";
echo "<br/><p class='red'>NOTE: Once your test is submitted you cannot login again...</p>";
?>
</body>
</html>