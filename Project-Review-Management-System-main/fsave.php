<?php
include "connect.php";
$sql="INSERT INTO Faculty VALUES ({$_POST["FID"]}, '{$_POST["Name"]}', {$_POST["Phone"]}, '{$_POST["email"]}', '{$_POST["Dept"]}', '{$_POST["Cabin_no"]}', '{$_POST["Building"]}', '{$_POST["username"]}', '{$_POST["password"]}')";
	$result = mysqli_query($con,$sql) or die("Bad Query: $sql");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		header("Location: F_Loginerror.php");
    } 
    header('Location: F_login.php');
?>