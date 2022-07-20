<?php
    $stn=$_POST['std'];
    if($stn=='pg')
        include'connectionpg.php';
    else if($stn=='mca')
        include'connectionmca.php';
    else
        include'connectionug.php';
?>