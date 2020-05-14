<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>While Loop</h1>
    <section class="container">
        <?php
            $i = 1;
            while($i <= 10){
                echo "<p>$i. it work's</p>";
                $i++;
            }
        ?>
    </section>
</body>
</html>