<?php
session_start();
$regNo =  $_SESSION["login"];
include("database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="students.css">
</head>
<body class="preload">
  <div class="ali">
    <!-- <header class="header">
      <button class="header__button" id="btnNav" type="button">
        <i class="material-icons">menu</i>
      </button>
      
    </header> -->
    <nav class="nav">
      <div class="nav__links">
        <a href="?link=profile.php" class="nav__link">
          <i class="material-icons">home</i>
          Home
        </a>
        
        <div class="dropdown">
                        <a class="nav__link">
                            <i class="material-icons">star</i>Activity Points
                            <div class="dropdown-content">
                                <a href="?link=acpinsert.php">Activity Insert</a>
                                <a href="?link=acpview.php">Activity View</a>
                            </div>
                        </a>
                    </div>


                    <style>
                        .dropdown {
                            position: relative;
                            display: inline-block;
                        }
                        /* Dropdown Content (Hidden by Default) */
                        
                        .dropdown-content {
                            display: none;
                            position: absolute;
                            background-color: #f9f9f9;
                            min-width: 100%;
                            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                            z-index: 1;
                        }
                        /* Links inside the dropdown */
                        
                        .dropdown-content a {
                            color: black;
                            padding: 12px 16px;
                            text-decoration: none;
                            display: block;
                        }
                        /* Change color of dropdown links on hover */
                        
                        .dropdown-content a:hover {
                            background-color: #f1f1f1
                        }
                        /* Show the dropdown menu on hover */
                        
                        .dropdown:hover .dropdown-content {
                            display: block;
                        }
                        /* Change the background color of the dropdown button when the dropdown content is shown */
                        
                        .dropdown:hover .dropbtn {
                            background-color: #3e8e41;
                        }
                    </style>
        <a class="nav__link" href="lr.php">
          <i class="material-icons">note</i>
          Leave Records
        </a>
        <a class="nav__link" href="mc.php">
          <i class="material-icons">book</i>
          Medical Certificate
        </a>
        <a class="nav__link" href="logout.php">
          <i class="material-icons"></i>
          Logout
        </a>
      </div>
      <div class="nav__overlay"></div>
    </nav>
    
    <main>
      <div class="header">
        <p class="hpara">Students Database Management System</p>
      </div>
      <?php
        if(isset($_GET['link']))
        {
          $link=$_GET['link'];
        }

        include("$link");
      ?>


    </main>
  </div>  
    <!-- <script>
      window.addEventListener("load", () => {
            document.body.classList.remove("preload");
        });

        document.addEventListener("DOMContentLoaded", () => {
            const nav = document.querySelector(".nav");

            document.querySelector("#btnNav").addEventListener("click", () => {
                nav.classList.add("nav--open");
            });

            document.querySelector(".nav__overlay").addEventListener("click", () => {
                nav.classList.remove("nav--open");
            });
        });
    </script> -->
  </body>
</html>