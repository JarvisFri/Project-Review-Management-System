<?php
include "connect.php";
$sql="INSERT INTO Member VALUES ({$_POST["RegNo"]}, '{$_POST["Name"]}', {$_POST["Phone"]}, '{$_POST["Gender"]}', '{$_POST["DOB"]}', '{$_POST["email"]}', '{$_POST["TID"]}', '{$_POST["school"]}', '{$_POST["interests"]}', '{$_POST["username"]}', '{$_POST["password"]}')";
	$result = mysqli_query($con,$sql) or die("Bad Query: $sql");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		header("Location: S_Loginerror.php");
    } 
    header('Location: s_login.php');
?>