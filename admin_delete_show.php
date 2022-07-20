<?php
	session_start();
	$pk=$_REQUEST['pk'];
	$degree=$_REQUEST['degree'];

	if($degree=='ug')
			include 'connectionug.php';
		else if($degree=='pg')
			include  'connectionpg.php';
		else if($degree=='mca')
			include 'connectionmca.php';

	$core=$_SESSION['core'];
	$semester=$_SESSION['semester'];
	$sub=$_SESSION['sub'];
	
	$sql="DELETE FROM content WHERE pk='$pk'";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		header('location:adminshow1.php');
	}
	else
		header('location:errorpage.php');

?>	