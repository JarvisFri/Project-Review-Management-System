<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify</title>
</head>
<body>
<h1>Modify Marks</h1>
<?php include "connect.php";
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire');
session_start();
$RegNo=$_GET['RegNo'];
$_SESSION['RegNo']=$RegNo;
$FID=$_SESSION['FID'];
$FID1= $FID % 3;
$_SESSION['FID1']=$FID1;
$sql="SELECT * FROM marks WHERE RegNo={$RegNo} AND PID={$_SESSION['PID']}";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
$row=mysqli_fetch_assoc($result);
?>
<?php if($FID1==1){ ?>
<ul class="list-group">
  <form action="msave1.php" method="post">
  <input name="marks" id="marks" placeholder="Enter marks" type="number">
  <input type="Submit" value="Modify">
  </form>
  <li class="list-group-item">Faculty 2: <?php if (isset($row['MF1'])) {
   echo $row['Status']; echo $row['MF1']; ?></li><?php } ?>
  <li class="list-group-item">Faculty 3: <?php if (isset($row['MF2'])) {
   echo $row['Status']; echo $row['MF3']; ?></li><?php } ?>
</ul>
<?php }else if($FID1==2){ ?>
    <ul class="list-group">
<li class="list-group-item">Faculty 1: <?php if (isset($row['MF1'])) {
   echo $row['Status']; echo $row['MF3']; ?></li><?php } ?>
  <form action="msave1.php" method="post">
  <input name="marks" id="marks" placeholder="Enter marks" type="number">
  <input type="Submit" value="Modify">
  </form>
  <li class="list-group-item">Faculty 3: <?php if (isset($row['MF3'])) {
   echo $row['Status']; echo $row['MF3']; ?></li><?php } ?>
</ul>
<?php } else { ?>
    <ul class="list-group">
<li class="list-group-item">Faculty 1: <?php if (isset($row['MF1'])) {
   echo $row['Status']; echo $row['MF1']; ?></li>  <?php } ?>
  <li class="list-group-item">Faculty 2: <?php if (isset($row['MF2'])) {
   echo $row['Status']; echo $row['MF2']; ?></li><?php } ?>
  <form action="msave1.php" method="post">
  <input name="marks" id="marks" placeholder="Enter marks" type="number">
  <input type="Submit" value="Modify">
  </form>
</ul>
<?php } ?>
</body>
</html>