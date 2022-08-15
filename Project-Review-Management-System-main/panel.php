<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.dm-service-banner{
    background: #ebf9f9;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 97px 0;
    position: relative;
}
.dm-banner-title{
    text-align: right;
    padding: 57px 0px;
}
.dm-banner-title .back-box{
    position: absolute;
    left: 0px;
    top: 0px;
    height: 50%;
    width: 38%;
    /* background: #fff; */
    box-shadow: 0px 0px 5px 0px #ddd;
    background: url('https://www.hummingwebians.com/public/images/dm-small.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
.dm-right-corner{
    width: 149px;
    height: 86px;
    background: #67d092;
    position: absolute;
    top: 0px;
    right: 0px;
}
.dm-banner-title .front-text-box{
    position: relative;
    z-index: 1;
}
.dm-banner-title h1 {
    font-size: 57px;
    font-weight: 400;
    letter-spacing: 4px;
    border-bottom: 1px solid #5b945b;
    padding-bottom: 14px;
    text-shadow: 3px 3px 1px #d4d1d1;
    color: #0e4e6d;
}
.dm-banner-text{
    padding: 107px 0px;
    font-size: 15px;
    font-weight: 450;
    color: #34945c;
}

</style>
</head>
<body>
<div class="dm-service-banner">
    <div class="dm-right-corner"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="dm-banner-title">
                    <div class="front-text-box">
                        <h1>My<br>PANEL</h1>
                    </div>
                    <div class="back-box"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "connect.php";
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire');
session_start();
$FID = $_SESSION['FID'];
$result = mysqli_query($con,"SELECT * FROM Panel WHERE FID1=$FID OR FID2=$FID OR FID3=$FID");
$row=mysqli_fetch_assoc($result);
$_SESSION['Pan_ID']=$row['Pan_ID'];
echo $FID;
?>
<h2>Faculty Involved</h2>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="w3images/panel2.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2><?php $result = mysqli_query($con,"SELECT * FROM Faculty WHERE FID={$row['FID1']}");
        $row1=mysqli_fetch_assoc($result);
        echo $row1['Name'];
        ?></h2>
        <p class="title">CEO & Founder</p>
        <p><?php 
        echo $row1['Dept'];
        ?></p>
        <p><?php echo $row1['email'];
        ?></p>
        <p><a href="fprofileg.php?FID=<?php echo $row['FID1'] ?>" " class="button">Contact</a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="w3images/panel1.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2><h2><?php $result = mysqli_query($con,"SELECT * FROM Faculty WHERE FID={$row['FID2']}");
        $row1=mysqli_fetch_assoc($result);
        echo $row1['Name'];
        ?></h2>
        <p class="title">Art Director</p>
        <p><?php echo $row1['Dept'];
        ?></p>
        <p><?php echo $row1['email'];
        ?></p>
        <p><a href="fprofileg.php?FID=<?php echo $row['FID2'] ?>" " class="button">Contact</a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="w3images/panel3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2><h2><?php $result = mysqli_query($con,"SELECT * FROM Faculty WHERE FID={$row['FID3']}");
        $row1=mysqli_fetch_assoc($result);
        echo $row1['Name'];
        ?></h2>
        <p class="title">Designer</p>
        <p><?php echo $row1['Dept'];
        ?></p>
        <p><?php echo $row1['email'];
        ?></p>
        <p><a href="fprofileg.php?FID=<?php echo $row['FID3'] ?>" " class="button">Contact</a></p>
      </div>
    </div>
  </div>
</div>
<h2>Projects Submitted</h2>
<div class="row">
<?php $result = mysqli_query($con,"SELECT * FROM Project WHERE Pan_ID={$row['Pan_ID']}") or die("Bad Query: $sql");; 
 ?>
<?php while($row1=mysqli_fetch_assoc($result)){
            ?>
  <div class="column">
    <div class="card">
      <img src="w3images/project.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2><?php 
        echo $row1['Name'];
        ?></h2>
        <p><?php 
        echo $row1['PID'];
        ?></p>
        <p><?php echo $row1['Init_Date'];
        ?></p>
        <p><a href="tlist.php?PID=<?php echo $row1['PID'] ?>" " class="button">Evaluate</a></p>
      </div>
    </div>
  </div>
  <?php } ?>  
</div>

</body>
</html>

       