<?php
$url='127.0.0.1:33062';
$username='root';
$password='';
// define("DB_CHARSET","utf8mb4");
$conn=mysqli_connect($url,$username,$password,"stud");
return $conn;
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>