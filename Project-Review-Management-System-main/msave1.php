<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "connect.php";
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire');
session_start();
$result = mysqli_query($con,"SELECT * FROM marks WHERE PID={$_SESSION['PID']} AND RegNo={$_SESSION['RegNo']}");
	$count  = mysqli_num_rows($result);
	if($count==0) {
        $avg= $_POST['marks'] / 3;
        echo $avg;
        if($_SESSION['FID1']==1){
        $sql="INSERT INTO marks VALUES ({$_SESSION['RegNo']},{$_POST['marks']},0,0,{$avg},{$_SESSION['PID']},'Not Uploaded') ";}
        elseif($_SESSION['FID1']==2){
        $sql="INSERT INTO marks VALUES ({$_SESSION['RegNo']},0,{$_POST['marks']},0,{$avg},{$_SESSION['PID']},'Not Uploaded') ";}
        else {
        $sql="INSERT INTO marks VALUES ({$_SESSION['RegNo']},0,0,{$_POST['marks']},{$avg},{$_SESSION['PID']},'Not Uploaded') ";}
        $result = mysqli_query($con,$sql) or die("Bad Query: $sql");
    } else {
$sql="UPDATE marks SET MF{$_SESSION['FID1']}={$_POST['marks']} WHERE PID={$_SESSION['PID']} AND RegNo={$_SESSION['RegNo']}";
    $result = mysqli_query($con,$sql) or die("Bad Query: $sql");
    $sql="SELECT * FROM marks WHERE PID={$_SESSION['PID']} AND RegNo={$_SESSION['RegNo']}";
    $result = mysqli_query($con,$sql) or die("Bad Query: $sql");
    $row=mysqli_fetch_assoc($result);
    $avg=($row['MF1'] + $row['MF2'] + $row['MF3']) / 3;
    $sql="UPDATE marks SET avg={$avg} WHERE PID={$_SESSION['PID']} AND RegNo={$_SESSION['RegNo']}";
    $result = mysqli_query($con,$sql) or die("Bad Query: $sql");
    }
    echo $_SESSION['user']; ?>
    <form action='fhome.php' method='Post'>
    <input type="hidden" name="username" id="username" value='<?php echo $_SESSION['user']; ?>' >
    <input type="hidden" name="password" id="password" value='<?php echo $_SESSION['pass']; ?>' >
    <input type="submit" value="Back to Main Page">
    </form>
</body>
</html>