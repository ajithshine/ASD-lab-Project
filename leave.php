<?php
include("database.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
	<title>Leave Record</title>
	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		body{
			margin: 0;
			height: 100vh;
			width: 100vw;
			overflow: hidden;
			font-family: "Lato",sans-serif;
			font-weight: 700;
			padding-top: 90px;
			padding-left: 400px;
			padding-right: 80px;
			align-content: center;
			color: #555;
			background-color: #ecf0f3;
		}
		.leave{
			width: 430px;
			height: 500px;
			padding: 60px 55px 35px 35px;
			border-radius: 40px;
			background-color: #ecf0f3;
			box-shadow: 13px 13px 20px #cbced1,-13px -13px 20px #fff;
			align-items: center;
		}
		.title{
			text-align: center;
			font-size: 28px;
			padding-top: 10px;
			letter-spacing: 0.5px;
		}
		.content{
			width: 100%;
			padding: 60px 5px 5px 5px;
			text-align: center;
		}
		.lab{
			margin-right: 10px;
			font-size: 20px;
		}
	
		
		.content input{
		
			outline: none;
			font-size: 18px;
			color: #555;
			padding: 10px 10px 10px 5px;
			margin-bottom: 20px;
			text-align: center;
			
			
			
		}
        .dates{
        	border-radius: 61px;
			border:1px solid #e0e0e0;
		
        }
        .tdates{
        	border-radius: 61px;
			border-color: #e0e0e0;
			border:1px solid #e0e0e0;
			margin-left:  17px;
        }
        .days{
        	border-radius: 61px;
			border:1px solid #e0e0e0;
			
			width: 60%;  
			margin-right: 10px;   
			      
        }
	    
		.submit{
			outline: none;
			border:none;
			cursor: pointer;
			width: 100%;
			height: 60px;
			border-radius: 30px;
			font-size: 20px;
			font-weight: 700;
			color: #fff;
			background-color: 	#20B2AA;
		}
		button:hover{
			background-color: #008080;

		}
	</style>
</head>
<body>
	 <div class="leave">
	 	<div class="title">Record Of Leave</div>
	 	<div class="content">
	 		<form method="POST" enctype="multipart/form-data">
	 			
	 				<label class="lab">From</label>
	 			    <input type="date" name="fDate" class="dates"/><br>
	 		
	 			
	 			
	 		
		 		    <label class="lab">To</label>
		 			<input type="date" name="tDate" class="tdates"/><br>
		 		    
		 		    <label class="lab">Days</label>
		 		    <input type="text" name="No_days" placeholder="Total No Of Days" class="days"><br>
		 		    
		 		    
		 		    <button class="submit" name="submit">Submit</button>
	 	</div>
	 </div>
	 		</form>
	 			
	 <!--<form action="" method="POST" enctype="multipart/form-data" >
      <table border="3"width="30%" height="20%" cellspacing="0">
       <tr> 
	    <td>From Date<td><input type="date" name="fDate"></td></tr>
	    <tr><td>
	     To Date<td><input type="date" name="tDate"></td><tr>
        <tr><td>
	    Total No of Days<td><input type="text"name="No_days"></td><tr>
		<tr><td>
	 	<input type="submit" name="submit">
	 </form>-->
	  <?php
	 $Reg_no = $_SESSION["login"];
	 extract($_POST);
	 if(isset($submit))
	 {
		$fDate=$_POST['fDate'];
		$tDate=$_POST['tDate'];
		$No_days=$_POST['No_days'];
		if ($fDate!=NULL&&$tDate!=NULL&&$No_days!=NULL) {
		$result=mysqli_query($conn,"INSERT into leaverecord (fDate,tDate,No_days,Reg_no)values('$fDate','$tDate','$No_days','$Reg_no')");
	 }
		if(isset($result))
	  		echo '<script>alert("Uploaded Successfully");</script>';
	  	else
			echo '<script>alert("Failed!Enter all the details");</script>';

	 }
    ?>
</body>
</html>