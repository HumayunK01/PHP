<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 2 (If Else Statements)</title>
</head>

<body style="font-family: 'Poppins';">
    <?php
    echo "<h1>Practical No 2:</h1><hr>";
    
    $x = 11;
    if ($x > 2) {
        echo "$x is greater than 02 <br><hr>";
    }

    $number = 12;
    if ($number % 2 == 0) {
        echo "$number is Even Number <br><hr>";
    } else {
        echo "$number is Odd Number <br><hr>";
    }

    $var1 = "java";
    $var2 = "python";
    if ($var1 == $var2) {
        echo "Both the strings are equal <br><hr>";
    } else {
        echo "Both the strings are not equal <br><hr>";
    }

    $t = date("H");
    if ($t < "10") {
        echo "Have a good morning! <br><hr>";
    } else if ($t < "20") {
        echo "Have a good day! <br><hr>";
    } else {
        echo "Have a good night! <br><hr>";
    }

    $favcolor = "purple";

    switch ($favcolor) {
        case "red":
            echo "Your favourite color is Red!<hr>";
            break;
        case "blue":
            echo "Your favourite color is Blue!<hr>";
            break;
        case "green":
            echo "Your favourite color is Green!<hr>";
            break;
        default:
            echo "Your favourite color is neither red, blue nor green!<hr>";
    }
    ?>
</body>

</html>