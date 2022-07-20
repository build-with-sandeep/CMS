<!doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		
		<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">
		  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		  <link href="css/style.css" rel="stylesheet" media="screen">
		  <link href="color/default.css" rel="stylesheet" media="screen">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<meta charset="utf-8">
		<meta property="og:image" content="https://ianlunn.github.io/Hover/hover.jpg" />
		<meta property="og:site_name" content="Hover.css"/>
		<meta property="og:title" content="Hover.css - A collection of CSS3 powered hover effects" />
		
		<link href="css/demo-page.css" rel="stylesheet" media="all">
		<link href="css/hover.css" rel="stylesheet" media="all">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
		<style>
			header{
				 background-color: SlateGrey;
        color: white;
			}
			.brand{
				color:white;
				font-family: "Times New Roman", Times, serif;	
			}
			.btn{
				text-align:center;
			}
			
            .show{
                background: linear-gradient(to bottom, white, #66CDAA);
        color: white;
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
		
		
        <div class="show"><br/>
            <marquee class="schl" direction = "left" width="50%"><h4>POSTGRADUATES</h4></marquee>
			<div class="container">
				<div class="row text-bottom text-center">
					<div class="col-md-6">
						<div class="jumbotron">
							<div class="table-responive">
								<table class="table table-bordered">
									<tbody  style="background-color:#f1f1f1;align:center">
										<tr>
											<td style="background-color:align:center">											
											<form action="courseshowpg.php" method="post">
												<input type="submit"  value="Semester 1" class="btn btn-success hvr-buzz-out"/>
                                                <input type="hidden" name="id" value="1"/>
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
											<form action="courseshowpg.php" method="post">				
                                                <input type="hidden" name="id" value="2"/>
												<input type="submit" value="Semester 2" class="btn btn-success hvr-buzz-out"/>
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
											<form action="courseshowpg.php" method="post">												
												<input type="hidden" name="id" value="3"/>
                                                <input type="submit" value="Semester 3" class="btn btn-success hvr-buzz-out"/>
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
											<form action="courseshowpg.php" method="post">												
												<input type="hidden" name="id" value="4"/>
                                                <input type="submit" value="Semester 4" class="btn btn-success hvr-buzz-out"/>
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
        </div><br/><br/>
				
	</body>
</html>