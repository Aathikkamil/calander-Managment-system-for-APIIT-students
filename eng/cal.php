<!DOCTYPE html>
<html>
<head>
<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Calibri light, Arial, Helvetica}
.month {
  padding: 50px 75px;
  width: 100%;
  background: #C71585;
  text-align: center;
}
.month ul {
  margin: 0;
  padding: 0;
}
.month ul li {
  color: white;
  font-size: 40px;
  text-transform: uppercase;
  letter-spacing: 6px;
}
.month .prev {
  float: left;
  padding-top: 20px;
}
.month .next {
  float: right;
  padding-top: 20px;
}
.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #778899;
}
.weekdays li {
  display: inline-block;
  width: 13.8%;
  color: grey light;
  text-align: center;
}
.days {
  padding: 15px 0;
  background: #D3D3D3;
  margin: 0;
}
.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.8%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #778899;
}
.days li .active {
  padding: 7px;
  background: #C71585;
  color: white;
}
@media screen and (max-width:720px) {
  .weekdays li, .days li {width: 15.1%;}
}
@media screen and (max-width: 440px) {
  .weekdays li, .days li {width: 15.5%;}
  .days li .active {padding: 4px;}
}
@media screen and (max-width: 390px) {
  .weekdays li, .days li {width: 12.2%;}
}
</style>
</head>
<body>
<h1>CSS Calendar Example</h1>
<div class="month">      
  <ul>
    <li class="prev">❮</li>
    <li class="next">❯</li>
    <li>
      March<br>
      <span style="font-size:28px">2020</span>
    </li>
  </ul>
</div>
<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>
<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li><span class="active">24</span></li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
</body>
</html>