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
		session_start();
		/*$degree=$_POST['degree'];
		$_SESSION['degree']=$degree;
		$core=$_POST['core'];
		$_SESSION['core']=$core;
	    $semester=$_POST['semester'];
	    $_SESSION['semester']=$semester;
	    */
	    $degree=$_SESSION['degree'];
	    $core=$_SESSION['core'];
	    $semester=$_SESSION['semester'];
		$i=$semester.$core;
		if($degree=='ug')
			include 'connectionug.php';
		else if($degree=='pg')
			include  'connectionpg.php';
		else if($degree=='mca')
			include 'connectionmca.php';

        echo'<h2 class="text-center">'.$sn.'</h2>';
	    $sql = "SELECT *  FROM content WHERE  id like '$i%' ";
		$result = mysqli_query($conn,$sql);
	    if (mysqli_num_rows($result) > 0) {
		echo'<table class="table table-condensed table-hover table-bordered">';
		echo'<thead>';
		echo'<tr>';
		echo'<th>lecturename</th>';
		echo'<th>topicname</th>';
		echo'<th>video</th>';
		echo'<th>pdf</th>';
		echo'<th>action</th>';
		echo'<th>action</th>';
		echo'</tr>';
		echo'</thead>';
	    while($row = mysqli_fetch_assoc($result)) {
			echo'<tbody>';
	    	echo'<tr>';
	    	echo '<td>'.$row['lecturename'].'</td>';
	    	echo '<td>'.$row['topic'].'</td>';
	        echo '<td><a href="http:/project/'.$row['videopath'].'">'.$row['videopath'].'</a></td>';
	        echo '<br>';
	        echo '<td><a href="http:/project/'.$row['pdfpath'].'">'.$row['pdfpath'].'</a></td>';
	        
	         echo'<td><a style="color:red;" href="admin_delete_show.php?degree='.$degree.'&tn='.$row[topic].'&vp='.$row[videopath].
	        '&pp='.$row[pdfpath].'&pk='.$row[pk].'">DELETE</a></td>';
	        echo'<td><a style="color:brown;" href="admin_update_show.php?tn='.$row[topic].'&vp='.$row[videopath].
	        '&pp='.$row[pdfpath].'&pk='.$row[pk].'">UPDATE</a></td>';
	        echo"</tr>";
	    }
		echo'</tbody>';
	    echo'</table>';
	} else {
	    echo "<h3>No records found</h3>";
	}

?>

<a href="admin.php" role="button" class="btn-lg btn-primary">Go Home</a> 
<a href="adminshow.php" role="button" class="btn-lg btn-primary">Back</a>