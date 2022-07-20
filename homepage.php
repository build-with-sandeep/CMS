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
        <!--icor bar-->
         <ul>
  <li style="float:left"><a class="active" href="#home"><span class="glyphicon glyphicon-home"></a></li>
            <li><a href="mca.php"><font color="yellow">C</font><font>ontent <font color="yellow">M</font>anagement for <font color="yellow">C</font>omputer <font color="yellow">S</font><font>cience</font> </a></li>
    <li><a href="notice.php"><span class="glyphicon glyphicon-list-alt"></span>Notice</a></li>
  <li><a href="ug.php"><span class="glyphicon glyphicon-education"></span>UG</a></li>
            <li><a href="pg.php"><span class="glyphicon glyphicon-education"></span>PG</a></li>
            <li><a href="mca.php"><span class="glyphicon glyphicon-education"></span>MCA</a></li>
            <li><a href="faculty.html"><span class="glyphicon glyphicon-pawn"></span>Faculty</a></li>
  <li style="float:right"><a href="admin.php"><span class="glyphicon glyphicon-user"></span>Admin</a></li>
</ul>
        
        <!--bg image-->
        <div class="bgimg">
            <a href="index.php"><img src="logo.jpg" class="center"/></a>
            <br/><br/><font size="15" color="grey">School Of Computer Science</font><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2 text-right hvr-forward"><img src="frontpage/syllabus.jpg"/></div>
                <div class="col-md-2 text-right hvr-forward"><img src="frontpage/syllabus.jpg"/></div>
                <div class="col-md-2 text-right hvr-forward"><img src="frontpage/syllabus.jpg"/></div>
                <div class="col-md-2 text-left hvr-forward"><img src="frontpage/syllabus.jpg"/></div>
                <div class="col-md-2"></div>
            </div><br/><br/><br/>
        </div>
      <br/>
        
        <!-- top switch-->
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
        
        <!-- Slider-->
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
		<br/>
        <script>
  (function() {
    var cx = 'YOUR_ENGINE_ID';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchbox-only resultsUrl="YOUR_RESULTS_PAGE_URL"></gcse:searchbox-only>
        
        <input autocomplete="off" type="text" size="10" class="gsc-input" name="search" title="search" id="gsc-i-id1" placeholder="Custom Search" dir="ltr" spellcheck="false" style="width: 100%; padding: 0px; border: none; margin: 0px; height: auto; background: url(&quot;http://www.google.com/cse/static/images/1x/googlelogo_lightgrey_46x16dp.png&quot;) left center no-repeat rgb(255, 255, 255); text-indent: 48px; outline: none;"><button class="gsc-search-button gsc-search-button-v2"><svg width="13" height="13" viewBox="0 0 13 13"><title>search</title><path d="m4.8495 7.8226c0.82666 0 1.5262-0.29146 2.0985-0.87438 0.57232-0.58292 0.86378-1.2877 0.87438-2.1144 0.010599-0.82666-0.28086-1.5262-0.87438-2.0985-0.59352-0.57232-1.293-0.86378-2.0985-0.87438-0.8055-0.010599-1.5103 0.28086-2.1144 0.87438-0.60414 0.59352-0.8956 1.293-0.87438 2.0985 0.021197 0.8055 0.31266 1.5103 0.87438 2.1144 0.56172 0.60414 1.2665 0.8956 2.1144 0.87438zm4.4695 0.2115 3.681 3.6819-1.259 1.284-3.6817-3.7 0.0019784-0.69479-0.090043-0.098846c-0.87973 0.76087-1.92 1.1413-3.1207 1.1413-1.3553 0-2.5025-0.46363-3.4417-1.3909s-1.4088-2.0686-1.4088-3.4239c0-1.3553 0.4696-2.4966 1.4088-3.4239 0.9392-0.92727 2.0864-1.3969 3.4417-1.4088 1.3553-0.011889 2.4906 0.45771 3.406 1.4088 0.9154 0.95107 1.379 2.0924 1.3909 3.4239 0 1.2126-0.38043 2.2588-1.1413 3.1385l0.098834 0.090049z"></path></svg></button>
    </body>
    </html>