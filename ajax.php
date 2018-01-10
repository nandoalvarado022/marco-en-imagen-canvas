<?php 
    print_r($_POST);

    $fechaActual = date_timestamp_get(date_create());

    file_put_contents($fechaActual.'.png', base64_decode(str_replace('data:image/png;base64,', '', $_REQUEST['imgBase64'])));
    
    // $json = json_decode(file_get_contents("bd.json"), TRUE);
    // $json["nando"] = array("first" => "Nando", "last" =>"Alvarado");
    // file_put_contents("bd.json", json_encode($json));


?>