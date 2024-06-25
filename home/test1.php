<!DOCTYPE html>
<html lang="en">
  <?php require_once("../eng/Head.php")   ?>
<head>
<body>
  
<?php   require_once("../eng/navbar.php")  ?>
<br>
<br>
<br>
<center>
      <table bgcolor=#ABEBC6  border=0px>

      <?php require_once("../home/weather.php") ?>



        
        
        <body bgcolor=#D5F5E3   >
        <thcolspan="2"><h1>weather</h1>
  
      </th>
      </th>
          <tr >
            <?php  echo($img)   ?>
          
            <td style="height:100px;width:200px" ><h2> Temparager  </h2>  </td>
            <td style="height:100%;width:50% "> <h2><?php echo($tem) ?> </h2> </td>
          
          </tr>
          <tr>
          
            <td style="height:100px "><h2>Main </h2></td>
            <td style="width:50px "><h2> <?php echo($main) ?> </h2>  </td>
          
          </tr>
          <tr>
          
          <td style="height:100px">  <h2> weather</h2> </td>
            <td style="width:100px"> <h2> <?php echo($des) ?> </h2>  </td> 
          </tr>
          <tr>
          
          <td style="height:100px "><h2> Humidity  </h2></td>
          <td style="width:100px "><h2> <?php echo($hmt) ?> </h2>  </td>
        
        </tr>
        <tr>
          
          <td style="height:100px "><h2>icon  </h2></td>
          <td style="width:100px "><h2> <?php echo($icon) ?> </h2>  </td>
        
        </tr>


        </tbody>
      </table>
      </center>
      </div>



</head>
    
</body>
</html>