<?php 
    $file = file_get_contents('services/vehiclesmenu.json', false);
    $json = json_decode($file, true);
    // var_dump($json[0]);
    $i = 0;
    $var = array($json[0]);
    // Array que envia datos mediante Ajax / AngularJS hacia el Frontend
    $category = "";
    $nameplate = []; 
    $array_angular = [];
    foreach ($var as $key => $value) {
        $category = $value['category'];
        $nameplate = $value['nameplates'];
        // echo "<br>";
        // print_r($value['nameplates'][0]["code"]);
    }
    $array_angular = json_encode(array("category" => $category, "body" => $nameplate));
    print_r($array_angular);
?>