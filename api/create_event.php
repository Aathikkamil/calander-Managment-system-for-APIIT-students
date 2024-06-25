<?php
$data=array();
$meta=array();
$status=array();
if(!isset ($_GET['AppID']) && ($_GET['eventname']) && ($_GET['eventstart']) && ($_GET['eventend']) ){
  
  array_push($data, 'Error => No Details Found');
  array_push($status, 'Status => Request Fail');

 
}else{

  $ename = $_GET['eventname'];
  $eventstart = $_GET['eventstart'];
  $eventend = $_GET['eventend'];
require_once ('../eng/dbcon.php');

$eventsql = "SELECT user FROM tblhash WHERE tblhash.userhash = '". $_GET["AppID"] ."'"; 

$resu = $conn->query($eventsql);
    if ($resu->num_rows > 0){
        while($row = $resu->fetch_assoc()) {
          $uid =  $row['user'];
        }
    }else{
 
      array_push($data, 'Error => No Details Found');
      array_push($status, 'Status => Request Fail');
    
    }

$sql = "INSERT INTO calevents (`id`, `ename`, `estartdate` , `eend`) VALUES ('$uid', '$ename', '$eventstart', '$eventend')";



if ($conn->query($sql)==TRUE){
      
     

  array_push($status, 'Status => Sucess');
      
     

    
}else{
        
        array_push($data, 'error => Couldnt create');
        array_push($status, 'Status => Request Fail');
    
    }
}


$output = array();

array_push($output, $data);
array_push($output, $status);


echo json_encode($output);
?>