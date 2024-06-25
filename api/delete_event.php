<?php
$data=array();
$meta=array();
$status=array();
if(!isset ($_GET['AppID']) && ($_GET['eventid'])){
  
  array_push($data, 'Error => No Details Found');
  array_push($status, 'Status => Request Fail');

 
}else{

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

$sql = "DELETE FROM calevents  WHERE id = $uid AND eid = '". $_GET["eventid"] ."' "; 

$result = $conn->query($sql);

if ($conn->query($sql)==TRUE){
      
     

  array_push($status, 'Status => Request Confirme');
  array_push($data, 'data => delete Sucess ');    
     

    
}else{

        array_push($data, 'error => Couldnt delete');
        array_push($status, 'Status => Request Fail');
    
    }
}


$output = array();

array_push($output, $data);
array_push($output, $status);


echo json_encode($output);
?>