<style>
.serif {
  font-family: "Times New Roman", Times, serif;
}

.sansserif {
  font-family: Arial, Helvetica, sans-serif;
}

.monospace {
  font-family: "Lucida Console", Courier, monospace;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body class="sansserif">
<?php include "connect.php";
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire');
session_start();
?>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "<h1>Successful</h1>";
    $uploadOk = 1;
    $result = mysqli_query($con,"SELECT * FROM marks WHERE PID={$_POST['PID']} AND RegNo={$_SESSION['RegNo']}");
    $row=mysqli_fetch_assoc($result);
    $count  = mysqli_num_rows($result);
    $result = mysqli_query($con,"SELECT * FROM Project WHERE PID={$_POST['PID']}");
    $row=mysqli_fetch_assoc($result);
	if($count==0) {
    $sql="INSERT INTO marks VALUES ({$_SESSION['RegNo']},0,0,0,0,{$_POST['PID']},'Uploaded') ";}
    else{
    $sql="UPDATE marks SET Status='Uploaded' WHERE PID={$_POST['PID']} AND RegNo={$_SESSION['RegNo']}";}
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
?>
</body>
</html>
