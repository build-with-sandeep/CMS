<?php

session_start();
$stn=$_SESSION['std'];
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
	$core=$_SESSION['core'];
	$semester=$_SESSION['semester'];
	
	$lectures=$_SESSION['lectures'];
	$lname=$_SESSION['lecname'];
	$id=$semester.$core.$lname;

    $query="SELECT subjectname from course WHERE core='$core' AND semester='$semester'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        $row = mysqli_fetch_assoc($result);
        $coursename=$row['subjectname'];
    }



if(isset($_POST['insert'])){
    $no_of_videos=count($_FILES['video']['name']);
    $no_of_pdfs=count($_FILES['pdf']['name']);    
    if($lectures > 0){
        //Loop through each file
        for($i=0; $i<$lectures; $i++) {
          //Get the temp file path
            $topic = $_POST['topic'.$i];

            $pdfname=$_FILES['pdf']['name'][$i];
            $pdftempname=$_FILES['pdf']['tmp_name'][$i];
            $pdfdestination=$course.'pdf/'.$coursename.$lname.$topic.'.pdf';
            move_uploaded_file($pdftempname, $pdfdestination);


            $videoname=$_FILES['video']['name'][$i];
            $videotempname=$_FILES['video']['tmp_name'][$i];
            $videotype=$_FILES['video']['type'][$i];
            $videodestination=$course.'video/'.$coursename.$lname.$topic.'.mp4' ;
            move_uploaded_file($videotempname, $videodestination);
            
            $query="INSERT INTO content(id,core,lecturename, topic, videoname, videopath, pdfname, pdfpath) VALUES ('$id','$core','$lname','$topic','$videoname','$videodestination','$pdfname','$pdfdestination')";
            
            $res=mysqli_query($conn,$query);
        }
        
    }
}
$query1="INSERT INTO info ( id,sem, core,lecturename, lectures)  VALUES ('$id','$semester','$core','$lname','$lectures')";
        $result=mysqli_query($conn,$query1);
        if($result){
            echo'<script>if(confirm("Lecture has added successfully")) {
    window.location.href = "add.php";
}</script>';
    }
?>

















