<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>

<body>
    <?php
    echo "<h4>PHP with MySQL</h4>";

    $con = mysqli_connect("localhost", "root", "", "learning", "3306");

    if (!$con) {
        die("Unable to connect to database! " . mysqli_error($con) . "<br>");
    } else {
        echo "Getting all users from database...<br><br>";

        $query = "SELECT * FROM users";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {

            $count = mysqli_num_rows($result);
            echo "<b>Total number of users from database: {$count}</b><br><br>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "ID: {$row['id']} <br>
                Username: {$row['username']} <br>
                Name: {$row['name']}<br><br>";
            }
        } else {
            echo "No data!";
        }

        echo "<br>Closing connection!";
        mysqli_close($con);
        echo "<br>Connection closed!";
    }
    ?> <br>
</body>

</html>