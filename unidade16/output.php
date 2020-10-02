<?php
    //page tittle
    echo "<h3>Control Painel</h3";
    //include connection script to database
    include("connection.php");
    //navbar
    echo "<p><a href='output.php'>Control Painel</a> | <a href='password.php'>Change My Password</a></p>";

    //number records to be displayed per page
    $display = 3;
    //determine how many pages there are
    if (isset($_GET['p']) && is_numeric($_GET['p'])) {
        //alredy been determined
        $pages = $_GET['p'];

    }else {
        //need to be determined
        //count the number of records
        $q = "SELECT COUNT(id) FROM users";
        $r = mysqli_query($dbc, $q);
        $row = mysqli_fetch_array($r, MYSQLI_NUM);
        $records = $row[0];

        //calculate the number of pages
        if ($records > $display) {
            //more than one page
            $pages = ceil($records/$display);
        }else {
            $pages = 1;
        }
    }
    //determine where in the database to start returning results
    if (isset($_GET['s']) && is_numeric($_GET['s'])) {
        $start = $_GET['s'];
    }else {
        $start = 0;
    }
    //define query
    $q = "SELECT last_name, first_name, email, DATE_FORMAT(registration_date, '%M %d, %Y') AS dr, id FROM users ORDER BY registration_date ASC LIMIT $start, $display";
    //query select all fields from table users
    $r = mysqli_query($dbc, $q);
    //count the number of returned rows
    $num = mysqli_num_rows($r);
    
    //if any rows returned, display records
    if ($num > 0) {
        //inform how many users are registered
        echo "<p>There are $num registered users</p>";
        echo "<a href='login.php'><input type='button' value='Painel'></a>";

        //create table
        echo "<table align='center' border='1' cellspacing='3' cellpading='3' width='75%'>
        <tr>
            <td align='left'><b>Edit</b></td>
            <td align='left'><b>Delete</b></td>
            <td align='left'><b>Name</b></td>
            <td align='left'><b>Email</b></td>
            <td align='left'><b>Date Registered</b></td>
        </tr>";
        //use while loop to create an associative array with values date_registration, lastname, firstname and email
        while($row = mysqli_fetch_array($r)){
                //output values from associative array
                echo "<tr>
                        <td align='left'><a href='edit_user.php?user_id=".$row['id']."&fname=".$row['first_name']."&lname=".$row['last_name']."&lemail=".$row['email']."'><input type='button' value='Edit'></a></td>
                        <td align='left'><a href='delete.php?user_id=".$row['id']."&fname=".$row['first_name']."&lname=".$row['last_name']."'><input type='button' value='Delete'></a></td>
                        <td align='left'>{$row['last_name']}, {$row['first_name']}</td>
                        <td align='left'>{$row['email']}</td>
                        <td align='left'>{$row['dr']}</td>
                    </tr>";
        }
        echo "</table>";
    }else {
        echo "<p>There are currently no registered users!</p>";
    }

    //close mysql connection
    mysqli_close($dbc);
    
    //make links to other pages
    if ($pages > 1) {
        echo "<br><p><center>";
        //determined what page the script is
        $currenty_page = ($start/$display) + 1;
        //if not the first page create previous link
        if ($currenty_page != 1) {
            echo "<a href='output.php?s=". ($start - $display). '&p=' . $pages . "'>Previous </a>";
        }
        //make all the numbered pages
        for ($i=1; $i<=$pages ; $i++) { 
           if ($i != $currenty_page) {
               echo "<a href='output.php?s=". ($display * ($i - 1)) . '&p=' . $pages . "' style='text-decoration:none;'> $i </a>";
           }else {
               echo "$i";
           }
        }
        //if it's not the last page, make a next button
        if ($currenty_page != $pages) {
            echo "<a href='output.php?s=". ($start + $display) . '&p=' . $pages . "'> Next</a>";
        }
    }
    echo "</center>";
?>