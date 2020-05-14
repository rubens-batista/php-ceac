<?php        
    $names = array("Rubens", "Batista", "Junior");

    foreach ($names as $value){ // Acessa todos dados dentro do array
        echo "The name is $value. <br>";
    };

    foreach ($names as $key => $value){ // Acessa dados e keys dentro do array
        echo $key. ". ". $value. "<br>";
    }
?>