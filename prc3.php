<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3</title>
</head>

<body style="font-family: 'Poppins';">
    <?php
    echo "<h1>Practical No 3:</h1><hr>";

    $x = 1;
    while ($x <= 5) {
        echo "The number is: $x<br>";
        $x++;
    }
    echo "<hr>";

    $y = 1;
    do {
        echo "The number is $x<br>";
        $y++;
    } while ($y <= 5);
    echo "<hr>";

    for ($w = 0; $w <= 10; $w++) {
        echo "The number is: $w <br>";
    }
    echo "<hr>";

    $colors = array('Red', 'Green', 'Blue', 'Yellow');
    foreach ($colors as $value) {
        echo "$value <br>";
    }
    echo "<hr>";

    for ($i = 0; $i <= 5; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
 
    for ($i = 0; $i <= 5; $i++) {
        for ($j = 5 - $i; $j >= 0; $j--) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    ?>
</body>

</html>