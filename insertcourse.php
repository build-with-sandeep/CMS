<?php
	$stn=$_POST['std'];
	echo $stn;
     if($stn=='pg')
        include'connectionpg.php';
    else if($stn=='mca')
        include'connectionmca.php';
    else
        include'connectionug.php';
	$s= $_POST['semester'];
	$c= $_POST['core'];
	$sn= $_POST['sname'];
	$i=$s.$c;
	$query="INSERT INTO course( `id`, `core`, `semester`, `subjectname`) VALUES('$i','$c','$s','$sn')";
	$result=mysqli_query($conn,$query);
	if($result){
		echo'<script>if(confirm("Course has added successfully")) {
    window.location.href = "addcourse.php";
}</script>';
    }
        else
	 echo'not';
?>0