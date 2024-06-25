<?php
session_start();
$_SESSION["id"] =null;
$_SESSION["uname"]=null;
session_unset();
session_destroy();

?>
<meta http-equiv="refresh" content="2;URL=../index.php" />
