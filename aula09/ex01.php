<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Numbers</h1>
    <section class="container">
        <?php
            $num1 = 3.66;
            $num2 = 31234124123;
            $result1 = round($num1);
            $result2 = number_format($num2);
            echo "$result1 <br>";
            echo "$result2 <br>";
        ?>
    </section>
</body>
</html>