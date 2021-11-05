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
	display:flex;
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
</style>

<body>
	<div class="container">
	<table class="table">
	<tr class="table-header">
		<th class="filter__link header__item"> Event </th>
		<th class="filter__link filter__link--number header__item"> Category </th>
		<th class="filter__link filter__link--number header__item"> Date </th>
		<th class="filter__link filter__link--number header__item"> Grade </th>
		<th class="filter__link filter__link--number header__item"> Files </th>
	</tr> <br>
	<div class="table-content">
		<?php
		include('database.php');
		$Reg_no = $_SESSION["login"];
		
			$query="SELECT * FROM activitypoint where RegNo='$Reg_no'";
			$result=mysqli_query($conn,$query);
			if(isset($result))
				{   

			      while($row = mysqli_fetch_array($result))
			      {
					?>
					 
					<tr class="table-row">
			        <td class="table-data"> <?php echo $row['EventName']?> </td>
					<td class="table-data"> <?php echo $row['Category'] ?> </td>
					<td class="table-data"> <?php echo $row['Dates'] ?> </td>
					<td class="table-data"> <?php echo $row['Grade'] ?> </td>
					<td class="table-data"> <?php echo $row['files'] ?> </td>
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