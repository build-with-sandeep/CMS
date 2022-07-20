<!doctype html>
<html>
	<head>
		<title>ADD</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
				<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>

				<script>
$(document).ready(function () {
  $("#type").change(function () {
     switch($(this).val()) {
        case 'ug':
            $("#size").html("<option value='1'>SEM 1</option><option value='2'>SEM 2</option><option value='3'>SEM 3</option><option value='4'>SEM 4</option><option value='5'>SEM 5</option><option value='6'>SEM 6</option>");
            break;
        case 'pg':
            $("#size").html("<option value='1'>SEM 1</option><option value='2'>SEM 2</option> <option value='3'>SEM 3</option><option value='4'>SEM 4</option>");
            break;
        case 'mca':
            $("#size").html("<option value='1'>SEM 1</option><option value='2'>SEM 2</option><option value='3'>SEM 3</option><option value='4'>SEM 4</option><option value='5'>SEM 5</option><option value='6'>SEM 6</option>");
            break;
        default:
            $("#size").html("<option value=''>--Select Semester--</option>");
     }
	var std=document.getElementById('type').value;
	if(std=='ug'){
$(document).ready(function () {		 
$("#size").change(function () {
			 switch($(this).val()) {
        case '1':
            $("#paper").html("<option value='1'>CORE 1</option><option value='2'>CORE 2</option>");
            break;
        case '2':
            $("#paper").html("<option value='3'>CORE 3</option><option value='4'>CORE 4</option>");
            break;
        case '3':
            $("#paper").html("<option value='5'>CORE 5</option><option value='6'>CORE 6</option><option value='7'>CORE 7</option>");
            break;
	case '4':
            $("#paper").html("<option value='8'>CORE 8</option><option value='9'>CORE 9</option><option value='10'>CORE 10</option><option value='101'>SEC 1</option>");
            break;
	 case '5':
            $("#paper").html("<option value='11'>CORE 11</option><option value='12'>CORE 12</option><option value='102'>DSE 1</option><option value='103'>DSE 2</option>");
            break;
	 case '6':
            $("#paper").html("<option value='13'>CORE 13</option><option value='14'>CORE 14</option><option value='104'>DSE 3</option><option value='105'>DSE 4</option>");
            break;
        default:
            $("#paper").html("<option value=''>--Select Paper--</option>");
     }
		});
});	
	}

	else if(std=='pg'){
$(document).ready(function () {		 
$("#size").change(function () {
			 switch($(this).val()) {
        case '1':
            $("#paper").html("<option value='1'>CORE 1</option><option value='2'>CORE 2</option>");
            break;
        case '2':
            $("#paper").html("<option value='3'>PG 3</option><option value='4'>CORE 4</option>");
            break;
        case '3':
            $("#paper").html("<option value='5'>CORE 5</option><option value='6'>CORE 6</option><option value='7'>CORE 7</option>");
            break;
	case '4':
            $("#paper").html("<option value='8'>CORE 8</option><option value='9'>CORE 9</option><option value='10'>CORE 10</option><option value='101'>SEC 1</option>");
            break;
        default:
            $("#paper").html("<option value=''>--Select Paper--</option>");
     }
		});
});	
	}

	else{
$(document).ready(function () {		 
$("#size").change(function () {
			 switch($(this).val()) {
        case '1':
            $("#paper").html("<option value='1'>CORE 1</option><option value='2'>CORE 2</option>");
            break;
        case '2':
            $("#paper").html("<option value='3'>CORE 3</option><option value='4'>CORE 4</option>");
            break;
        case '3':
            $("#paper").html("<option value='5'>MCA 5</option><option value='6'>CORE 6</option><option value='7'>CORE 7</option>");
            break;
	case '4':
            $("#paper").html("<option value='8'>CORE 8</option><option value='9'>CORE 9</option><option value='10'>CORE 10</option><option value='101'>SEC 1</option>");
            break;
	 case '5':
            $("#paper").html("<option value='11'>CORE 11</option><option value='12'>CORE 12</option><option value='102'>DSE 1</option><option value='103'>DSE 2</option>");
            break;
	 case '6':
            $("#paper").html("<option value='13'>CORE 13</option><option value='14'>CORE 14</option><option value='104'>DSE 3</option><option value='105'>DSE 4</option>");
            break;
        default:
            $("#paper").html("<option value=''>--Select Paper--</option>");
     }
		});
});	
	}
  });
	
});
	

</script>	
		<style>
			header{
				background-image: url("frontpage/w2.jpg");
			}
			.brand{
				color:green;
				font-family: "Times New Roman", Times, serif;	
			}
		</style>
	</head>
	<body>
				<header>
			<br/>
			<div class="row">
				<div class="col-md-2 text-right">
					<a href="index.php"><img src="logo.jpg"/></a>
				</div>
				<div class="col-md-10">
					<h1 class="brand" >SCHOOL OF COMPUTER SCIENCE</h1>
				</div>
			</div>
			<br/>
		</header><br/><br/>
		<div class="row text-center">
			<form action="insertcourse.php" method="post" enctype="multipart/form-data">
				<div class="col-md-4 text-center">
					<label><h3>Standard</h3></label><br/><br/>
<select id="type">
    <option value="item0">--Select Standard--</option>
    <option value="ug">UNDERGRADUATE</option>
    <option value="pg">POSTGRADUATE</option>
    <option value="mca">MASTER IN COMPUTER APPLICATION</option>
</select>

					
				</div>
				<div class="col-md-4 text-center">					
					<label><h3>Semester</h3></label><br/><br/>
					<select id="size">
    <option value="">-- Select Semester -- </option>
</select>															 																
				</div>
				<div class="col-md-4 text-center">
					<label><h3>Paper</h3></label><br/><br/>
					<select id="paper">
    <option value="">-- Select Paper -- </option>
</select>				
				</div>
				<label><h3>Core Name</h3></label>
				<input type="text" name="sname"/><br/>
					<div id="TextBoxContainer1"></div><br/>
				<button type="submit" class="btn-success btn-lg" name="submit"/>Submit</button>
			</form>
		</div>
	
			<form action="admin.php">
			<div class="text-center"><button class="btn-lg btn-primary">Go Home</button></div>
		</form>
		</body>
</html>