<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3</title>
</head>

<body style="font-family: cursive">
    <?php
    echo "Humayun Khan, 2005390093 <br>";
    // While Loop Statements
    $x = 1;
    while ($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }

    // Do While Loop Statements
    $y = 1;
    do {
        echo "The number is $x <br>";
        $y++;
    } while ($y <= 5);

    // For Loop Statements
    for ($w = 0; $w <= 10; $w++) {
        echo "The number is: $w <br>";
    }

    $colors = array('red', 'green', 'blue', 'yellow');
    foreach ($colors as $value) {
        echo "$value <br>";
    }

    //Increments stars
    for ($i = 0; $i <= 5; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";

    //Decrement Stars 
    for ($i = 0; $i <= 5; $i++) {
        for ($j = 5 - $i; $j >= 0; $j--) {
            echo "*";
        }
        echo "<br>";
    }
    ?>
</body>

</html>