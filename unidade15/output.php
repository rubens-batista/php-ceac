        <?php
            include("connection.php");

            $r = mysqli_query($dbc, "SELECT * FROM users");

            echo "<p><a href='orderbyname.php'>Order by Name</a></p>";

            echo "<table align='center' border='1' cellspacing='3' cellpading='3' width='75%'>
            <tr>
                <td align='left'><b>Name</b></td><td align='left'><b>Email</b></td>
            </tr>";

            while($row = mysqli_fetch_array($r)){
                    echo "<tr><td align='left'>{$row['last_name']}, {$row['first_name']}</td><td align='left'>{$row['email']}</td></tr>";
            }
        ?>