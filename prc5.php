<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet" />
    <title>Practical 5</title>
</head>

<body style="font-family: 'Poppins';">
    <?php
    echo "<h1>Practical 05</h1><hr>";
    echo "<i>1.a) Write a PHP program to calculate length of string:</i><br>";
    $str = "Humayun Khan";
    echo "The length of the given string: <b>$str</b> is ", strlen($str), ".";
    echo "<br><br>";

    echo "<i>1.b) Write a PhP program to calculate count the numbers of words in string without using string function:</i><br>";
    $str = " This is a string count program ";
    $wordcount = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] != ' ') {
            $wordcount++;
            while ($str[$i] != ' ') {
                $i++;
            }
        }
    }
    echo "Total word count in the string: <b>$str</b> is", ' ', $wordcount, ".";
    echo "<br><hr>";

    echo "<i>2) Write a simple PHP program to demonstrate use of various built in string functions.</i><br>";
    echo "Using <b>strlower()</b>:<br>";
    $str = "My name is KHAN";
    $str = strtolower($str);
    echo $str;
    echo "<br><br>";

    echo "Using <b>strupper()</b>:<br>";
    $str = "My name is KHAN";
    $str = strtoupper($str);
    echo $str;
    echo "<br><br>";

    echo "Using <b>ucwords()</b>:<br>";
    $str = "my name is humayun Khan";
    $str = ucwords($str);
    echo $str;
    echo "<br><br>";

    echo "Using <b>strrev()</b>:<br>";
    $str = "My Name Is Humayun Khan";
    $str = strrev($str);
    echo $str;
    echo "<br><br>";

    echo "Using <b>strlen()</b>:<br>";
    $str = "My Name Is Humayun Khan";
    $str = strlen($str);
    echo $str;
    echo "<br><hr>";
    ?>
</body>

</html>