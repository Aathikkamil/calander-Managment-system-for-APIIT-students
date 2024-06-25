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

$request = $conn->query($eventsql);
    if ($request->num_rows > 0){
        while($row = $request->fetch_assoc()) {
          $uid =  $row['user'];
        }
    }else{

         
        array_push($data, 'Error => No Details Found');
        array_push($status, 'Status => Request Fail');
    }
$sql = "SELECT ename, estartdate, eend FROM calevents WHERE id = $uid AND eid ='". $_GET["eventid"] ."' ";

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row =$result->fetch_assoc()){
      
     
      $name =  $row['ename'];
      $start = $row['estartdate'];
      $end =  $row['eend'];

     $data=array("Event Name => $name Start Date => $start End Date => $end");
      
     

    }
}else{

        array_push($data, 'error => No Data Found');
        array_push($status, 'Status => Request Fail');
    
    }
}


$output = array();

array_push($output, $data);
array_push($output, $status);


echo json_encode($output);
?>