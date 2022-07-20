<?php
error_reporting(0);
	include 'connection1.php';
	session_start(); 
		
		$core=$_SESSION['core'];
	    $semester=$_SESSION['semester'];
	    $sub=$_SESSION['sname'];

	    $sql = "SELECT *  FROM content WHERE  core='$core' ";
		$result = mysqli_query($conn,$sql);

	if (mysqli_num_rows($result) > 0) {
		echo'<table>';
	    while($row = mysqli_fetch_assoc($result)) {
	    	echo'<tr>';
	    	echo '<td>'.$row['topic'].'</td>';
	        echo '<td><a href="http:/project/'.$row['videopath'].'">'.$row['videopath'].'</a></td>';
	        echo '<br>';
	        echo '<td><a href="http:/project/'.$row['pdfpath'].'">'.$row['pdfpath'].'</a></td>';
	        
	         echo'<td><a style="color:red;" href="admin_delete_remove.php?tn='.$row[topic].'&vp='.$row[videopath].
	        '&pp='.$row[pdfpath].'&id='.$row[id].'">DELETE</a></td>';
	        echo"</tr>";
	    }
	    echo'</table>';
	} else {
	    echo "0 results";
	}




?>
<a href="admin.php">ADMIN</a>