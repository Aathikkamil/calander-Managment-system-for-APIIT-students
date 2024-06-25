<?php
session_start();
$eid =  $_GET['id'];


require_once ('../eng/dbcon.php');
//Register user into DB
$sql = "DELETE FROM calevents WHERE eid = $eid";
if ($conn->query($sql)===TRUE){

    echo'<meta http-equiv="refresh" content ="2;URL=../home/calander.php"/>';
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>