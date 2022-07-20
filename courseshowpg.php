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
				 background-color: SlateGrey;
        color: white;
			}
			.brand{
				color:white;
				font-family: "Times New Roman", Times, serif;	
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
		</header><br/>
		<?php
		$database="pg";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password,$database);
	    $i=$_POST['id'];
        $sql = "SELECT *  FROM course WHERE  id like '$i%'";
		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0){
			echo'<div class="container show">
				<div class="row">';
            
			while($row=mysqli_fetch_assoc($result)) {
					 echo'<div class="text-bottom text-center">
							<div class="col-md-4">
						<div class="jumbotron">
							<div class="table-responive">
								<table class="table table-bordered">
									<tbody  style="background-color:#f1f1f1;align:center">
										<tr>
											<td style="background-color:align:center">	
												<form action="sem2sowpg.php" method="post">
                                                <button type="submit" class="btn btn-success hvr-bounce-in">'.$row['subjectname'].'</button><br/><br/>
												<label style="color:black;">Core '.$row['core'].'</label>
                                                <input type="hidden" name="id" value="'.$row['semester'].$row['core'].'"/>
											     </form>
                                            </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>';		
			}
			echo'</div>';
			echo'</div>';
		}
		?>
	</body>
</html>