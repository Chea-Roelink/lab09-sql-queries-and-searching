<?php
    require_once "settings.php";
    $dbconn = @mysqli_connect($host,$user,$pwd,$sql_db);
    if ($dbconn) {
        $query ="SELECT * FROM cars";
        $result = mysqli_query($dbconn,$query);
        if ($result) {
            echo"query to database is complete" . "<br>" . "<br>";
        } else {
            echo "There are no cars to display";
        }
    } else {
        echo ("Failed to connect to the database" . mysqli_connect_error());
    }
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>". $row["car_id"] ."</td>" . "<br>";
        echo "<td>". $row["MAKE"] ."</td>" . "<br>";
        echo "<td>". $row["model"] ."</td>" . "<br>";
        echo "<td>". $row["price"] ."</td>" . "<br>";
        echo "<td>". $row["yom"] ."</td>" . "<br>" . "<br>";
        echo "</tr>";
    }
    ?>