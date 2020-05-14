<?php
    $names = array("Rubens", "Batista", "Junior");
    $cities = array("Miami", "Madrid", "Paris");

    $data = array("names" => $names, "cities" => $cities);

    $data2 = array("data" => $data);

    echo $data2["data"]["cities"][1];
?>