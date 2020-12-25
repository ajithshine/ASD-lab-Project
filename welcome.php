<?php
session_start();
$regNo =  $_SESSION["login"];
?>
<!DOCTYPE html>
<html>
<body>

<h4>
<?php
include("database.php");

$sql = "SELECT Name FROM students where Regno='$userId'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Welcome  " . $row["Name"]."<br>";
  }
} else {
  echo "0 results";
}
?>
</h4>
<button><a href="logout.php">Logout</a></button>

</body>
</html>