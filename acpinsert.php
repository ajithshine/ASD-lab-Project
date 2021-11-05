<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Roboto:300);
		header .header{
		  background-color: #fff;
		  height: 45px;
		}
		header a img{
		  width: 134px;
		margin-top: 4px;
		}
		.login-header h2{
			text-align: center;
		}
		.login-page {
		  width: 500px;
		  padding: 8% 0 0;
		  margin: auto;
		}
		.login-page .form .login{
		  margin-top: -31px;
		margin-bottom: 26px;
		}
		.form {
		  position: relative;
		  z-index: 1;
		  background: #FFFFFF;
		  max-width: 500px;
		  margin: 0 auto 100px;
		  padding: 50px;
		  text-align: left;
		  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}
		.form input {
		  font-family: "Roboto", sans-serif;
		  outline: 0;
		  background: #f2f2f2;
		  width: 100%;
		  border: 0;
		  margin: 0 0 15px;
		  padding: 15px;
		  box-sizing: border-box;
		  font-size: 14px;
		}
		.form button {
		  font-family: "Roboto", sans-serif;
		  text-transform: uppercase;
		  outline: 0;
		  background-color: #cd5d7d;   
		  /*background-image: linear-gradient(45deg,#328f8a,#08ac4b);*/
		  width: 100%;
		  border: 0;
		  padding: 15px;
		  color: #fff;
		  font-size: 14px;
		  -webkit-transition: all 0.3 ease;
		  transition: all 0.3 ease;
		  cursor: pointer;
		  font-weight: bold;
		}
		.form .message {
		  margin: 15px 0 0;
		  color: #b3b3b3;
		  font-size: 12px;
		}
		.form .message a {  
		  color: #4CAF50;
		  text-decoration: none;
		}
    
		.container {
		  position: relative;
		  z-index: 1;
		  max-width: 300px;
		  margin: 0 auto;
		}
       
		body {
		  background-color:#30475e ;
		  /*background-image: linear-gradient(45deg,#ff4646,#ff8585);*/
		  font-family: "Roboto", sans-serif;
		  -webkit-font-smoothing: antialiased;
		  -moz-osx-font-smoothing: grayscale;

		}
		p{
			text-align: left;
		}
		input[type="radio"]{
			display: none;	
		}
		label{
			position: relative;
			cursor: pointer;
			font-weight: bold;
			padding-right: 32px;
			text-align: left;


		}
		label:nth-last-child(1){
			padding-right: 0;
		}
		label::before{
			content: "";
			border:2px solid #222;
			display: inline-block;
			width: 20px;
			height: 20px;
			margin: -8px 20px;
			margin-left: 0;
			border-radius: 50%;
		}
		label::after{
			content: "";
			display: inline-block;
			position: absolute;
			width: 14px;
			height: 14px;
			background: rgba(34,34,34,0);
			left: 5px;
			top: 11px;
			margin: -8px 20px;
			margin-left: 0;
			border-radius: 50%;

			transition: all 0.4s;
		}
		input[type="radio"]:checked + label::after {
			background: rgba(34,34,34,1);
		}
		.input_radio{
			margin-bottom: 20px;
		}
		.format{
			margin-bottom: 20px;
			font-family:sans-serif; 
			font-weight: bold;
			color: #f05454;
		}
		button:hover{
			background-color: #000;
		}
	</style>
		
		
<body>
			   <div class="login-page">
			      <div class="form">
			        <div class="login">
			          <div class="login-header">
			            <h2>Student Activity</h2>
			          </div>
			        </div>
			        <form class="login-form" method="POST" enctype="multipart/form-data">
			          <input type="text" placeholder="Event Name" name="Event" />
			          
			          <div class="input_radio">

			          	 <input type="radio" name="ParticipatedORWinner" value="Paricipated" id="participated"/>
			             <label for="participated">Paricipated</label>
			             <input type="radio" name="ParticipatedORWinner" value="Winner" id="winner"/>
			             <label for="winner">Winner</label>

	                  </div>

	                     <input type="date" name="SubmissionDate" />
	                     <input type="file" name="files">
	                     <div class="format">Upload PDF in the format : Event-Year-RegNo.pdf</div>
	                     <button type="submit" name="submit">Submit</button>

	        <!--  <p class="message">Not registered? <a href="#">Create an account</a></p>-->
	        </form>
	      </div>
	    </div>
	
	 <?php
	 $Reg_no = $_SESSION["login"];
	 extract($_POST);
	 if(isset($submit))
	 {
	 	
		$Event=$_POST['Event'];
		$ParticipatedORWinner=$_POST['ParticipatedORWinner'];
		$SubmissionDate=$_POST['SubmissionDate'];
		if ($Event!=NULL&&$ParticipatedORWinner!=NULL&&$SubmissionDate!=NULL) {
		  $target_path = "activitypoint_files/";  
		  $target_path = $target_path.basename( $_FILES['files']['name']); 

			if(move_uploaded_file($_FILES['files']['tmp_name'], $target_path)) {  

				$final_file = $_FILES['files']['name'];

				$result=mysqli_query($conn,"INSERT into activitypoint (EventName,Category,Dates,RegNo,files,Grade)values('$Event','$ParticipatedORWinner','$SubmissionDate','$Reg_no','$final_file','0')");
	 
			} # code...
		}
		//$Grade=$_POST['grade'];
		if(isset($result))
	  		echo '<script>alert("Uploaded Successfully");</script>';
	  	else
	  		echo '<script>alert("Failed!Enter all the details");</script>';
	 }
    ?>
</body>
</html>