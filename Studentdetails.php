<html>
<head>
	<title>
		
	</title>
</head>
<style>
	@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');

$base-spacing-unit: 24px;
$half-spacing-unit: $base-spacing-unit / 2;

$color-alpha: #1772FF;
$color-form-highlight: #EEEEEE;

*, *:before, *:after {
	box-sizing:border-box;
}

body {
	/* padding:$base-spacing-unit; */
	font-family:'Source Sans Pro', sans-serif;
	margin:0;
}

h1,h2,h3,h4,h5,h6 {
	margin:0;
}

.container {
	max-width: 1000px;
	margin-right:auto;
	margin-left:auto;
	display:fixed;
	justify-content:center;
	align-items:center;
	min-height:100vh;
	margin-top:70px;
	padding-top: 0px;
}

.table {
	width:100%;
	border:1px solid $color-form-highlight;
	margin-top:0px;
	padding-top:0px
}

.table-header {
	display:flex;
	width:100%;
	background:black;
	padding:($half-spacing-unit * 1.5) 0;
}

.table-row {
	display:flex;
	width:100%;
	padding:($half-spacing-unit * 1.5) 0;
		background:#EEEEEE;
	border-top: 5px solid white;
	&:nth-of-type(odd) {
		background:#EEEEEE;
	}
}

.table-data, .header__item {
	flex: 1 1 20%;
	text-align:center;
}

.header__item {
	text-transform:uppercase;
}

.filter__link {
	color:white;
	text-decoration: none;
	position:relative;
	display:inline-block;
	padding-left:$base-spacing-unit;
	padding-right:$base-spacing-unit;
	
	&::after {
		content:'';
		position:absolute;
		right:-($half-spacing-unit * 1.5);
		color:white;
		font-size:$half-spacing-unit;
		top: 50%;
		transform: translateY(-50%);
	}
	
	&.desc::after {
		content: '(desc)';
	}

	&.asc::after {
		content: '(asc)';
    }
    
	
}
.button{
	background-color: rgb(0, 153, 255);
	border:1px solid rgb(82, 79, 79);
	color:white;
	text-decoration: none;
	border-radius: 2px;
	padding-left: 4px;
	padding-right: 4px;
}
</style>

<body>
	<div class="container">
	<table class="table">
	<tr class="table-header">
		<th class="filter__link header__item"> Name </th>
		<th class="filter__link filter__link--number header__item"> Register No </th>
		<th class="filter__link filter__link--number header__item"> Branch </th>
		<th class="filter__link filter__link--number header__item"> Semester </th>
        <th class="filter__link filter__link--number header__item"> Activity Point </th>
        <th class="filter__link filter__link--number header__item"> Leave Record </th>
        <th class="filter__link filter__link--number header__item"> Medical </th>
        
	</tr> <br>
	<div class="table-content">
		<?php
		include('database.php');
		$facultyId = $_SESSION["faculty_login"];
		
			$query="SELECT * FROM students where Faculty_id='$facultyId'";
			$result=mysqli_query($conn,$query);
			if(isset($result))
				{   

			      while($row = mysqli_fetch_array($result))
			      {
					?>
					<tr class="table-row">
			        <td class="table-data"> <?php echo $row['Name']?> </td>
					<td class="table-data"> <?php echo $row['Reg_no'] ?> </td>
					<td class="table-data"> <?php echo $row['Branch'] ?> </td>
					<td class="table-data"> <?php echo $row['Semester'] ?> </td>
                    <td class="table-data"> <a class='button' href='acpview.php?value=<?php echo $row['Reg_no'] ?>'>View </a> </td>
                    <td class="table-data"> <a class='button' href='faculty_leave.php?value=<?php echo $row['Reg_no'] ?>''>Show</a> </td>
                    <td class="table-data"> <a class='button' href='#'>Show</a> </td>
					</tr>
					<?php
					
					}	
				}
				
				
        ?>
	</div>
		</table>
	</div>
</body>

</html>