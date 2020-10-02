<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Please login to enter WebProject1</h3>
        <form action="login.php" method="post">
            <p>Email: <input type="email" name="login_email" size="40" maxlength="50"></p>
            <p>Password: <input type="password" name="login_password" maxlength="50"></p>
            <p>
                <input type="submit" value="Login">
                <a href="userform.php"><input type="button" value="Register"></a>
            </p>
        </form>
</body>
</html>