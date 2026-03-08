<?php

    $name = "Suchak";  //  string
    $age = 22;  //  integer

    // constant
    define('NAME', "Ahanf Tajwar Suchak");
    define("PI", 3.1415);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Variables and Constants</title>
</head>
<body>
    <h2><?php echo "Hello World"; ?></h2>
    <p>Hello <?php echo $name ?></p>
    <p>Age <?php echo $age+4 ?></p>

    <h3>Constants</h3>
    <p><?php echo "Constant name: " .NAME ?></p>
    <p><?php echo "Constant PI: " .PI ?></p>
</body>
</html>