<!doctype html>
<html>
	<head>
		<title>CMCS ADMIN</title>
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
			<form action="adminshow2.php" method="post" enctype="multipart/form-data">
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
				<!--label><h3>Subject Name</h3></label>
				<input type="text" name="sname"/--><br/><br/><br/>
					
					<div id="TextBoxContainer1"></div><br/><br/><br/>
				<button type="submit" class="btn-success btn-lg  " name="submit"  />Show</button>
			</form>
		</div>	
	</body>
</html>
<?php
error_reporting(0);
	$stn=$_POST['std'];
     if($stn=='pg')
        {   
            include'connectionpg.php';
            $course='PG';
        }    
    else if($stn=='mca')
        {
            include'connectionmca.php';
            $course='MCA';
        }
    else if($stn=='ug')
        {
            include'connectionug.php';
            $course='UG';
        }    		
	    $semester=$_POST['semester'];
	    $sql = "SELECT *  FROM course WHERE  id like '$semester%'  ";
		$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
		echo'<table class="table table-condensed table-hover table-bordered">';
		echo'<thead>';
		echo'<tr>';
		echo'<th>Semester</th>';
		echo'<th>Core</th>';
		echo'<th>Core Name</th>';
		echo'<th>action</th>';
		echo'</tr>';
		echo'</thead>';
	    while($row = mysqli_fetch_assoc($result)) {
			echo'<tbody>';
	    	echo'<tr>';
	    	echo '<td>'.$row['semester'].'</td>';
            echo '<td>'.$row['core'].'</td>';
            echo '<td>'.$row['subjectname'].'</td>';
	         echo'<td><a style="color:blue ;" href="coursedelete.php?tn='.$row[core].'&vp='.$stn.'">DELETE</a></td>';
	        echo"</tr>";
	    }
		echo'</tbody>';
	    echo'</table>';
	} else {
	    echo "<h3>No records found</h3>";
	}
?>
<form action="admin.php">
			<button class="btn-lg btn-primary">Go Home</button>
		</form>
