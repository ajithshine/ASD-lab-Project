
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>students</title>
  <link rel="stylesheet" href="profile.css">
</head>
<body>
<aside class="profile-card">
      <header>
        <!-- here’s the avatar -->
        <a href="#">
          <img src="def.png" class="hoverZoomLink">
        </a> 
<?php
$regNo =  $_SESSION["login"];
include("database.php");
$sql = "SELECT * FROM students where Reg_no='$regNo'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      
      echo "<h1>". $row["Name"]."</h1><br>";

    
  ?>
  </header>
  <div class="profile-bio">

  <?php

      
      echo "<b> Semester: " . $row["Semester"]."</b><br>";
      echo "<b> Branch: " . $row["Branch"]."</b><br>";
      echo "<b> Faculty-Id: " . $row["Faculty_id"]."</b><br>";
      
    }
  } else {
    echo "0 results";
  }
  ?>
          
      
  </div>
</aside>  
</body>
</html>
