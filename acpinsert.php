<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <form  method="POST">
      <table border="3"width="30%" height="50%" cellspacing="0">
       <tr> 
	    <td>Event<td><input type="text" name="Event"></td></tr>
	    <tr><td>
	     ParticipatedORWinner<td><input type="text" name="ParticipatedORWinner"></td><tr>
        <tr><td>
	    SubmissionDate<td><input type="date"name="SubmissionDate"></td><tr>
	    <tr><td>
	    GradeORActivitypoint<td>
	    	<input type="Grade" name="GradeORActivitypoint"></td><tr>
	    <tr><td>	
	 	<input type="submit" name="submit">
	 </form>
	 <?php
	 $Reg_no = $_SESSION["login"];
	 extract($_POST);
	 if(isset($submit))
	 {
		$Event=$_POST['Event'];
		$ParticipatedORWinner=$_POST['ParticipatedORWinner'];
		$SubmissionDate=$_POST['SubmissionDate'];
		$GradeORActivitypoint=$_POST['GradeORActivitypoint'];

	  	$result=mysqli_query($conn,"INSERT into activitypoint (Eventname,ParticipationORWinner,SubmissionDate,Grade,RegNo)values('$Event','$ParticipatedORWinner','$SubmissionDate','$GradeORActivitypoint','$Reg_no')");
	 }
	  if(isset($result))
	  {
	  	echo "Success";
	  }

    ?>
</body>
</html>