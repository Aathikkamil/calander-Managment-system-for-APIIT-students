<?php
$email = $_POST['email'];
$pass = $_POST['pass'];

require_once ('../eng/dbcon.php');

$sql = "SELECT id, fname from user WHERE email='$email' AND passwd = '$pass'";
$result = $conn->query($sql);
if ( $result->num_rows>0){
    while($row= $result->fetch_assoc()){
        session_start();
        $_SESSION["id"] =$row["id"];
        $_SESSION["uname"] =$row["fname"];
        echo "<meta http-equiv='refresh' content='1;URL=../home/home.php'>";
        
}}
else{
          
          echo "User not found";
          echo "<meta http-equiv='refresh' content='5;URL=../index.php'>";
         

      }

      ?>



     





