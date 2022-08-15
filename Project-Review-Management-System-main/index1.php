<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first Page</title>
    
</head>
<body>
<?php include "connect.php" ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <div class="container">
    Last Night Project
    <?php
    echo "Hello";
    echo "<br>";
    Echo "Hello";
    ?>
    </div>
    <form action="created.php" method="POST" enctype="multipart/for-data">
    <div><label for="DOB">Date of Admission</label>
    <input type="date" name="DOB" id="DOB" required></div>
    <div><label for="name">
    Name</label> <Input type="text" name="name" id="name" placeholder="enter Name" required>
    </div>
    <div>
    Password <Input type="password" name="pass" placeholder="Enter Password" required>
    </div>
    <div>
    <label for="check1">True</label> <Input type="checkbox" name="check1" id="check1" value="True">
    </div>
    <div><label for="email">
    email</label> <Input type="email" name="email" id="email" placeholder="enter Email">
    </div>
    <div><label for="age">
    age</label> <Input type="number" name="age" id="age" placeholder="Age" min="18" max="100">
    </div>
    <div>Gender
    <div><label for="male">Male</label>
    <input type="radio" name="gender" id="male">
    <label for="female">Female</label>
    <input type="radio" name="gender" id="female">
    <label for="other">Other</label>
    <input type="radio" name="gender" id="other">
    </div></div>
    <div>
    <label for="teams">Teams</label>
    <select name="teams" id="teams">
    <option value="RCB">RCB</option>
    <option value="cSK">CSK</option>
    </select>
    </div>
    <div>
    <label for="file">FIle</label>
    <input type="file" id="file" name="file">
    </div>
    <div>
    <label for="phone">Phone</label>
    <input type="tel" id="phone" name="phone">
    </div>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
    
    
    </form>
</body>
</html>