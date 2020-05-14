<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Switch</h1>
    <section class="container">
        <?php
            $name = "Rubens";
            switch($name){
                case "Rubens":
                    echo "Welcome Rubens!";
                break;

                case "Batista":
                    echo "Welcome Batista!";
                break;

                default:
                    echo "You are not a member!";
            }
        ?>
    </section>
</body>
</html>