<!doctype html>
<html>
	<head>
		<title>update</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
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
			<form action="admin_update.php" method="post" enctype="multipart/form-data">
				<div class="col-md-4 text-center">
					<label><h3>Standard</h3></label><br/><br/>
					<select name="degree" required="required">
					  <option value="">---SELECT---</option> 
                        <option value="ug">UNDERGRADUATE</option>
			     	  <option value="pg">POSTGRADUATE</option>
					  <option value="mca">MASTERS IN COMPUTER APPLICATION</option>
					</select>					
				</div>
				<div class="col-md-4 text-center">					
					<label><h3>Semester</h3></label><br/><br/>
					<select name="semester" required="required">
						<option value="">---SELECT---</option> 
                        <option value=" 1">SEM 1</option>
						 <option value="2">SEM 2</option>
						<option value="3">SEM 3</option>
						<option value="4">SEM 4</option>
						<option value="5">SEM 5</option>
						<option value="6">SEM 6</option>
					</select>															 																
				</div>
				<div class="col-md-4 text-center">
					<label><h3>Paper</h3></label><br/><br/>
					<select name="core" required="required">
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
                        <option value="101">DSE 1</option>
                        <option value="102">DSE 2</option>
                        <option value="103">DSE 3</option>
                        <option value="104">DSE 4</option>
                        <option value="105">DSE 5</option>
					</select><br/>
				</div>	<br/><br/>
					<div id="TextBoxContainer1"></div><br/>
				<button type="submit" class="btn-success btn-lg  " name="submit"  />sumbit</button>
			</form>
		</div>
		<div class="text-center">
		<form action="admin.php">
			<button class="btn-lg btn-primary">Go Home</button>
		</form>		
		</div>
	</body>
</html>
<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$core=$_POST['core'];
	    $semester=$_POST['semester'];
	    $sub=$_POST['sname'];
	    $degree=$_POST['degree'];
	    $_SESSION['degree']=$degree;
	    $_SESSION['core']=$core;
		$_SESSION['semester']=$semester;
		$_SESSION['sub']=$sub;
		header('location:admin_update1.php');
}

?>