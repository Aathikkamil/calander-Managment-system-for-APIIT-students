
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<div class="col-6 col-md-4"><a href="../home/home.php"  class="btn btn-primary btn-lg">Back</a></div>
<br>
    <?php
session_start();
require_once ('../eng/dbcon.php');
$sql = "SELECT eid, ename, estartdate, eend FROM calevents WHERE id =".$_SESSION["id"]; 
$result = $conn->query($sql);

echo "<table class='table table-striped'><tr><th scope ='col'><center>Event ID</center></th><th scope ='col'><center>Event</center></th><th scope ='col'><center>Start Date</center></th><th scope ='col'><center>End Date</center></th></tr>";
if($result->num_rows> 0){
    while($row =$result->fetch_assoc()){
        echo "<tr>";
        echo "<td align = center>".$row["eid"]."</td>";  
        echo "<td align = center>".$row["ename"]."</td>";
        echo "<td align = center>".$row["estartdate"]."</td>";
        echo "<td align = center>".$row["eend"]."</td>";
        

    }}else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo "</table>";

?>
<br>
  
  <div class="row">
    
    <div class="col-6 col-md-4"><center><a href="../contants/createvent.php"  class="btn btn-primary btn-lg">Add Event</a></center></div>
    <div class="col-6 col-md-4"> </div>
    
    <div class="col-6 col-md-4"><center> <center><a href="../contants/deleteven.php"  class="btn btn-primary btn-lg">Delete</a></center></div>
 
    <div class="col-6 col-md-4"> </div>
  </div>
<br>