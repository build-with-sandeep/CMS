<?php
	$connect = mysqli_connect("localhost", "root", "", "slider");
	$i=$_REQUEST['id'];
	$query="DELETE FROM banner WHERE banner_id='$i' ";
	$result=mysqli_query($connect,$query);
	if($result)
		header('location:slider.php');
	else
	header('location:errorpage.php');
?>
