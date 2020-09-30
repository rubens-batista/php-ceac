<?php
    // processing form


    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $comments = $_POST['comments'];
        $password = $_POST['password'];

        if (!empty($fname) && !empty($lname) && !empty($email) && !empty($gender) && !empty($age) && !empty($comments) && !empty ($password)){
            include('connection.php');

            mysqli_query($dbc, "INSERT INTO users(first_name, last_name, email, gender, age, comments, password) VALUES('$fname', '$lname', '$email', '$gender', '$age', '$comments', '$password')");

            $registered = mysqli_affected_rows($dbc);

            echo "$registered row is affected, everything worked fine!";

        }else {
            echo "ERROR: Please fill all fields";
        }
    }else {
        echo "<h3>Please complete the form!</h3>";
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
        <form action="userform.php" method="post">
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

        <p><a href="output.php">Check all current records from database</a></p>
</body>
</html>