<?php
session_start();
$userId =  $_SESSION["login"];
?>
<!DOCTYPE html>
<html>
<body>

<h4>
<?php
include("database.php");

$sql = "SELECT name FROM login where user_id='$userId'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Welcome  " . $row["name"]."<br>";
  }
} else {
  echo "0 results";
}
?>
</h4>
<button><a href="logout.php">Logout</a></button>



</body>
</html>