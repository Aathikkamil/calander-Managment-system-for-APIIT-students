
<?php
session_start();
$id = $_SESSION['id'];
$Eventname = $_GET['Eventname'];
$start = $_GET['start'];
$end = $_GET['end'];

require_once ('../eng/dbcon.php');
//Register user into DB
$sql = "INSERT INTO `calevents` (`id`, `ename`, `estartdate`, `eend`) VALUES ( '$id', '$Eventname', '$start', '$end')";
if ($conn->query($sql)===TRUE){

    echo'<meta http-equiv="refresh" content ="2;URL=../home/calander.php"/>';
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
