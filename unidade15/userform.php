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

        <form action="handle.php" method="post">
            <p>First Name: <input type="text" name="fname" size="20" maxlength="50"></p>
            <p>Last Name: <input type="text" name="lname" size="20" maxlength="50"></p>
            <p>Email: <input type="email" name="email" size="40" maxlength="50"></p>
            <p>Gender: 
                <input type="radio" name="gender" value="M"> Male
                <input type="radio" name="gender" value="F"> Female
            </p>
            <p>Age: <select name="age">
                <option value="0-29">Under 30</option>
                <option value="30-60">Between 30 and 60</option>
                <option value="60+">Over 60</option>
            </select></p>
            <p>Comments: <br><textarea name="comments" cols="40" rows="3" maxlength="200"></textarea></p>
            <p>Password: <input type="password" name="password" maxlength="50"></p>
            <p><input type="submit" value="Submit" name="submit"></p>
        </form>
</body>
</html>