





<?php 

    $get_currency = curl_init();
    curl_setopt($get_currency, CURLOPT_URL,"https://v6.exchangerate-api.com/v6/e3c1a633b50532e11615b2f2/latest/GBP");
    curl_setopt($get_currency, CURLOPT_RETURNTRANSFER, 1);
    $currency_JSON = curl_exec($get_currency);
    curl_close($get_currency);
    $currency_OBJ = json_decode($currency_JSON);



 

   
    $lkr1 =($currency_OBJ->conversion_rates->LKR);
    
     $gbp = ($currency_OBJ->conversion_rates->GBP);
     
     
  
    
     
     
    ?>
    
 





    