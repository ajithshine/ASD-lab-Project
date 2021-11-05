<?php

session_start();

session_unset();
session_destroy();

header("location: /Project_New2/login.php");

?>