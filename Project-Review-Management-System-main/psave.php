<?php
include "connect.php";
$sql="INSERT INTO Project VALUES ({$_POST["PID"]}, '{$_POST["Name"]}', '{$_POST["Init_Date"]}', {$_POST["FID"]}, '{$_POST["HW_comp"]}', '{$_POST["SW_comp"]}', '{$_POST["Desp"]}', {$_POST["Pan_ID"]})";
    $result = mysqli_query($con,$sql) or die("Bad Query: $sql");
    $sql="INSERT INTO Team_Identifier VALUES ({$_POST["TID1"]},{$_POST["PID"]})";
    $result = mysqli_query($con,$sql) or die("Bad Query: $sql");
    $sql="INSERT INTO Team_Identifier VALUES ({$_POST["TID2"]},{$_POST["PID"]})";
    $result = mysqli_query($con,$sql) or die("Bad Query: $sql");
    echo "Success";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action='fhome.php' method='Post'>
    <input type="hidden" name="username" id="username" value='<?php echo $_SESSION['user']; ?>' >
    <input type="hidden" name="password" id="password" value='<?php echo $_SESSION['pass']; ?>' >
    <input type="submit" value="Back to Main Page">
    </form>
</body>
</html>