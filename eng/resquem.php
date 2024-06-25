<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$pass = $_POST['passwd'];



require_once ('../eng/dbcon.php');

//new regestation 
$sql = "INSERT INTO `user` ( `fname`, `lname`, `dob`, `passwd`, `email`, `status`) VALUES ( '$fname', '$lname', '$dob', '$pass', '$email', 0);";
//echo $sql;
if ($conn->query($sql)===TRUE){
   echo("<h1>"); echo "New user registered successfully"; echo("</h1>");
    echo "<meta http-equiv='refresh' content='5;URL=../index.php'>";

  }else{
      echo "Error: " . $sql . "<br>" . $conn->error;
      
  }
// get the user id 

  $sql = "SELECT id FROM user  WHERE email='$email'";

  $result = $conn->query($sql);
 


  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $userid = $row["id"];

    }}

    $hashname = 'default';
 require_once('../eng/creaehash.php');





 

  $conn->close();



?>