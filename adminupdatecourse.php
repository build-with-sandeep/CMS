
<?php
	include"connection1.php";
	session_start();
	$id=$_REQUEST['id'];
	$topicname=$_REQUEST['tn'];
	$videopath=$_REQUEST['vp'];
	$pdfpath=$_REQUEST['pp'];
	$sub=$_SESSION['sub'];

	if(isset($_POST['update']))
	{
		$tpname=$_POST['tname'];
		$newid=$_POST['id'];
		$videoname=$_FILES['videofile']['name'];
	 	$videotempname=$_FILES['videofile']['tmp_name'];
	 	$videodestination='video/'.$sub.$tpname.'.mp4';
	 	move_uploaded_file($videotempname, $videodestination);

	 	$pdfname=$_FILES['pdffile']['name'];
	 	$pdftempname=$_FILES['pdffile']['tmp_name'];
	 	$pdfdestination='pdf/'.$sub.$tpname.'.pdf';
	 	move_uploaded_file($pdftempname, $pdfdestination);
	 	
	 		

 
		 $sql="UPDATE content SET topic='$tpname' , videoname='$videoname', videopath='$videodestination' , pdfname='$pdfname' , pdfpath='$pdfdestination' WHERE id='$newid'";
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
					<label><h3>Unit Name</h3></label><br/>
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
				<input type="submit" id="button" class="btn-success btn-lg " name="update" value="update" onclick="show()"/></input>
				<input type="hidden" name="id" value="<?php echo $id;?>"/>
				
	</form>
</body>
</html>