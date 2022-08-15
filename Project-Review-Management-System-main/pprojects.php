<!DOCTYPE html>
<html>
<title>Projects</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="w3-content" style="max-width:1200px">
<?php include "connect.php";
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire');
session_start();
$sql="SELECT * FROM project WHERE PID={$_GET['PID']}";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
$row=mysqli_fetch_assoc($result);
?>
<div class="w3-panel">
  <i class="w3-xlarge fa fa-bars"></i>
</div>
<!-- First Grid: Logo & About -->
<div class="w3-row">
<div class="w3-half w3-container">
  <h1 class="w3-jumbo"><?php echo "{$row['Name']}"; ?></h1>
</div>
<div class="w3-half w3-container w3-xlarge w3-text-grey">
  <p class=""><?php echo "{$row['Desp']}"; ?></p>
</div>
</div>

<!-- Second Grid: Resent -->
<div class="w3-panel w3-text-grey">
<h4> <?php
$username = $_SESSION['user'];
 $sql="SELECT * FROM marks NATURAL JOIN member WHERE username='{$username}' and PID={$_GET['PID']}";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
$row1=mysqli_fetch_assoc($result);
echo "PANEL ID:";
if (isset($row["Pan_ID"])) {
  echo $row["Pan_ID"];
}
else {
  echo " ";
}
echo "<br>MARKS AWARDED:";
if (isset($row1["avg"])) {
  echo $row1["avg"];
}
else {
  echo " ";
}
echo "<br>STATUS:";
if (isset($row1["Status"])) {
  echo $row1["Status"];
}
else {
  echo " ";
}
?></h4>
</div>
<div class="w3-row">
<div class="w3-half w3-container">
  <img src="w3images/p1.jpg" style="width:100%">
</div>
<div class="w3-half w3-container">
  <img src="w3images/p2.jpg" style="width:100%">
  
</div>
</div>

<!-- Footer -->
<div class="w3-row w3-section">
  <div class="w3-third w3-container w3-black w3-large" style="height:250px">
    <h2>Info</h2>
    <p><i class="fa fa-map-marker" style="width:30px"></i> <?php echo "PID: "."{$row['PID']}"; ?></p>
    <p><i class="fa fa-phone" style="width:30px"></i> <?php echo "FID: "."{$row['FID']}"; ?></p>
    <p><i class="fa fa-envelope" style="width:30px"> </i> <?php echo "Starting: "."{$row['Init_Date']}"; ?></p>
  </div>
  <div class="w3-third w3-center w3-large w3-dark-grey w3-text-white" style="height:250px">
    <h2>Hardware Component</h2>
    <p><?php echo "{$row['HW_comp']}"; ?></p>
  </div>
  <div class="w3-third w3-center w3-large w3-grey w3-text-white" style="height:250px">
    <h2>Software Component</h2>
    <p><?php echo "{$row['SW_comp']}"; ?></p>
  </div>
</div>
<div class="w3-container w3-text-grey">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</div>

</body>
</html>
