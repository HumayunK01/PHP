<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 2 (If Else Statements)</title>
</head>

<body style="font-family: cursive;">
    <?php
    echo "Humayun Khan, 2005690093 <br>";
    $x = 11;
    if ($x > 2) {
        echo "$x is greater than 02 <br>";
    }

    $number = 12;
    if ($number % 2 == 0) {
        echo "$number is Even Number <br>";
    } else {
        echo "$number is Odd Number <br>";
    }

    $var1 = "java";
    $var2 = "python";
    if ($var1 == $var2) {
        echo "Both the strings are equal <br>";
    } else {
        echo "Both the strings are not equal <br>";
    }

    $t = date("H");
    if ($t < "10") {
        echo "Have a good morning! <br>";
    } else if ($t < "20") {
        echo "Have a good day! <br>";
    } else {
        echo "Have a good night! <br>";
    }

    $favcolor = "purple";

    switch ($favcolor) {
        case "red":
            echo "Your favourite color is Red!";
            break;
        case "blue":
            echo "Your favourite color is Blue!";
            break;
        case "green":
            echo "Your favourite color is Green!";
            break;
        default:
            echo "Your favourite color is neither red, blue nor green!";
    }
    ?>
</body>

</html>