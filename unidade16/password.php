<?php
    //Check if user submitted form    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Connect to database
        include("connection.php");
        //Create an array for errors
        $errors = array();

        //Check for email address
        if (empty($_POST['email'])) {
            $errors[] = 'You forgout to enter your email!';
        }else {
            $e = mysqli_real_escape_string($dbc, trim($_POST['email']));
        }
        //Check for current password
        if (empty($_POST['pass'])) {
            $errors[] = 'You forgout to enter your current password!';
        }else {
            $p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
        }
        //Check for a new password and compare it with confirmed password
        if (!empty($_POST['pass1'])) {
            if ($_POST['pass1'] != $_POST['pass2']) {
                $errors[] = 'You new password does not match the confirmed password!';
            }else {
                $np = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
            } 
        }else {
            $errors[] = 'You forgout to enter your new password!';
        }
        //if there is no errors
        if (empty($errors)) {
            //check that the user entered the right email/password combination
            $q = "SELECT id FROM users WHERE (email='$e' AND password='$p')";
            $r = mysqli_query($dbc, $q);
            $num = mysqli_num_rows($r);
            //Get user id
            if ($num == 1) {
                $row = mysqli_fetch_array($r, MYSQLI_NUM);
                //Make the update query
                $q = "UPDATE users SET password='$np' WHERE id='$row[0]'";
                $r = mysqli_query($dbc, $q);

                //If everything was ok
                if (mysqli_affected_rows($dbc) == 1) {
                    //ok msg confirmation
                    echo "Thanks! You have update your password!";
                }else {
                    echo "Your password could not be changed due to a system error";
                }
                //Close connection to db
                mysqli_close($dbc);
            }else {
                echo "The email and password do not match our records!";
            }
        }else {
            echo "Error! The following error(s) occured:<br>";
            foreach ($errors as $msg) {
                echo "$msg <br>";
            }
        }
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
    <h1>Change Password</h1>
    <form action="password.php" method="post">
        <p>Email: <input type="email" name="email" size="40" maxlength="50" value="<?php if (isset($_POST['email'])) {echo $_POST['email'];}?>"></p>
        <p>Current Password: <input type="password" name="pass" maxlength="50" value="<?php if (isset($_POST['pass'])) {echo $_POST['pass'];}?>"></p>
        <p>New Password: <input type="password" name="pass1" maxlength="50" value="<?php if (isset($_POST['pass1'])) {echo $_POST['pass1'];}?>"></p>
        <p>Confirm New Password: <input type="password" name="pass2" maxlength="50" value="<?php if (isset($_POST['pass2'])) {echo $_POST['pass2'];}?>"></p>
        <p>
            <input type="submit" name="submit" value="Change Password">
            <a href="output.php"><input type="button" name="submit" value="Back"></a>
        </p>
    </form>
</body>
</html>