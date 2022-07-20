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
		</header><br/>
			<div class="container">
				<div class="row text-bottom text-center">
					<div class="col-md-6">
						<div class="jumbotron">
							<div class="table-responive">
								<table class="table table-bordered">
									<tbody  style="background-color:#f1f1f1;align:center">
										<tr>
											<td style="background-color:align:center">											
											<form action="adminshow2.php">
												<input type="submit"  value="SHOW COURSE" class="btn btn-success"/>
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
											<form action="adminshow.php">		 										
												<input type="submit" value="SHOW TUTORIALS" class="btn btn-success"/>
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
