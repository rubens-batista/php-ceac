<?php
    //check if user submitted form
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //connect to database
        include('connection.php');

        //get input email value from form
        $id_user = mysqli_real_escape_string($dbc, trim($_POST['user_id']));
        //delete user where id = $id_user
        mysqli_query($dbc, "DELETE FROM users WHERE id='$id_user'");

        echo "The user has been sucessfully deleted!";
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
    <h3>Are you sure you want to delete this user?</h3>
    <form action="delete.php" method="post">
        <p>User ID: <input type="text" name="user_id" value="<?php echo $_GET['user_id'];?>"></p>
        <p>First Name: <input type="text" name="first_name" value="<?php echo $_GET['fname'];?>"></p>
        <p>Last Name: <input type="text" name="last_name" value="<?php echo $_GET['lname'];?>"></p>
            <input type="submit" name="submit" value="Yes">
            <a href="output.php"><input type="button" value="No"></a>
        </p>
    </form>
</body>
</html>