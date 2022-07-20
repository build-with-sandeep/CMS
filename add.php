<!doctype html>
<html>
	<head>
		<title>ADD</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<script>
			function show(){
				alert("Data Inserted Successfully");
			}
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
			<form action="add.php" method="post" enctype="multipart/form-data">
				<div class="col-md-4 text-center">
					<label><h3>Standard</h3></label><br/><br/>
					<select name="std" required>
						<option value="">---SELECT---</option>
					  <option value="ug">UNDERGRADUATE</option>
			     	  <option value="pg">POSTGRADUATE</option>
					  <option value="mca">MASTERS IN COMPUTER APPLICATION</option>
					</select>					
				</div>
				<div class="col-md-4 text-center">					
					<label><h3>Semester</h3></label><br/><br/>
					<select name="semester" required>
						<option value="">---SELECT---</option>
						<option value="1">SEM 1</option>
						 <option value="2">SEM 2</option>
						<option value="3">SEM 3</option>
						<option value="4">SEM 4</option>
						<option value="5">SEM 5</option>
						<option value="6">SEM 6</option>
					</select>															 																
				</div>
				<div class="col-md-4 text-center">
					<label><h3>Paper</h3></label><br/><br/>
					<select name="core" required>
						 <option value="">---SELECT---</option>
						 <option value="1">CORE 1</option>
						 <option value="2">CORE 2</option>
						 <option value="3">CORE 3</option>
						 <option value="4">CORE 4</option>
						 <option value="5">CORE 5</option>
						 <option value="6">CORE 6</option>
						 <option value="7">CORE 7</option>
						 <option value="8">CORE 8</option>
						 <option value="9">CORE 9</option>
						 <option value="10">CORE 10</option>
						 <option value="11">CORE 11</option>
						 <option value="12">CORE 12</option>
						 <option value="13">CORE 13</option>
						 <option value="14">CORE 14</option>
						 <option value="101"> DSE 1</option>
						 <option value="102"> DSE 2</option>
						 <option value="103"> DSE 3</option>
						 <option value="104"> DSE 4</option>
						 <option value="105"> DSE 5</option>
					</select>
				</div>
				<label><h3>Lecture Name</h3></label>
				<input type="text" name="lecname" required/><br/>
					<label><h3>Enter Total Number of lectures</h3></label> <input type="number" name="lectures" id="total" required/><br/>
					<div id="TextBoxContainer1"></div><br/>
				<button type="submit" class="btn-success btn-lg" name="submit"  />create</button>
			</form>
		</div>
	</body>
</html>

<?php
session_start();
if(isset($_POST['submit']))
	{   		
		$stn=$_POST['std'];
	    $semester=$_POST['semester'];
    
        $core=$_POST['core'];
	    $semester=$_POST['semester'];
	   
		$lname=$_POST['lecname'];
		$lectures=$_POST['lectures'];

		$_SESSION['std']=$stn;	
    	$_SESSION['core']=$core;
		$_SESSION['semester']=$semester;
		
		$_SESSION['lectures']=$lectures;
		$_SESSION['lecname']=$lname;

		
		echo'<form action="insert.php" method="post" enctype="multipart/form-data" >';
		echo'<table>';
		echo'<tr>';
		echo'<td>TOPIC</td>';
		echo'<td>VIDEO</td>';
		echo'<td>PDF</td>';
		echo'</tr>';
		for($i=0;$i<$lectures;$i++)
		{   echo'<tr>';
			echo'<td><input type="text" name="topic'.$i.'" placeholder="topic'.$i.'" required/></td>' ;
			echo'<td><input type="file"name="video[]" multiple="multiple" required/></td>' ;
			echo'<td><input type="file"name="pdf[]" multiple="multiple" required/></td>' ;
			echo'</tr>';
		}
		echo'</table>';
		echo'<div class="text-center"><button type="submit" name="insert" class="btn-lg btn-success">Insert</button></div>';	
		echo'</form>';
	}
?>
			<form action="admin.php">
			<div class="text-center"><button class="btn-lg btn-primary">Go Home</button></div>
		</form>