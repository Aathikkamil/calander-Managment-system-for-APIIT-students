<?php

$get_holliday = curl_init();
    curl_setopt($get_holliday, CURLOPT_URL,"http://veenph.api.ones.lk/engine/api.php?day=2021-05-01&hashID=70c237693d072562e1ffad0f781b45c5");
    curl_setopt($get_holliday, CURLOPT_RETURNTRANSFER, 1);
    $holliday_JSON = curl_exec($get_holliday);
    curl_close($get_holliday);
    $holliday_OBJ = json_decode($holliday_JSON);
    $item = ($holliday_OBJ->output->data->name);
    $type = ($holliday_OBJ->output->data->type);
?>
<?php

$get_holliday1 = curl_init();
    curl_setopt($get_holliday1, CURLOPT_URL,"http://veenph.api.ones.lk/engine/api.php?day=2021-05-13&hashID=70c237693d072562e1ffad0f781b45c5");
    curl_setopt($get_holliday1, CURLOPT_RETURNTRANSFER, 1);
    $holliday1_JSON = curl_exec($get_holliday1);
    curl_close($get_holliday1);
    $holliday1_OBJ = json_decode($holliday1_JSON);
    $item1 = ($holliday1_OBJ->output->data->name);
    $type1 = ($holliday1_OBJ->output->data->type);
?>
<?php

$get_holliday2 = curl_init();
    curl_setopt($get_holliday2, CURLOPT_URL,"http://veenph.api.ones.lk/engine/api.php?day=2021-05-26&hashID=70c237693d072562e1ffad0f781b45c5");
    curl_setopt($get_holliday2, CURLOPT_RETURNTRANSFER, 1);
    $holliday2_JSON = curl_exec($get_holliday2);
    curl_close($get_holliday2);
    $holliday2_OBJ = json_decode($holliday2_JSON);
    $item2 = ($holliday2_OBJ->output->data->name);
    $type2 = ($holliday2_OBJ->output->data->type);
?>
<?php

$get_holliday3 = curl_init();
    curl_setopt($get_holliday3, CURLOPT_URL,"http://veenph.api.ones.lk/engine/api.php?day=2021-05-27&hashID=70c237693d072562e1ffad0f781b45c5");
    curl_setopt($get_holliday3, CURLOPT_RETURNTRANSFER, 1);
    $holliday3_JSON = curl_exec($get_holliday3);
    curl_close($get_holliday3);
    $holliday3_OBJ = json_decode($holliday3_JSON);
    $item3 = ($holliday3_OBJ->output->data->name);
    $type3 = ($holliday3_OBJ->output->data->type);
?>