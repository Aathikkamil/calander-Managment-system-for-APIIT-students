<!doctype html>
<html lang="en">
<head>
<?php require_once ('eng/Head.php');?>

<title> Learning Managment System - APIIT</title>
</head>
<body background='\Images\asd.jpg' >


<div class="container"  style="margin-bottom :70px" >
  <dive class = "row">
  

        <?php
        if(isset($_GET["page"])){
        
        $body = "./home/".$_GET["page"] .".php";
        
            }else{
        $body = "./home/Loging.php";
        
            }
        ?>
        


        
        <?php require_once ($body);?>
        <?php require_once ('./eng/dbcon.php');?>
        

        <?php require_once ('eng/js.php');?>
        </div>
        </div>       
</body>
</html>