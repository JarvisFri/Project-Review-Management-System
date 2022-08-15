<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Upload</title>
</head>
<body>
<h1>Project Upload</h1>
<?php include "connect.php";
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire');
session_start();
$username = $_SESSION['user'];
$sql="SELECT * FROM member WHERE username='{$username}'";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
$row=mysqli_fetch_assoc($result);
?>
<div class="list-group">
<?php $sql="SELECT * FROM member NATURAL JOIN Team_Identifier WHERE TID={$row['TID']} AND RegNo={$row['RegNo']}";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
$_SESSION['RegNo']=$row['RegNo'];
while($row=mysqli_fetch_assoc($result)){
$sql1= "SELECT * FROM Project WHERE PID={$row['PID']}";
$result1=mysqli_query($con,$sql1) or die("Bad Query: $sql1");
$row1=mysqli_fetch_assoc($result1);
$_SESSION['PID']=$row1['PID'];
echo "<a href='pupload.php?PID={$row1['PID']}' class='list-group-item list-group-item-action' >{$row1['Name']}</a>";
}
 ?>
</div>
</body>
</html>