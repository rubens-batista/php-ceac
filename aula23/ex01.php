<?php
    #Obtendo os valores
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $gender = $_REQUEST["gender"];
    $age = $_REQUEST["age"];
    $comments = $_REQUEST["comments"];
    
    echo "<br>Name: $name";
    echo "<br>Email: $email";
    echo "<br>Gender: $gender";
    echo "<br>Age: $age";
    echo "<br>Comments: $comments";

?>

<p><a href="ex01.html">Voltar</a></p>