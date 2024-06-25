<!doctype html>
<html>
  <head>
  >
  </head>
  <body background='\Images\covid.jpg' >
      <div class="container"  style="margin-top :10%" >
        <dive class = "row">
      <div>
     
   
       

      <center>
      <table   style="weidth:30&; height:20%;" border=5px>

      <?php require_once("../home/covid.php") ?>



        
        
        <tbody>
        <thcolspan="2"><h1>Covid- 19 details</h1></th>
      </th>
          <tr>
          
            <td style="height:100%;width:50%" ><h2> <mark>Local new cases </mark>  </h2>  </td>
            <td style="height:100%;width:50% "> <h2><mark><?php echo($lns) ?></mark> </h2> </td>
          
          </tr>
          <tr>
          
            <td style="height:100px "><h2><mark>Local total cases </mark> </h2></td>
            <td style="width:100px "><h2> <mark><?php echo($ltc) ?></mark> </h2>  </td>
          
          </tr>
          <tr>
          
          <td style="height:100px">  <h2>  <mark>Local death</mark> </h2> </td>
            <td style="width:100px"> <h2> <mark><?php echo($ltc) ?></mark> </h2>  </td> 
            
          
          </tr>
        </tbody>
      </table>
      </center>
      </div>

      </div>
      </div>
      </div>
</body>
</html>