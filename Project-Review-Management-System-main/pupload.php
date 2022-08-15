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
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body class="sansserif">
<h1>File Upload</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload" class='btn btn-primary'>
  <input type="hidden" name="PID" value=<?php echo $_GET['PID']; ?> >
  <input type="submit" value="Upload Image" name="submit" class='btn btn-primary'>
</form>

</body>
</html>