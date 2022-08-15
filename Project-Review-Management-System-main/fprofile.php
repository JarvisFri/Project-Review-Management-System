<!DOCTYPE html>
<html>
<title>Faculty Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">
<?php include "connect.php";
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire');
session_start();
$username = $_SESSION['user'];
$sql="SELECT * FROM Faculty WHERE username='{$username}'";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
$row=mysqli_fetch_assoc($result);
$sql="SELECT * FROM F_location WHERE Building='{$row['Building']}'";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
$row1=mysqli_fetch_assoc($result);
?>
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="w3images/user.png" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo "{$row['Name']}";
?> </h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo "{$row['Dept']}"; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo "{$row['Cabin_no']}".", "."{$row['Building']}"; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo "{$row['email']}"; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo "{$row['Phone']}"; ?></p>
          <hr>

          
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Timing</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Opening Hour </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo "{$row1['Open_hour']}"; ?> </h6>
          <p></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Closing Hour </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo "{$row1['Close_hour']}"; ?></h6></h6>
          <p></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Faculty ID</b></h5>
          <h6 class="w3-text-teal"><i ></i><?php echo "{$row['FID']}"; ?></h6>
          <p> </p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Login Details</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Username</b></h5>
          <h6 class="w3-text-teal"><?php echo "{$row['username']}"; ?></h6>
          
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Password</b></h5>
          <h6 class="w3-text-teal"><?php echo "{$row['password']}"; ?></h6>
          
          <hr>
        </div>
        
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>

