<?php
include "connect.php";
$sql="INSERT INTO Team VALUES ({$_POST["TID"]}, '{$_POST["Name"]}', '{$_POST["Estd_Date"]}', {$_POST["No_of_mem"]}, {$_POST["FID"]},{$_POST["Leader"]})";
	$result = mysqli_query($con,$sql) or die("Bad Query: $sql");
?>
<h1>Successful</h1>