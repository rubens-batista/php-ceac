<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Titulo da aula</h1>

        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "myfirstdatabase";

            /// making the connection to mysql

            $dbc = mysqli_connect($hostname, $username, $password, $dbname) OR die("Could not connect to database, ERROR: ". mysqli_connect_error());
            
            // set encoding

            mysqli_set_charset($dbc, "utf8");

            echo "you are connected to {$dbname} Database";
        ?>
</body>
</html>