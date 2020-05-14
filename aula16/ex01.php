<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>If Else</h1>
    <section class="container">
        <?php
            $name = "Rubens";
            $last = "";
            if($name || $last){
                echo "the condition is true!";
            }else{
                echo "the condition is not true!";
            }
        ?>
    </section>
</body>
</html>