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

$sql = "SELECT * FROM students where Reg_no='$regNo'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row["Name"]."<br>";
    echo "Semester: " . $row["Semester"]."<br>";
    echo "Branch: " . $row["Branch"]."<br>";
    echo "Faculty-Id: " . $row["Faculty_id"]."<br>";
  }
} else {
  echo "0 results";
}
?>
</h4>
<button><a href="logout.php">Logout</a></button>

</body>
</html>