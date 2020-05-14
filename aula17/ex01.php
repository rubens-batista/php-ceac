<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Else if</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Else if</h1>
    <section class="container">
        <?php
            $num = 5;
            $num1 = 4;

            if($num == $num1){
                echo "variables are equal";
            }else if($num < $num1){
                echo "variable $num is less than variable $num1";
            }else{
                echo "none of the condition are true";
            }
        ?>
    </section>
</body>
</html>