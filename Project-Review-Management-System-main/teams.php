<!DOCTYPE html>
<html>
<title>Teams</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">
<?php include "connect.php";
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire');
session_start();
$username = $_SESSION['user'];
$sql="SELECT * FROM Faculty WHERE username='{$username}'";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
$row=mysqli_fetch_assoc($result);
?>
<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->


  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#pricing" class="w3-bar-item w3-button">Price</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="w3images/pwall.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <p class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS"><?php echo "Team Faculty: {$row['Name']}"; ?></p>
    <p class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS"><?php echo "School: {$row['Dept']}"; ?></p>
  </div>
</div>
<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Oh snap! We just showed you a modal..</h4>
      <h5>Because we can <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Cool huh? Ok, enough teasing around..</p>
      <p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal footer</p>
    </footer>
  </div>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2><?php $sql="SELECT * FROM Team WHERE FID={$row['FID']}";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
$row=mysqli_fetch_assoc($result);
echo "OUR TEAM- "."{$row['Name']}";
 ?></h2>
<p><?php $sql="SELECT * FROM Member WHERE RegNo={$row['Leader']}";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
$row=mysqli_fetch_assoc($result);
echo "OUR Leader- "."{$row['Name']}";
?></p>
<?php 
$sql="SELECT * FROM Team WHERE FID={$_SESSION['FID']}";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
$row=mysqli_fetch_assoc($result);
$sql="SELECT * FROM Member WHERE TID={$row['TID']}";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
$row=mysqli_fetch_assoc($result);
?>
<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="w3images/t1.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3><?php echo $row['Name']; ?></h3>
  <p><?php echo $row['school']; ?></p>
</div>

<div class="w3-quarter">
  <img src="w3images/t2.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3><?php
  $row=mysqli_fetch_assoc($result);
   echo $row['Name']; ?></h3>
  <p><?php echo $row['school']; ?></p>
</div>

<div class="w3-quarter">
  <img src="w3images/t3.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3><?php
  $row=mysqli_fetch_assoc($result);
   echo $row['Name']; ?></h3>
  <p><?php echo $row['school']; ?></p>
</div>

<div class="w3-quarter">
  <img src="w3images/t4.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3><?php
  $row=mysqli_fetch_assoc($result);
   echo $row['Name']; ?></h3>
  <p><?php echo $row['school']; ?></p>
</div>

</div>
</div>



<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>



<!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
