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
    $st1 = "Programming is fun </br>";
    echo $st1;
    echo "Upper: " . strtoupper($st1);
    echo "Lower: " . strtolower($st1);
    echo "Search: " . strstr($st1, "fun");

    echo "Trim: " . trim($st1, "Pif");
    echo "Length: " . strlen($st1);
    echo "Uppercase first char: " . ucfirst($st1);
    ?>
</body>

</html>