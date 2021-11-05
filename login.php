<?php
include("database.php");
session_start();
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($conn,"select * from students where Reg_no='$user_id' and Password='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$user_id;
	}
}
if(isset($faculty_submit))
{
    $rs=mysqli_query($conn,"select * from faculty where Faculty_Id='$faculty_id' and Password='$password'");
    if(mysqli_num_rows($rs)<1)
    {
        $login_error="N";
    }
    else
    {
        $_SESSION["faculty_login"]=$faculty_id;
    }
}
if (isset($_SESSION["login"]))
{
    header("location: students/students.php?link=profile.php");
}
if (isset($_SESSION["faculty_login"]))
{
    header("location: faculty/faculty_dashboard.php?link=faculty_profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Management</title>
    <!-- <link rel="stylesheet" href="stu.css"> -->
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        body p {
    text-align: center;
    font-size: 30px;
    border-bottom: 3px solid black;
    margin-bottom: 0px;
    padding-bottom: 30px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .title{
        padding-top: 15px;
        background-color: #20B2AA;
        color:#fff;
    }
    

    body .cont {
        display: -ms-grid;
        display: grid;
        -ms-grid-columns: 50% 50%;
        grid-template-columns: 50% 50%;
    }

    body .cont .student {
        border: 1px solid black;
        border-radius: 10px;
        color: black;
        display: -ms-grid;
        display: grid;
        -ms-grid-rows: 30% 60% 10%;
        grid-template-rows: 30% 60% 10%;
        height: 450px;
        width: 300px;
        margin-top: 50px;
        margin-left: 300px;
    }

    body .cont .student p {
        text-align: center;
        font-size: x-large;
        background-color: #79b8d1;
        padding-top: 45px;
        width: 300px;
        font-family: cursive;
    }

    body .cont .student form {
        width: 300px;
        padding-left: 18px;
        padding-top: 50px;
    }

    body .cont .student form input {
        border: none;
        border-bottom: 2px solid black;
        width: 250px;
        height: 30px;
        outline: none;
    }

    body .cont .student form button {
        height: 35px;
        width: 90px;
        margin-top: 10px;
        border-radius: 15px;
    }

    body .cont .student form button:hover {
        background-color: #79b8d1;
        outline: none;
        font-size: 14px;
    }

    body .cont .student .footer {
        background-color: #79b8d1;
        width: 300px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    body .cont .faculty {
        border: 1px solid black;
        border-radius: 10px;
        color: black;
        display: -ms-grid;
        display: grid;
        -ms-grid-rows: 30% 60% 10%;
        grid-template-rows: 30% 60% 10%;
        height: 450px;
        width: 300px;
        margin-top: 50px;
        margin-left: 75px;
    }

    body .cont .faculty p {
        text-align: center;
        font-size: x-large;
        background-color: #79b8d1;
        padding-top: 45px;
        width: 300px;
        font-family: cursive;
    }

    body .cont .faculty form {
        width: 300px;
        padding-left: 18px;
        padding-top: 50px;
    }

    body .cont .faculty form input {
        border: none;
        border-bottom: 2px solid black;
        width: 250px;
        height: 30px;
        outline: none;
    }

    body .cont .faculty form button {
        height: 35px;
        width: 90px;
        margin-top: 10px;
        border-radius: 15px;
        margin-top: 0%;
    }

    body .cont .faculty form button:hover {
        background-color: #79b8d1;
        font-size: 14px;
        outline: none;
    }

    body .cont .faculty .footer {
        background-color: #79b8d1;
        width: 300px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }


    /*# sourceMappingURL=stu.css.map */
    </style>
</head>

<body>
    <p class="title"><b class="title">Students Database Management System</b></p>
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
            <form method="post">
                <input type="text" placeholder="Faculty Id" name="faculty_id"><br><br>
                <input type="password" placeholder="Password" name="password"><br><br>
                <button class="btn2"  name="faculty_submit">Login</button>
                 <span><?php
               
                if(isset($login_error))
                {
                    echo "<h6>"."Register No or Password Incorrect"."</h6>";
                }
                ?></span>
            </form>
            <div class="footer"></div>
        </div>
    </div>

</body>

</html>