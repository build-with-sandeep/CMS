<?php
	session_start();
$stn=$_REQUEST['vp'];
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
	$core=$_REQUEST['tn'];
	$sql="DELETE FROM course WHERE core='$core'";
	$result=mysqli_query($conn,$sql);
    if($result){
         echo'<script>if(confirm("Course deleted successfully")) {
    window.location.href = "adminshow2.php";
}</script>';
    }
	  
?>