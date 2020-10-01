<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include('connection.php');

        $getemail = mysqli_real_escape_string($dbc, trim($_POST['getemail']));

        mysqli_query($dbc, "DELETE FROM users WHERE email='$getemail'");

        echo "The user has been sucessfully deleted!";
    }else {
        echo "Please Login!";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Type the email of user to be deleted</h3>
    <form action="delete.php" method="post">
        <p>Email: <input type="email" name="getemail" size="40" maxlength="50"></p>
            <input type="submit" name="submit" value="Delete This User">
        </p>
    </form>
</body>
</html>