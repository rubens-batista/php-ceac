<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula04</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Escaping Characters</h1>
    <section class="container">
        <?php
            echo "Hello World! as a 'keyword'"; // '' aspas simples dentro de aspas duplas
            echo "<br>Hello World! as a \"keyword\""; // utiliza \ "" \ e pode digitar dentor de aspas duplas
            echo '<br> I\'m a web developer'; // se usar aspas simples como principal, utilize \ antes de ' aspas simples
        ?>
    </section>
</body>
</html>