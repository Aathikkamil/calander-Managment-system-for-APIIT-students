<html>
<head>
<?php    require_once('../eng/Head.php')    ?> 
</head>
    
    <body background='\Images\asd.jpg' >

    <div class="container"  style="margin-top :80px;margin-bottom :80px " >
  <dive class = "row">

    <?php
    session_start();
    if(!isset($_SESSION["id"])){
      echo '<h2>  User not logedin  </h2>';
      echo ' <h3> Plese Login First   </h3>';
      echo ' <meta thhp-equvi="refresh" content =1";URL=../index.php/>';
      die;
    
    }
    
      ?>
    <?php require_once ('../eng/navbar.php');?>
    <?php require_once('../home/news.php') ?>
        <br>
    <div class="container">
  <div class="row">
    <div class="col">
 
    </div>
    <div class="col-6">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100"src="\Images\img1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\Images\img2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\Images\img3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
    <div class="col">

    </div>
  </div>
  <br>
<br>



<table border=0px>
<tr>
  <td  style="width:600px" >


  <div class="row">
  <div class="col-6 col-md-4"><div class="card" style="width: 20rem;">
  <img class="card-img-bottom" src="\Images\cal.gif" alt="Card image ">
  <div class="card-body">
  <a href="/Home/cal.php"class="btn btn-primary btn-block ">Calander </a>
  </div>
</div></div>

</td>
<td style="width:1000px">


</td>

<td style="width:400px">

<div class="col-6 col-md-4"><div class="card" style="width: 16rem; bgcolor:green;">
  <img class="card-img-top" src="\Images\cale.jpg"  alt="Card image cap">
  <div class="card-body">   
    <a href="/home/calander.php" class="btn btn-primary btn-block"> My events</a>
  </div></div>
<div><br>

<br>


</td>
</tr>
<div>
</table>
<BR>
<BR>

<br>


<center>
<div>
<img  src="../images/covid.gif">
  </div>
  <br>
  </center>






  


<br>
<div>
<?php require_once('../eng/card.php'); ?>
</div>
</div></div>
</div>


<div>
<br>
<br><br><br>
<table border=0px>

<tr>
<td style="width:350px;height:450px;   " >
  
<div>
  <div class="col-6 col-md-4"><div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo($pic); ?>   " alt="Card image cap">
  <div class="card-body"><?php echo($des);echo("<br>"); echo("Author:  "); echo($auth); ?>
  <h5 class="card-title">  <?php echo($title) ?>   </h5>

    <a href=" <?php echo($link);  ?> " class="btn btn-primary btn-block"> Read More </a>
  </div>
</div></div>
</td>
<td style="width:350px;">
<div>
  <div class="col-6 col-md-4"><div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo($pic1); ?>   " alt="Card image cap">
  <div class="card-body"><?php echo($des1); echo("<br>"); echo("Author:  "); echo($auth1);  ?>
  <h5 class="card-title">  <?php echo($title1) ?>   </h5>
    <a href=" <?php echo($link1);  ?> " class="btn btn-primary btn-block"> Artical </a>
  </div>
</div></div>
</td>
<td  style="width:350px;">


</td>

</tr>


</table>


</div>



</div>
</div>





     
     
    </body>
 
</html>