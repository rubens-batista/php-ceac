<?php
  include("connection.php");
  
  //Grab values email and password from login form
  $login_email = mysqli_real_escape_string($dbc, trim($_POST['login_email']));
  $login_password = mysqli_real_escape_string($dbc, trim($_POST['login_password']));
  //Create the query and number of rows returned from the query
  $query = mysqli_query($dbc, "SELECT * FROM users WHERE email='$login_email'");
  $numrows = mysqli_num_rows($query);

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Create conditions to check if there is 1 row with that email
        if ($numrows != 0) {
            //Grab the email and password from that row returned before
            while ($row = mysqli_fetch_array($query)) {
                $dbemail = $row['email'];
                $dbpass = $row['password'];
                $dbfirstname = $row['first_name'];
            }
            //Create condition to check if email and password are equal to the returned row
            if ($login_email == $dbemail) {
                if ($login_password == $dbpass) {
                    echo "Welcome $dbfirstname You are in";
                }else {
                    echo "Your password is incorrect!";
                }
            }else {
                echo "Your email is incorrect!";
            }
        }else {
            echo "Your are not registered. Please register bellow";
            echo "<p></p>";
        }
    }else {
        echo "Please Login...";
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