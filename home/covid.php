
<?php 

    $get_covid = curl_init();
    curl_setopt($get_covid, CURLOPT_URL,"https://www.hpb.health.gov.lk/api/get-current-statistical");
    curl_setopt($get_covid, CURLOPT_RETURNTRANSFER, 1);
    $covid_JSON = curl_exec($get_covid);
    curl_close($get_covid);
    $covid_OBJ = json_decode($covid_JSON);


    //echo ($wether_OBJ->weather[0]->main);
   
    //echo ($wether_OBJ->weather[0]->description);

 

   
    $lns =($covid_OBJ->data->local_new_cases);
    
     $ltc = ($covid_OBJ->data->local_total_cases);
     
     $ld =($covid_OBJ->data->local_deaths);
 
  

    ?>
    