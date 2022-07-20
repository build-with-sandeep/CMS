
<?php
	session_start();
	$degree=$_SESSION['degree'];
	$core=$_SESSION['core'];
	$sem=$_SESSION['semester'];
	echo $degree;
	$pk=$_REQUEST['pk'];
	echo $pk;
	$topicname=$_REQUEST['tn'];
	$videopath=$_REQUEST['vp'];
	$pdfpath=$_REQUEST['pp'];

	if($degree=='ug')
	    	{
	    		include 'connectionug.php';
	    		$course='UG';
	    	}	
	    else if($degree=='pg')
	    	{
	    		include 'connectionpg.php';
	    		$course='PG';
	    	}	
	    else if($degree=='mca')
	    	{
	    		include 'connectionmca.php';
	    		$course='MCA';
	    	}	


	if(isset($_POST['update']))
	{	
		$query="SELECT subjectname FROM  course WHERE core='$core' AND semester='$sem'";
	 	$res=mysqli_query($conn,$query);
	 	if($res)
	 		{
	 			$row=mysqli_fetch_assoc($res);
	 			$subjectname=$row['subjectname'];
	 			

	 		}


	 	$q="SELECT lecturename FROM  info WHERE core='$core' AND sem='$sem'";
	 	$r=mysqli_query($conn,$q);
	 	if($r)
	 		{
	 			$row=mysqli_fetch_assoc($r);
	 			$lecturename=$row['lecturename'];
	 			

	 		}	
		$tpname=$_POST['tname'];
		$newid=$pk;
		$videoname=$_FILES['videofile']['name'];
	 	$videotempname=$_FILES['videofile']['tmp_name'];
	 	$videodestination=$course.'video/'.$subjectname.$lecturename.$tpname.'.mp4';
	 	move_uploaded_file($videotempname, $videodestination);

	 	$pdfname=$_FILES['pdffile']['name'];
	 	$pdftempname=$_FILES['pdffile']['tmp_name'];
	 	$pdfdestination=$course.'pdf/'.$subjectname.$lecturename.$tpname.'.pdf';
	 	move_uploaded_file($pdftempname, $pdfdestination);
	 	
	 	
	 	$id=$sem.$core.$subjectname;
 
		 $sql="UPDATE content SET id='$id', topic='$tpname' , videoname='$videoname', videopath='$videodestination' , pdfname='$pdfname' , pdfpath='$pdfdestination' WHERE pk='$newid'";
		 $result=mysqli_query($conn,$sql);
		 if($result)
		 	{echo"updated successfully";
				header('location:admin_update1.php');
		 	}
		 else
		 	echo"cannot update";
		
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script>
		function show(){
			alert("Data updated successfully");
		}
	</script>
	<style type="text/css">
		#button{
			padding:5px;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<form action="admin_update2.php" method="post" enctype="multipart/form-data">
		<div class="col-md-6">
					<label><h3>Topic Name</h3></label><br/>
					<input type="text"name="tname" value="<?php echo$topicname;?>" />
				</div>
				<div class="col-md-3">
					<label><h3>Video</h3></label><br/>
					<input type="file" name="videofile" value="<?php echo$videopath;?>" ><?php echo $videopath;?></input>
				</div>
				<div class="col-md-3">
					<label><h3>Pdf</h3></label><br/>
					<input type="file" name="pdffile" value="<?php echo$pdfpath;?>" ><?php echo $pdfpath;?></input>
				</div>
				<input type="hidden" name="pk" value="<?php echo $pk;?>"/>
				<input type="submit" id="button" class="btn-success btn-lg " name="update" value="update" onclick="show()"/></input>
				
				
	</form>
</body>
</html>