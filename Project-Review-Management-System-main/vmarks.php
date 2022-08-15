<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
<h1> View Marks</h1>
<?php include "connect.php";
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire');
session_start();
$RegNo=$_GET['RegNo'];
$sql="SELECT * FROM marks WHERE RegNo={$RegNo} AND PID={$_SESSION['PID']}";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
$row=mysqli_fetch_assoc($result);
?>
<ul class="list-group">
  <li class="list-group-item">Faculty 1: <?php if(isset($row['MF1'])) {
  echo $row['MF1'];  ?></li><?php } ?>
  <li class="list-group-item">Faculty 2: <?php if (isset($row['MF2'])) {
    echo $row['MF2']; ?></li><?php } ?>
  <li class="list-group-item">Faculty 3: <?php if (isset($row['MF3'])) {
   echo $row['MF3']; ?></li><?php } ?>
  <li class="list-group-item">Status:
  <?php if (isset($row['Status'])) {
   echo $row['Status']; ?></li>
  <?php } ?>
</ul>
</body>
</html>