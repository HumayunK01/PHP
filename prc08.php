<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet" />
    <title>Practical 08</title>
</head>

<body style="font-family: 'Poppins';">
    <!-- ------ Code for List Box ------ -->
    <form action="" method="post">
        <select name="foods[]" size="5">
            <option value="Tomatoes">Tomatoes</option>
            <option value="Cucumbers">Cucumbers</option>
            <option value="Celery">Celery</option>
            <option value="Radish">Radish</option>
            <option value="Onion">Onion</option>
        </select><br>
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
    $c = $_POST['foods'];
    if (isset($c)) {
        echo 'You have chosen ';
        foreach ($c as $key => $value) {
            echo $value;
        }
    } else {
        echo "You haven't selected any foods";
    }
    ?>

    <!-- ------ Code for Combo Box ------ -->
    <form action="" method="post">
        <select name="foods2[]">
            <option value="Mango">Mango</option>
            <option value="Banana">Banana</option>
            <option value="Watermelon">Watermelon</option>
            <option value="Grapes">Grapes</option>
        </select><br>
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
    $c = $_POST['foods2'];
    if (isset($c)) {
        echo 'You have chosen ';
        foreach ($c as $key => $value) {
            echo $value;
        }
    } else {
        echo "You haven't selected any fruit";
    }
    ?>

    <!-- ------ Code for Hidden Field Box ------ -->
    <form action="Prac_8_1.php">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <input type="hidden" id="custId" name="custId" value="3487">
        <input type="submit" value="Submit">
    </form>

</body>

</html>