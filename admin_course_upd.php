
<?php
	session_start();
    $stn=$_REQUEST['t'];
     if($stn=='pg')
        {   
            include'connectionpg.php';
            $course='PG';
        }    
    else if($stn=='mca')
        {
            include'connectionmca.php';
            $course='MCA';
        }
    else
        {
            include'connectionug.php';
            $course='UG';
        }   
	$sub=$_REQUEST['pp'];
	$sem=$_REQUEST['tn'];
	$c=$_REQUEST['vp'];
if(isset($_POST['update']))
	{  
        $s=$_POST['tn'];
        $c=$_POST['vp'];
        $sb=$_POST['pp'];
        $sql="UPDATE course SET semester=$s,core=$c,subjectname='$sb' WHERE core=$c";
	   $result=mysqli_query($conn,$sql);
        if($result)
            header('location:adminshow2.php');
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
	<form action="admin_course_upd.php" method="post" enctype="multipart/form-data">
		<div class="col-md-6">
					<label><h3>Semester</h3></label><br/>
					<input type="text"name="tn" value="<?php echo$sem;?>" />
				</div>
				<div class="col-md-3">
					<label><h3>Core</h3></label><br/>
					<input type="text" name="vp" value="<?php echo$c;?>" ></input>
				</div>
				<div class="col-md-3">
					<label><h3>Core Name</h3></label><br/>
					<input type="text" name="pp" value="<?php echo$sub;?>" ></input>
				</div>
				<input type="submit" id="button" class="btn-success btn-lg " name="update" value="update" /></input>
				<input type="hidden" name="id" value="<?php echo $id;?>"/>
				
	</form>
</body>
</html>