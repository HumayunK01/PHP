<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet" />
    <title>Practical 4</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body style="font-family: 'Poppins'; margin: 70px; letter-spacing: .8px;">
    <?php
    echo "<h1>Humayun Khan, 2005690093</h1>";
    echo "<hr>";
    // Indexed Array
    $cars = array("Supra", "Skyline", "Mushtang");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ". <hr>";

    // Loop  through an Indexed Array
    $arrLength = count($cars);
    for ($x = 0; $x < $arrLength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
    echo "<hr>";

    // Associate Arrays
    $age = array("Humayun" => "19", "Tasmiya" => "19");
    echo "Humayun is " . $age["Humayun"] .
        " years and Tasmiya is also " . $age["Tasmiya"] . " years old. <hr>";

    // Loop through an Associate Array
    foreach ($age as $x => $x_value) {
        echo "Name: " . $x . ", Age: " . $x_value;
        echo "<br>";
    }
    echo "<hr>";

    // Multi-dimensional Array
    $cars = array(
        array("Supra", 22, 18),
        array("Skyline", 15, 13),
        array("Mushtang", 10, 12)
    );
    echo $cars[0][0] . ": Sold: " . $cars[0][1], ", In Stock: " . $cars[0][2] . ". <br>";
    echo $cars[1][0] . ": Sold: " . $cars[1][1], ", In Stock: " . $cars[1][2] . ". <br>";
    echo $cars[2][0] . ": Sold: " . $cars[2][1], ", In Stock: " . $cars[2][2] . ". <br>";
    echo "<hr>";

    // Loop through a Multi-dimensional Array
    $cars = array(
        array("Supra", 22, 18),
        array("Skyline", 15, 13),
        array("Mushtang", 10, 12)
    );

    for ($row = 0; $row < 3; $row++) {
        echo "<ul>";
        echo "<p><b>Row Number $row</b></p>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }
    echo "<hr>";
    ?>
</body>

</html>