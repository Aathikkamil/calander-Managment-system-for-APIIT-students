
<?php

$get_holliday = curl_init();
    curl_setopt($get_holliday, CURLOPT_URL,"http://veenph.api.ones.lk/engine/api.php?day=2021-01-14&hashID=70c237693d072562e1ffad0f781b45c5");
    curl_setopt($get_holliday, CURLOPT_RETURNTRANSFER, 1);
    $holliday_JSON = curl_exec($get_holliday);
    curl_close($get_holliday);
    $holliday_OBJ = json_decode($holliday_JSON);



    $item = ($holliday_OBJ->output->data->name);
    $type = ($holliday_OBJ->output->data->type);





?>



<?php

$get_day = curl_init();
    curl_setopt($get_day, CURLOPT_URL,"http://veenph.api.ones.lk/engine/api.php?day=2021-01-28&hashID=70c237693d072562e1ffad0f781b45c5");
    curl_setopt($get_day, CURLOPT_RETURNTRANSFER, 1);
    $day_JSON = curl_exec($get_day);
    curl_close($get_day);
    $day_OBJ = json_decode($day_JSON);



    $ss = ($day_OBJ->output->data->name);
    $aaa = ($day_OBJ->output->data->type);





?>