<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<style type="text/css">
	header{
				background-image: url("frontpage/w2.jpg");
			}
			.brand{
				color:green;
				font-family: "Times New Roman", Times, serif;	
			}
	td{
		padding: 7px;
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
		</header><br/>
	
<?php
error_reporting(0);
	$conn = mysqli_connect("localhost", "root", "", "slider");
	$query="SELECT * from banner";
	$result=mysqli_query($conn,$query);
	?>
	<div class="row">
	<div class="col-md-1"></div>
	<div class="text-right col-md-5">
	<h2 class="text-center">Here is your Slides</h2>
		<form method="post">
		<table class="table table-condensed table-hover table-bordered">
			<tr>
				<div>
					<td>id</td>
					<td>name</td>
					<td>image</td>
					<td>action</td>
				</div>	
			</tr>
	<?php
	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	    	echo"<tr>";
	    	echo "<td>".$row['banner_id']."</td>   ";
	        echo "<td>".$row['banner_title']."</td>";
	        echo "<td>".$row['banner_image']."</td>";
	        echo'<td><a href="delslide.php?id='.$row[banner_id].'">DELETE</a></td>';
	        echo"</tr>";
	    }
	} else {
	    echo "0 results";	
}

?>
</table>
</form>
        <form action="admin.php"><button class="btn-lg btn-primary" type="submit">Back To Admin</button></form>
</div>
<div class="text-center col-md-5">
			<h3>Add images to your slider</h3>
			<form action="slideimginsert.php" method="post" enctype="multipart/form-data">
				Banner Id<input type="text" name="idd"/><br/><br/>
				Banner Name<input type="text" name="bname"/><br/>
				<br/>
				<input type="file" name="uploadfile" /><br/></br>
				<input type="submit"  class="btn-lg btn-success" name="submit" value="submit"/>
			</form>
			
	</div>
	<div class="col-md-1"></div>
	</div>
</body>
</html>