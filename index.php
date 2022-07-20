<?php
//index.php
		$connect = mysqli_connect("localhost", "root", "", "slider");
		function make_query($connect)
		{
		 $query = "SELECT * FROM banner ORDER BY banner_id ASC";
		 $result = mysqli_query($connect, $query);
		 return $result;
		}

		function make_slide_indicators($connect)
		{
		 $output = ''; 
		 $count = 0;
		 $result = make_query($connect);
		 while($row = mysqli_fetch_array($result))
		 {
		  if($count == 0)
		  {
		   $output .= '
		   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
		   ';
		  }
		  else
		  {
		   $output .= '
		   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
		   ';
		  }
		  $count = $count + 1;
		 }
		 return $output;
		}

		function make_slides($connect)
		{
		 $output = '';
		 $count = 0;
		 $result = make_query($connect);
		 while($row = mysqli_fetch_array($result))
		 {
		  if($count == 0)
		  {
		   $output .= '<div class="item active">';
		  }
		  else
		  {
		   $output .= '<div class="item">';
		  }
		  $output .= '
		   <img src="'.$row["banner_image"].'" alt="'.$row["banner_title"].'"/>
		   <div class="carousel-caption">
			<h3>'.$row["banner_title"].'</h3>
		   </div>
		  </div>
		  ';
		  $count = $count + 1;
		 }
		 return $output;
		}
?>
<!doctype html>
<html>
	<head>
		<title>CMCS</title>
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
		<meta property="og:image" content="https://ianlunn.github.io/Hover/hover.jpg" />
		<meta property="og:site_name" content="Hover.css"/>
		<meta property="og:title" content="Hover.css - A collection of CSS3 powered hover effects" />
		
		<link href="css/demo-page.css" rel="stylesheet" media="all">
		<link href="css/hover.css" rel="stylesheet" media="all">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            .bgimg{
                background-image: url("w2.jpg");
            }
            .carousel .item {
                height: 300px;
            }
			header{
				background-image: url("frontpage/w2.jpg");
			}
			.brand{
				color:green;
				font-family: "Times New Roman", Times, serif;	
			}
			.msg{
				text-align:left;
				letter-spacing: 1.5px;
				font-size: 1.2em;
				font-weight: 800;
				font-style:italic;
				font-family:"Times New Roman", Times, serif;
				color:mediumseagreen;
			}
			/.carousel-inndfjher{
				min-width:400px;
				height:         400px;
				min-height:     400px;
				line-height:    400px;
			}
			.dropbtn {
				  color: white;
				  text-align:center;
				  border: none;
                 display: block;
              color: white;
              text-align: center;
              padding: 6px 8px;
              text-decoration: none;
                
				}
				.dropdown {
					text-align: center;
				  position: relative;
				  display: inline-block;
				}

				.dropdown-content {
				  margin-right:40px;
				  margin-left:150px;
				  display: none;
				  position: absolute;
				  background-color:gray;
				  font-family:"Times New Roman", Times, serif;
				  min-width: 150px;
				  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				  z-index: 1;
				}

				.dropdown-content a {
				  color: black;
				  padding: 12px 16px;
				  font-size:1.4em;
				  text-decoration: none;
				  display: block;
				}

				.dropdown-content a:hover {background-color: #ddd;}

				.dropdown:hover .dropdown-content {display: block;}
				
				#topp {
				  display: none;
				  position: fixed;
				  bottom: 20px;
				  right: 30px;
				  z-index: 99;
				  font-size: 18px;
				  border: none;
				  outline: none;
				  background-color: blue;
				  color: white;
				  cursor: pointer;
				  padding: 15px;
				  border-radius: 4px;
				}

				#topp:hover {
				  background-color: #555;
				}
				.parallax {
				/* The image used */
				background-image: url("1.jpg");

				/* Set a specific height */
				min-height: 500px; 

				/* Create the parallax scrolling effect */
				background-attachment: fixed;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				
			}
            .icon-bar {
              width: 50%;
              background-color: #555;
              overflow: auto;
            }

            .icon-bar a {
              float: left;
              width: 50%;
              text-align: center;
              padding: 12px 0;
              transition: all 0.3s ease;
              color: white;
              font-size: 36px;
            }
            .icon-barr a {
              float: left;
              width: 50%;
              text-align: center;
              padding: 12px 0;
              transition: all 0.3s ease;
              color: white;
              font-size: 36px;
            }

            .icon-bar a:hover {
              background-color: #000;
            }

            .active {
              background-color: #4CAF50;
            }
                        ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background-color: #333;
                            text-align: center;
            }

            li {
              float: left;
              border-right:1px solid #bbb;
            }

            li:last-child {
              border-right: none;
                
            }

            li a {
              display: block;
              color: white;
              text-align: center;
              padding: 6px 8px;
              text-decoration: none;
                
            }

            li a:hover:not(.active) {
              background-color: #111;
            }
            footer{
                background-image: url(frontpage/F1.jpeg);
            }
		</style>
	</head>
	<body>
        <ul>
  <li style="float:left"><a class="active" href="#home"><span class="glyphicon glyphicon-home"></a></li>
            <li><a href="index.php"><font color="yellow">C</font><font>ontent <font color="yellow">M</font>anagement for <font color="yellow">C</font>omputer <font color="yellow">S</font><font>cience</font> </a></li>
    <li><a href="notice.php"><span class="glyphicon glyphicon-list-alt"></span>Notice</a></li>
  <li><a href="ug.php"><span class="glyphicon glyphicon-education"></span>UG</a></li>
            <li><a href="pg.php"><span class="glyphicon glyphicon-education"></span>PG</a></li>
            <li><a href="mca.php"><span class="glyphicon glyphicon-education"></span>MCA</a></li>
            <li><a href="faculty.html"><span class="glyphicon glyphicon-pawn"></span>Faculty</a></li>
  <li style="float:right"><a href="admin.php"><span class="glyphicon glyphicon-user"></span>Admin</a></li>
</ul>
        <div class="bgimg">
            <a href="index.php"><img src="logo.jpg" class="center"/></a>
            <br/><br/><font size="15" color="grey">School Of Computer Science</font><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2 text-right hvr-forward"><img src="frontpage/blockchain.png"/></div>
                <div class="col-md-2 text-right hvr-forward"><img src="frontpage/css.png"/></div>
                <div class="col-md-2 text-right hvr-forward"><img src="frontpage/reactjs.png"/></div>
                <div class="col-md-2 text-left hvr-forward"><img src="frontpage/Swift.png"/></div>
                <div class="col-md-2"></div>
            </div><br/><br/><br/>
        </div>
      <br/><br/>
		<button onclick="topFunction()" id="topp" title="Go to top"><img src="img/top.png"/></button>
		<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					document.getElementById("topp").style.display = "block";
				} else {
					document.getElementById("topp").style.display = "none";
				}
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
		</script>

		
                <div class="container">
		   <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			<?php echo make_slide_indicators($connect); ?>
			</ol>

			<div class="carousel-inner">
			 <?php echo make_slides($connect); ?>
			</div>
			<a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
			 <span class="glyphicon glyphicon-chevron-left"></span>
			 <span class="sr-only">Previous</span>
			</a>

			<a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
			 <span class="glyphicon glyphicon-chevron-right"></span>
			 <span class="sr-only">Next</span>
			</a>

		   </div>
		  </div>    
	
         
		<br/><br/>
			
			 <br/><br/> 	
            <center>
<div class="row">
			
    <font size="22">  Tell us</font><font size="20" color="yellow"> WHY</font><font size="20"> you want to learn to code.<br/><br/>
    We'll show you</font><font size="20" color="yellow"> what</font><font size="20"> to learn
    </font>
			</div>
</center>
        <br/><br/>
         
         <center>
        <div  class="icon-bar">
  <a class="active" href="navigation.php"><i class="fa fa-home"></i></a> 
  <a href="navigation.php">Browse Tutorials</a>
</div>
</center>
	<br/><br/>
		<br/><br/>
                <div class="row">
			<div class="col-md-5 text-center">
				<img src="frontpage/1.jpg" height="320" width="400"/>
                <P>
                    <h3><font color="blue">Job Role:Data Engineer</font></h3>
                    Data engineers are in very much demand in thistest.<br/>But too many executives have questions about what this professionals do.
                </P>
			</div>			
        
                    <div class="col-md-7">
                        <div class="col-md-6">
                            <img src="frontpage/2.jpg" height="160" width="350"/>
                            <p>
                                <font color="blue">IT BUSINESS</font><BR/>
                                Overcoming IT services management changes mangement woes of the power of AI 
                            </p>
                        </div>
                    <div class="col-md-6">
                        <img src="frontpage/3.jpg" height="160" width="350"/>
                        <p>
                            <font color="blue">SECURITY</font><BR/>
                            Information security:Understanding and securing new perimeter
                        </p>
                        </div>
                        <hr/>
                        <div class="col-md-6">
                            <img src="frontpage/4.jpg" height="160" width="350"/>
                            <p>
                                <font color="blue">TECHONOLOGY TRENDS</font><BR/>
                            12 key tips for learning data science
                            </p>
                        </div>
                    <div class="col-md-6">
                        <img src="frontpage/5.jpg" height="160" width="350"/>
                        <p>
                            <font color="blue">SOFTWARE</font><BR/>
                            In it's most general sense, it is a set of instructions or programs instructing a system to do specific task.
                        </p>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
						</div>
                <br/>
   
	<hr/>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right ">
                <h4>Find Us At</h4>
                <div id="map" style="width:100%;height:250px;background:yellow"></div>
	<script>
		function initMap() {
			var location = {lat: 21.4768, lng: 83.9748};
			var map = new google.maps.Map(document.getElementById("map"),{
				zoom:15,
				center: location
			});
			var marker = new google.maps.Marker({
				position: location,
				map: map
			});
		}
		
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWQkwMzdg0AlOGrila381ZWnCtyGTngfs&callback=initMap">
		
	</script>
                <br/><br/>
            </div>
            <div class="col-md-2 text-right">
                <br/><br/><i class="fa fa-map-marker" style="font-size:80px;color:red"></i><br/><br/><br/>
                <i class="fa fa-envelope" style="font-size:65px;color:red"></i><br/><br/><br/><br/>
                <i class="fa fa-volume-control-phone" style="font-size:65px;color:red"></i>
            </div>
            <div class="col-sm-5 right-border">
                        <h3>GET IN TOUCH</h3>
                        <p class="line-divider"></p>
                        <div class="address-wrapper">
                            <i class="icon-address"></i>
                            <h4>ADDRESS</h4>
                            <p><strong>Regd. Office</strong> : CMCS, D-601, Sbp, <br>Church Chowk, Sambalpur, Odisha 768004, INDIA.</p>
							<p><strong>Pack House</strong> : CMCS, CS Lab , <br>School Of Computer Science <br>Church Chowk, Sambalpur, Odisha 768004, INDIA.</p>
                        </div>
                        <div class="address-wrapper">
                            <i class="icon-email"></i>
                            <h4>EMAIL</h4>
                            <p><a href="mailto:fruitvillacorp@gmail.com">sandeepkumar@gmail.com</a></p>
                        </div>
                        <div class="address-wrapper">
                            <i class="icon-Contact"></i>
                            <h4>PHONE</h4>
                            <p>+91 9337451238 &nbsp;&nbsp;|&nbsp;&nbsp; +91 9040879672</p>
                        </div>
                </div>
             <div class="col-md-1"></div>
        </div>
        <footer><font size="5" color="grey">copyright@CmcS.org</font></footer>
	</body>
</html>