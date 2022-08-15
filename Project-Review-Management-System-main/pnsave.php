<?php
include "connect.php";
$sql="INSERT INTO Panel VALUES ({$_POST["Pan_ID"]}, {$_POST["FID1"]}, {$_POST["FID2"]}, {$_POST["FID3"]}, '{$_POST["Expertise"]}')";
	$result = mysqli_query($con,$sql) or die("Bad Query: $sql");
?>
<h1>Successful</h1>