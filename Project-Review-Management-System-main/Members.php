<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Members</title>
</head>
<body>
<h1> Members</h1>
<?php include "connect.php";
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire');
session_start();
$TID = $_GET['TID'];
$sql="SELECT * FROM member WHERE TID={$TID}";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
?>
<div class="list-group">
<?php
while($row=mysqli_fetch_assoc($result)){
echo "<a href='Members.php?TID={$row['TID']}' class='list-group-item list-group-item-action' >{$row['Name']}</a>";
echo "<a href='vmarks.php?RegNo={$row['RegNo']}' class='btn btn-primary'>View</a>";
echo "<a href='mmarks.php?RegNo={$row['RegNo']}' class='btn btn-primary'>Modify</a>";
} ?>
</div>
</body>
</html>