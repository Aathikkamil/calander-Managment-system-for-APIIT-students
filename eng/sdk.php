<!DOCTYPE html>
<html>
<head>
</head>
<body>



<?php
 session_start();
 require_once ('../eng/dbcon.php');

$sql = "SELECT hashname, userhash FROM tblhash WHERE user =".$_SESSION["id"]; 
$result = $conn->query($sql);


if($result->num_rows > 0){
    while($row =$result->fetch_assoc()){

        echo $row["hashname"];
        echo "<br>";
        echo $row["userhash"];

    }}else{

        echo "User not found";
    }
?>
</div>
</div>
    
</body>
</html>
