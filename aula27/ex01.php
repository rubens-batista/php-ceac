<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Functions</h1>
    <section class="container">
        <?php
            function my_car($first, $second){
                echo "My First car is a $first and my Second car was a $second";
            }

            my_car("Dodge", "Mercedes");
        ?>
    </section>
</body>
</html>