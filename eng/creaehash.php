<?php

$hashname = 'default';
$hash = md5($email.$password.$hashname."mycalc");
$sql = "INSERT INTO `tblhash`(`user`, `hashname`, `userhash`) VALUES ($userid,$hashname, '$hash')";
if ($conn->query($sql)===TRUE){
    echo "New hash  registered successfully";
  }else{
      echo "Error: " . $sql . "<br>" . $conn->error;
      
  }






?>