<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Scope</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Variable Scope</h1>
    <section class="container">
        <?php
            $name = "Rubens";
            function my_car(){
                $name = "Mercedes<br>";
                echo $name;
            }

            my_car();

            echo $name;
        ?>
    </section>
</body>
</html>