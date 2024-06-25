
<?php

$get_holliday = curl_init();
    curl_setopt($get_holliday, CURLOPT_URL,"http://veenph.api.ones.lk/engine/api.php?day=2021-04-02&hashID=70c237693d072562e1ffad0f781b45c5");
    curl_setopt($get_holliday, CURLOPT_RETURNTRANSFER, 1);
    $holliday_JSON = curl_exec($get_holliday);
    curl_close($get_holliday);
    $holliday_OBJ = json_decode($holliday_JSON);
    $item = ($holliday_OBJ->output->data->name);
    $type = ($holliday_OBJ->output->data->type);
?>


<?php

$get_holliday1 = curl_init();
    curl_setopt($get_holliday1, CURLOPT_URL,"http://veenph.api.ones.lk/engine/api.php?day=2021-04-13&hashID=70c237693d072562e1ffad0f781b45c5");
    curl_setopt($get_holliday1, CURLOPT_RETURNTRANSFER, 1);
    $holliday1_JSON = curl_exec($get_holliday1);
    curl_close($get_holliday1);
    $holliday1_OBJ = json_decode($holliday1_JSON);
    $item1 = ($holliday1_OBJ->output->data->name);
    $type = ($holliday1_OBJ->output->data->type);
?>
<?php

$get_holliday2 = curl_init();
    curl_setopt($get_holliday2, CURLOPT_URL,"http://veenph.api.ones.lk/engine/api.php?day=2021-04-26&hashID=70c237693d072562e1ffad0f781b45c5");
    curl_setopt($get_holliday2, CURLOPT_RETURNTRANSFER, 1);
    $holliday2_JSON = curl_exec($get_holliday2);
    curl_close($get_holliday2);
    $holliday2_OBJ = json_decode($holliday2_JSON);
    $item3 = ($holliday2_OBJ->output->data->name);
    $type3= ($holliday2_OBJ->output->data->type);
?>