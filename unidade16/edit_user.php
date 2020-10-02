<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include('connection.php');

        $idnow = $_POST['userid'];
        $demail = $_POST['xemail'];
        $ffname = $_POST['firstname'];
        $llname = $_POST['lastname'];

        $q = "UPDATE users set first_name='$ffname', last_name='$llname', email='$demail' WHERE id='$idnow'";

        $r = mysqli_query($dbc, $q);

        if (mysqli_affected_rows($dbc) == 1) {
            echo "The user info has been changed succesfully!";
        }else {
            echo "Error! Something went wrong.";
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
    <h1>Edit User</h1>
    <form action="edit_user.php" method="post">
        <p><input type="hidden" name="userid" size="20" maxlength="50" value="<?php echo $_GET['user_id'];?>"></p>
        <p>First Name: <input type="text" name="firstname" size="20" maxlength="50" value="<?php echo $_GET['fname'];?>"></p>
        <p>Last Name: <input type="text" name="lastname" size="20" maxlength="50" value="<?php echo $_GET['lname'];?>"></p>
        <p>Email: <input type="email" name="xemail" size="20" maxlength="50" value="<?php echo $_GET['lemail'];?>"></p>
            <input type="submit" name="submit" value="Save Changes">
            <a href="output.php"><input type="button" value="Back"></a>
        </p>
    </form>
</body>
</html>