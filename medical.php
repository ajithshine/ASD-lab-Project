<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	body{
		background-color: rgb(189, 250, 253);
	}
	.login-page{
		align-items: center;
		justify-content: center;
		margin-left: 240px;
		margin-top: 100px;
	}
	.container{
		width: 630px;
		height: 350px;
		background-color: #FAEBEFFF;
		border-bottom-right-radius: 30px;
	}
	
	.form{
		display: grid;
		grid-template-columns: 50% 50%;
		padding: 0%;
		margin: 0%;
		height: 350px;
	}
	.login{
		background-color: #333D79FF;
	}
	.login-header{
		color: white;
		border-top: 2px solid rgb(255, 226, 153);
		margin-left: 0px;
		text-align: center;
		margin-top: 63px;
		padding-top: 0px;
		font-family:sans-serif;
		font-size: 30px;
		border-bottom: 5px solid rgb(255, 226, 153);
	}
	form{
		margin-top: 78px;
		margin-left: 20px;
	}
	.uplode{
		color:green;
		font-size: 16px;
		margin-left: 15px;
		font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	}
	.uplode input{
		padding-left: 20px;
		border-radius: 15px;
		
	}
	button{
		margin-top: 40px;
		width: 130px;
		padding: 12px;
		border-radius: 10px;
		margin-left: 40px;
		
	}
	button:hover{
		outline: none;
		background-color:#333D79FF;
		color: white;
	}

</style>
<body>
			   <div class="login-page">
				<div class="container">
			      <div class="form">
			        <div class="login">
			          <div class="login-header">
			            <h2>Medical Certificate</h2>
			          </div>
			        </div>
			        <form class="login-form" method="POST" enctype="multipart/form-data">
			          <div class="uplode">
	                     <input type="file" name="files">
						 <div class="format"><br>Upload PDF in the format : Medical-RegNo.pdf</div>
						</div>		 
	                     <button type="submit" name="submit">Submit</button>
	        </form>
		  </div>
		</div>
	    </div>
	
	 <?php
	 $Reg_no = $_SESSION["login"];
	 extract($_POST);
	 if(isset($submit))
	 {
		  $target_path = "medical_files/";  
		  $target_path = $target_path.basename( $_FILES['files']['name']); 

			if(move_uploaded_file($_FILES['files']['tmp_name'], $target_path)) {  

				$final_file = $_FILES['files']['name'];

				$result=mysqli_query($conn,"INSERT into medical (files,Reg_No)values('$final_file','$Reg_no')");
	 
            }
            if(isset($result))
	  		    echo '<script>alert("Uploaded Successfully");</script>';
	  	    else
	  		    echo '<script>alert("Upload Failed");</script>';
		}
	
		
    ?>
</body>
</html>