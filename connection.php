<?php
$database="ug";
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password,$database);
if($conn)
	echo 'successfull';
 ?>