<!doctype html>
<html>
	<head>
		<title>Content Page</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		
		<meta charset="utf-8">
		<meta property="og:image" content="https://ianlunn.github.io/Hover/hover.jpg" />
		<meta property="og:site_name" content="Hover.css"/>
		<meta property="og:title" content="Hover.css - A collection of CSS3 powered hover effects" />
		
		<link href="css/demo-page.css" rel="stylesheet" media="all">
		<link href="css/hover.css" rel="stylesheet" media="all">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
		<style>
			body{
				margin-left:30px;
				margin-right:30px;
			}
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
		</header><br/>
		<?php
		$database="clgproject";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password,$database);
	    $sql = "SELECT *  FROM info WHERE  id=2 ";
		$result = mysqli_query($conn,$sql);
		?>
		
		<div class="container">
				<div class="row text-bottom text-center">
					<div class="col-md-6">
						<div class="jumbotron">
							<div class="table-responive">
								<table class="table table-bordered">
									<tbody  style="background-color:#f1f1f1;align:center">
										<tr>
											<td style="background-color:align:center">	
											<form action="sem2sow.php" method="post">
												<input type="submit"  value="Advance Java" class="btn btn-success hvr-bounce-in"/>
												<input type="hidden" name="id" value="11"/>
											</form>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="jumbotron">
							<div class="table-responive">
								<table class="table table-bordered">
									<tbody  style="background-color:#f1f1f1;align:center">
										<tr>
											<td style="background-color:align:center">																																		
											<form action="sem2sow.php" method="post">	
												<input type="submit" value="Advance Operating System" class="btn btn-success hvr-bounce-in"/>
												<input type="hidden" name="id" value="12"/>
											</form>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-bottom text-center">
					<div class="col-md-6">
						<div class="jumbotron">
							<div class="table-responive">
								<table class="table table-bordered">
									<tbody  style="background-color:#f1f1f1;align:center">
										<tr>
											<td style="background-color:align:center">	
											<form action="sem2sow.php" method="post">
												<input type="submit"  value="Data Communication & Network" class="btn btn-success hvr-bounce-in"/>
												<input type="hidden" name="id" value="11"/>
											</form>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="jumbotron">
							<div class="table-responive">
								<table class="table table-bordered">
									<tbody  style="background-color:#f1f1f1;align:center">
										<tr>
											<td style="background-color:align:center">																																		
											<form action="sem2sow.php" method="post">	
												<input type="submit" value="Advance Architechture" class="btn btn-success hvr-bounce-in"/>
												<input type="hidden" name="id" value="12"/>
											</form>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="jumbotron">
							<div class="table-responive">
								<table class="table table-bordered">
									<tbody  style="background-color:#f1f1f1;align:center">
										<tr>
											<td style="background-color:align:center">																																		
											<form action="sem2sow.php" method="post">	
												<input type="submit" value="Mobile & Cloud Computing" class="btn btn-success hvr-bounce-in"/>
												<input type="hidden" name="id" value="12"/>
											</form>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
	</body>
</html>