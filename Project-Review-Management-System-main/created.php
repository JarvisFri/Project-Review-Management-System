<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $_POST['name'];
    $password= $_POST['pass'];
    echo "The name submitted is ".$name;
    echo "<br>";
    echo "The password submitted is ".$password;
    ?>
</body>
</html>
<?php
include "connect.php";
	$result = mysqli_query($con,"SELECT * FROM faculty WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		header("Location: F_Loginerror.php");
	} else {
		header("Location: fhome.php");
	}
?>