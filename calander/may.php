<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <style>
        ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}
 
/* Month header */
.month {
  padding: 50px 25px;
  width: 100%;
  background: black;
  text-align: center;
}
 
/* Month list */
.month ul {
  margin: 0;
  padding: 0;
}
 
.month ul li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}
 
/* Previous button inside month header */
.month .prev {
  float: left;
  padding-top: 10px;
}
 
/* Next button */
.month .next {
  float: right;
  padding-top: 10px;
}
 
/* Weekdays (Mon-Sun) */
.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color:#ddd;
}
 
.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
  }
  
  /* Days (1-31) */
  .days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
  }
  
  .days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
  }
  
  /* Highlight the "current" day */
  .days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
  }
     </style>
</head>
<body>
<?php require_once('../calander_event/many.php')  ?>
<div class="col-6 col-md-4"><a href="../home/home.php"  class="btn btn-primary btn-lg">Back</a></div>
<div align = "center">
<ul>
    <li><h1>May<br><span style="font-size:18px">2021</h1></span></li>
  </ul>
</div>
<div class="row">
    <div class="col-6 col-md-4"><center> <center><a href="../calander/april.php"  class="btn btn-primary btn-lg"><<</a></center></div>
    <div class="col-6 col-md-4"> </div>
    <div class="col-6 col-md-4"><center><a href="../calander/june.php"  class="btn btn-primary btn-lg">>></a></center></div>
  </div>
<br>
<ul class="weekdays">
  <li>Sa</li>
  <li>Su</li>
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
</ul>

<ul class="days">
  <li>1<br><?php  echo($item) ?></li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>

</ul>

<ul class="days">
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13<br><?php echo($item1) ?></li>
  <li>14</li>
 
  
</ul>

<ul class="days">
<li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>

  
</ul>

<ul class="days">
<li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26<br><?php echo($item2)  ?></li>
  <li>27<br><?php echo($item3)  ?></li>
  <li>28</li>
  </ul>
  <ul class="days">
  <li>29</li>
  <li>30</li>
  <li>31</li>
  </ul>

</html>