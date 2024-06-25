<?php 

    $get_weather = curl_init();
    curl_setopt($get_weather, CURLOPT_URL,"api.openweathermap.org/data/2.5/weather?q=Matale&appid=30ecb300a6d01c0e59a618e3e4b0ea3b");
    curl_setopt($get_weather, CURLOPT_RETURNTRANSFER, 1);
    $weather_JSON = curl_exec($get_weather);
    curl_close($get_weather);
    $weather_OBJ = json_decode($weather_JSON);



   
    $main = ($weather_OBJ->weather[0]->main);

    $des =($weather_OBJ->weather[0]->description);
    
    
   $icon= ($weather_OBJ->weather[0]->icon);
   $tem= ($weather_OBJ->main->temp);

   $hmt= ($weather_OBJ->main->humidity);

   


   $img = "<img src='../resourses/svg/wi-".$weather_OBJ->weather[0]->main."-".$weather_OBJ->weather[0]->description.".svg' width=200px>"
    

  
    ?>

  