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
		<script>
				var vd,pd;
				function show(vpath,pdpath){
					vd=vpath;
					pd=pdpath;
					var selectedobj=document.getElementById('topic');
					document.getElementById("pointr").style.display = "none";
					  if(selectedobj.className=='hide'){  //check if classname is hide 
						selectedobj.style.display = "block";
						selectedobj.readOnly=true;
						selectedobj.className ='show';
					  }else{
						selectedobj.style.display = "none";
						selectedobj.className ='hide';
					 }
					
				}
				function openCity(evt, cityName) {
				  var i, tabcontent, tablinks;
				  tabcontent = document.getElementsByClassName("tabcontent");
				  for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				  }
				  tablinks = document.getElementsByClassName("tablinks");
				  for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
				  }
				  document.getElementById(cityName).style.display = "block";
				  evt.currentTarget.className += " active";
							var video = document.getElementById('myVideo');
							var sources = video.getElementsByTagName('source');
							sources[0].src = vd;
							video.load();
							var pdf = document.getElementById('myPdf');
							pdf.src = pd;
                            
					}
				/* When the user clicks on the button, 
				toggle between hiding and showing the dropdown content */
				function myFunction() {
				  document.getElementById("myDropdown").classList.toggle("show");
				}

				// Close the dropdown if the user clicks outside of it
				window.onclick = function(event) {
				  if (!event.target.matches('.dropbtn')) {
					var dropdowns = document.getElementsByClassName("dropdown-content");
					var i;
					for (i = 0; i < dropdowns.length; i++) {
					  var openDropdown = dropdowns[i];
					  if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					  }
					}
				  }
				}
		</script>

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
			.leftt{
				background-color:mediumseagreen;
			}
			/* Style the tab */
			.tab {
			  overflow: hidden;
			  border: 1px solid #ccc;
			  background-color: #f1f1f1;
			}

			/* Style the buttons inside the tab */
			.tab button {
			  background-color: inherit;
			  float: left;
			  border: none;
			  outline: none;
			  cursor: pointer;
			  padding: 14px 16px;
			  transition: 0.3s;
			  font-size: 17px;
			}

			/* Change background color of buttons on hover */
			.tab button:hover {
			  background-color: yellow;
			}

			/* Create an active/current tablink class */
			.tab button.active {
			  background-color: blue;
			}

			/* Style the tab content */
			.tabcontent {
			  display: none;
			  padding: 6px 12px;
			  border: 1px solid #ccc;
			  border-top: none;
			}
			.split {
			
			height: 100%;
			width: 50%;
			position: fixed;
			z-index: 1;
			top: 0;
			overflow-x: hidden;
			padding-top: 20px;
		}

		.left {
			left: 0;
			width: 20%;
			height: 50%;
			background-color: gray;
			margin-left:20px;
			margin-top:240px;
			padding-left:20px;
		}

		.right {
			right: 0;
			width: 75%;
			height: 95%;
			background-color: green;
			margin-right:20px;
			margin-top:240px;
            background-color: aqua;
		}

		.centered {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
		}

		.centered img {
			width: 150px;
			border-radius: 50%;
		}
		#topic{
			display:none;
		}
		#demo{
			text-align:center;
		}
		#myBtn{
			 list-style:none;
			padding-top:0px;
			text-align:center;
			letter-spacing: 1.5px;
			font-size: 1.5em;
			font-weight: 500;
			font-family:"Times New Roman", Times, serif;
		}
		/*  sidenav */
			.sidenav {
			  height: 0%;
			  width: relative;
			  position: relative;
			  z-index: 1;
			  top: 0;
			  left: 0;
			  background-color: #111;
			  overflow-x: hidden;
			  padding-top: 20px;
			}

			/* Style the sidenav links and the dropdown button */
			.sidenav a, .dropdown-btn {
			  padding: 6px 8px 6px 16px;
			  text-decoration: none;
			  font-size: 20px;
			  color: #818181;
			  display: block;
			  border: none;
			  background: none;
			  width: 100%;
			  text-align: left;
			  cursor: pointer;
			  outline: none;
			}

			/* On mouse-over */
			.sidenav a:hover, .dropdown-btn:hover {
			  color: #f1f1f1;
			}

			/* Main content */
			.main {
			  margin-left: 200px; /* Same as the width of the sidenav */
			  font-size: 20px; /* Increased text to enable scrolling */
			  padding: 0px 10px;
			}

			/* Add an active class to the active dropdown button */
			.active {
			  background-color: green;
			  color: white;
			}

			/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
			.dropdown-container {
			  display: none;
			  background-color: #262626;
			  padding-left: 8px;
			}

			/* Optional: Style the caret down icon */
			.fa-caret-down {
			  float: right;
			  padding-right: 8px;
			}

			/* Some media queries for responsiveness */
			@media screen and (max-height: 450px) {
			  .sidenav {padding-top: 15px;}
			  .sidenav a {font-size: 18px;}
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
		<!--div class="scrn">
			<div class="split left"-->		
		<div class="row">
		
		<div class="col-md-3">
			<script>
					document.getElementById("myBtn").addEventListener("click", display);
					
					function display() {
					  document.getElementById("demo").innerHTML ="Introduction";
					}
				</script>	
				<div class="sidenav">
					   <?php
						include'connection1.php';
						$i=$_POST['id'];
					$sql = "SELECT *  FROM course WHERE  id=$i ";
					$result = mysqli_query($conn,$sql);
					if (mysqli_num_rows($result)>0){
					if ($row=mysqli_fetch_assoc($result)) {
						echo'<a href="#">'.$row['subjectname'].'</a>';
					}
					}
					$sql = "SELECT *  FROM info WHERE  id=$i ";
					$result = mysqli_query($conn,$sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
						echo'<button class="dropdown-btn">'.$row['lecturename'].' <i class="fa fa-caret-down"></i></button>';
						$lname=$row['lecturename'];
							$sqll = "SELECT *  FROM content WHERE  id like '%$lname'";
							$resultt = mysqli_query($conn,$sqll);
							if (mysqli_num_rows($resultt) > 0) {
							  echo'<div class="dropdown-container">';
							  while($row = mysqli_fetch_assoc($resultt)) {
								echo'<a href="#" id="myBtn" onclick="show(\'' . $row['videopath'] . '\',\'' . $row['pdfpath'] . '\');">'.$row['topic'].'</a>';
							  }
							  echo'</div>';
							}
						}
					}
					?>
				</div>
		</div>
				<script>
					/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
					var dropdown = document.getElementsByClassName("dropdown-btn");
					var i;

					for (i = 0; i < dropdown.length; i++) {
					  dropdown[i].addEventListener("click", function() {
					  this.classList.toggle("active");
					  var dropdownContent = this.nextElementSibling;
					  if (dropdownContent.style.display === "block") {
					  dropdownContent.style.display = "none";
					  } else {
					  dropdownContent.style.display = "block";
					  }
					  });
					}
				</script>

			<!--/div>
			<div class="split right"-->
			<div class="col-md-8">
			  <div class="centered">
				<?php
						include'connection1.php';
						$i=$_POST['id'];
						
						$sql = "SELECT *  FROM info WHERE  id =$i ";
					$result = mysqli_query($conn,$sql);
					if (mysqli_num_rows($result)>0){
					if ($row=mysqli_fetch_assoc($result)) {
					echo'<h1><p id="pointr">Semester'.$row['sem'].' </p></h1>';
					}
					}
				?>
			  </div>
			  
				<h2 id="demo"></h2>
				<div id="topic" class="hide">
					<div class="tab">
					  <button class="tablinks" data-toggle="collapse" data-target="#img" onclick="openCity(event, 'Viedo')">Video</button>
					  <button class="tablinks" onclick="openCity(event, 'Pdf')">Pdf</button>
					</div>
					<div id="Viedo" class="tabcontent">
					  <video id="myVideo" width="720" height="500" controls>
						  <source src="" type="video/mp4">
					</video>
					  <br/>
					</div>
					<div id="Pdf" class="tabcontent">
					  <embed id="myPdf" src="" width="720px" height="500px"/>
						
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div><br/><br/><br/>
			<!--/div>
		</div-->
	</body>
</html>