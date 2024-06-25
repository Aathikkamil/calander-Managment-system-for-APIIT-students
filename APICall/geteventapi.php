<!DOCTYPE html>
<html lang="en">
<head>
<?php    require_once('../eng/Head.php')    ?> 
</head>
<body background='\Images\bga.jpg' >

<?php   require_once("../eng/navbar.php")  ?>

<br>
<br><br><br>
<div class="container"  style="margin-top :0px " >
  <dive class = "row">

<center>
<table  border=5px>

<tr style="width:90px; height:100px" >
  <td style="width:1200px"><center> <h1> API calles</h1>   </center>
</td>
</tr>


<td style="height:120px"> <center>  <h2>   This is your AppID </h2>

<mark> <?php require_once("../eng/sdk.php") ?> </mark> </center> </td>

<tr> 
   <td style="height:120px"><center> <h2> Creaate event API </h2> http://localhost/api/create_event.php?AppID=[AppID]&eventname=[event-name]&eventstart=[YYYY-MM-DD]&eventend=[YYYY-MM-DD]     </center>   </td>     
   
</tr>
<tr>
<td style="height:100px"> <center> <h2> Delete Events  API </h2>  http://localhost\api\delete_event.php?AppID=[AppID]&eventid=[eventID] </center>  </td>

</tr>
<tr>

<td style="height:100px"><center><h2> View event API</h2>   http://localhost/api/get_event.php?AppID=[AppsID]&eventid=[event ID] </center> </td>

</tr>


</table>
</center>


</div>
</div>
</body>
</html>