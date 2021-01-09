<?php
include("database.php");
session_start();
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($conn,"select * from students where Regno='$user_id' and Password='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$Reg_no;
	}
}
if (isset($_SESSION["login"]))
{
<<<<<<< HEAD:stu.php
    header("location: students.php");
=======
    header("location: students.php?link=profile.php");
>>>>>>> pr/5:login.php
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Management</title>
    <link rel="stylesheet" href="stu.css">
</head>

<body>
    <p><b>Students Database Management System</b></p>
    <div class="cont">
        <div class="student">
            <p><b>Student Login</b></p>
            <form  method="post">
                <input type="text" placeholder="Register No" name="user_id"><br><br>
                <input type="password" placeholder="Password" name="pass"><br><br>
                <button class="btn1" name="submit">Login</button>
                <span><?php
               
                if(isset($found))
                {
                    echo "<h6>"."Register No or Password Incorrect"."</h6>";
                }
                ?></span>
                
            </form>
            <div class="footer"></div>
        </div>
        <div class="faculty">
            <p><b>Faculty Login</b></p>
            <form action="">
                <input type="text" placeholder="Faculty Id" name="facid"><br><br>
                <input type="password" placeholder="Password" name="pass1"><br><br>
                <button class="btn2" onclick="">Login</button>
            </form>
            <div class="footer"></div>
        </div>
    </div>

</body>

</html>