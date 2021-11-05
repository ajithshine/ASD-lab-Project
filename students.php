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
    <link rel="stylesheet" href="students.css">
    
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <i class="fa fa-home" aria-hidden="true"></i>
          Home
        </a>
        
        <button class="dropdown-btn nav__link">
        <i class="fa fa-star" aria-hidden="true"></i>
            Activity Points
            <!-- <i class="fa fa-caret-down"></i> -->
          </button>
          <ul class="dropdown-container">
            <a href="?link=acpinsert.php"><div>Insert</div></a>
            <a href="?link=acpview.php"><div>View</div></a>
            
          </ul>


          <a href="?link=leave.php" class="nav__link">
          <i class="fa fa-book" aria-hidden="true"></i>
          Leave Records
          </a>


          
        <style>
            .dropdown-btn {
              margin: unset;
              height: 48px;
              text-decoration: none;
              display: flex;
              border: none;
              background: none;
             width: 100%;
              text-align: left;
              cursor: pointer;
              outline: none;
            }

            .dropdown-container {
              display: none;
              /* background-color: #5efa59; */
              padding-left: 30px;
              position: relative;
              text-decoration: none;
               margin-top: 0px;
                margin-bottom: 0px;
                padding-top: 0px;
                padding-bottom: 0px;
                /* width: 192px; */
                list-style: none;
            }           

            .dropdown-container a div{
  margin-top: 6px;
  padding: 0px;
            }
            .dropdown-container a div:hover{
  background-color: cornsilk;
            }

            .dropdown-container a div{
    
    color: black;
    padding-left: 20px;
    margin-bottom: 5px;
    /* padding-top: 10px; */
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: 500;
            }

            .dropdown-container a{
              text-decoration: none;
            }

/* Optional: Style the caret down icon */


        </style>

    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
          } else {
          dropdownContent.style.display = "block";
          }
          });
        }
        </script>
      
        <a class="nav__link" href="?link=medical.php">
        <i class="fa fa-sticky-note" aria-hidden="true"></i>
          Medical Certificate
        </a>
        <a class="nav__link" href="logout.php">
        <i class="fa fa-sign-out" aria-hidden="true"></i>
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
    
  </body>
</html>