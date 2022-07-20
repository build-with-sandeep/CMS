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
		</header>
	</body>
</html>
<?php
	error_reporting(0);
	session_start();
		$degree=$_SESSION['degree'];
		$_SESSION['degree']=$degree;
		$core=$_SESSION['core'];
	    $semester=$_SESSION['semester'];
	    $sub=$_SESSION['sub'];
	    if($degree=='ug')
	    	include 'connectionug.php';
	    else if($degree=='pg')
	    	include 'connectionpg.php';
	    else if($degree=='mca')
	    	include 'connectionmca.php';

          /*  $sqll = "SELECT *  FROM info WHERE  core =$core ";
		$resultt = mysqli_query($conn,$sqll);
	if (mysqli_num_rows($resultt) > 0) {
        if($row = mysqli_fetch_assoc($resultt)) {
            $sn=$row['lecture'];
        }
    } */
        echo'<h2 class="text-center">'.$sn.'</h2>';
	    $sql = "SELECT *  FROM content WHERE  core='$core' ";
		$result = mysqli_query($conn,$sql);

	if (mysqli_num_rows($result) > 0) {
		echo'<table class="table table-condensed table-hover table-bordered">';
         echo'<thead>';
            echo'<td>Topic</td>';
            echo'<td>Video</td>';
            echo'<td>PDF</td>';
            echo'<td>Action</td>';
            echo'</thead>';
	    while($row = mysqli_fetch_assoc($result)) {
	    	echo'<tr>';
	    	echo '<td>'.$row['topic'].'</td>';
	        echo '<td><a href="http:/project/'.$row['videopath'].'">'.$row['videopath'].'</a></td>';
	        echo '<br>';
	        echo '<td><a href="http:/project/'.$row['pdfpath'].'">'.$row['pdfpath'].'</a></td>';
	        
	         echo'<td><a style="color:red;" href="admin_update2.php?tn='.$row[topic].'&vp='.$row[videopath].
	        '&pp='.$row[pdfpath].'&pk='.$row[pk].'">UPDATE</a></td>';
	        echo"</tr>";
	    }
	    echo'</table>';
	} else {
	    echo "0 results";
	}




?>
<form action="admin.php">
			<button class="btn-lg btn-primary">Go Home</button>
		</form>