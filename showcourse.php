<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<script src ="js/bootstrap.min.js"></script>
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
		</header>
</body>
</html>
<?php
error_reporting(0);
	include 'connection1.php';		
		$core=$_POST['core'];
	    $semester=$_POST['semester'];
		$i=$semester.$core;
        $sqll = "SELECT *  FROM course WHERE  core =$core ";
		$resultt = mysqli_query($conn,$sqll);
	if (mysqli_num_rows($resultt) > 0) {
        if($row = mysqli_fetch_assoc($resultt)) {
            $sn=$row['subjectname'];
        }
    }
        echo'<h2 class="text-center">'.$sn.'</h2>';
	    $sql = "SELECT *  FROM course WHERE  id =$semester ";
		$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
		echo'<table class="table table-condensed table-hover table-bordered">';
		echo'<thead>';
		echo'<tr>';
		echo'<th>Semester</th>';
		echo'<th>Core</th>';
		echo'<th>Core Name</th>';
		echo'<th>action</th>';
		echo'<th>action</th>';
		echo'</tr>';
		echo'</thead>';
	    while($row = mysqli_fetch_assoc($result)) {
			echo'<tbody>';
	    	echo'<tr>';
	    	echo '<td>'.$row['semester'].'</td>';
            echo '<td>'.$row['core'].'</td>';
            echo '<td>'.$row['subjectname'].'</td>';
	         echo'<td><a style="color:red;" href="admin_delete_show.php?tn='.$row[topic].'&vp='.$row[videopath].
	        '&pp='.$row[pdfpath].'&id='.$row[id].'">DELETE</a></td>';
	        echo'<td><a style="color:brown;" href="admin_update2.php?tn='.$row[topic].'&vp='.$row[videopath].
	        '&pp='.$row[pdfpath].'&id='.$row[id].'">UPDATE</a></td>';
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