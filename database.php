<?php
$url='localhost';
$username='root';
$password='';
// define("DB_CHARSET","utf8mb4");
$conn=mysqli_connect($url,$username,$password,"dbproject");
return $conn;
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>