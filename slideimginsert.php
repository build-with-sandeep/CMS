<?php	
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="slider";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if($conn){
		echo "Connection Established";
	}else{
		echo"Connection not Established";
	}
	$id=$_POST['idd'];
	$bn=$_POST['bname'];
	$filename=$_FILES["uploadfile"]["name"];
	$tempname=$_FILES["uploadfile"]["tmp_name"];
	$folder="banner/".$filename;
	$query="INSERT INTO banner VALUES('$id','$bn','$folder')";
	$data=mysqli_query($conn,$query);
	move_uploaded_file($tempname,$folder);
			if($data){
		echo"Record Inserted";
	}else{
		echo"Record not Inserted";
	}
	header('location:slider.php');
	
?>

