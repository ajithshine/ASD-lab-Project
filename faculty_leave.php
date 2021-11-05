<html>
<head>
	<title>
		
	</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	background-color: rgb(175, 248, 214);
	animation: expand .8s ease forwards;
	transition: all .8s ease;
}

h1,h2,h3,h4,h5,h6 {
	margin:0;
}

.close {
  background: none;
  padding: 5px;
  width : 53px;
  color: black;
  font-weight: 100;
  border: 1px solid black;
  border-radius: 4px;
  line-height: 1;
  font-size: 1.8rem;
  position: -webkit-sticky;
  position: sticky;
  left: 30px;
  top: 30px;
}
.close i{
	width: 40px;
	text-align:center;
}
.close:hover, .close:focus {
  background-color: black;
  border: 1px solid black;
  color: white;
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
@keyframes slideIn {
  0% {
    transform: translateX(500px) scale(.2);
  }
  100% {
    transform: translateX(0px) scale(1);
  }
}

@keyframes slideUp {
  0% {
    transform: translateY(300px);
  }
  100% {
    transform: translateY(0px);
  }
}

@keyframes expand {
  0% {
    transform: translateX(1400px);
  }
  100% {
    transform: translateX(0px);
  }
}


</style>

<body>	
	<a class='close' href="faculty_dashboard.php?link=Studentdetails.php">
	<i class="fa fa-times" aria-hidden="true"></i>
	</a>
    </div>
	<div class="container">
	<table class="table">
	<tr class="table-header">
        <th class="filter__link header__item">From</th>
		<th class="filter__link filter__link--number header__item">To</th>
		<th class="filter__link filter__link--number header__item">No_days</th>
	</tr> <br>
	<div class="table-content">
		<?php
		include('database.php');
		// include('faculty_dashboard.php')
        if(isset($_GET['value']))
        {
          $value=$_GET['value'];
		}

			$query="SELECT * FROM leaverecord where Reg_No='$value'";
			$result=mysqli_query($conn,$query);
			if(isset($result))
				{   

			      while($row = mysqli_fetch_array($result))
			      {
					?>
					 
                    <tr class="table-row">
			        <td class="table-data"> <?php echo $row['fDate']?> </td>
					<td class="table-data"> <?php echo $row['tDate'] ?> </td>
					<td class="table-data"> <?php echo $row['No_days'] ?> </td>
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