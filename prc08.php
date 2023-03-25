<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 08</title>
</head>

<body>
    <?php
    $toy_cars = array("Pull Back Cars", "Remote Cars", "Electric Cars", "Toy Race Cars", "Lightening Cars");
    $array_length = count($toy_cars);
    ?>
    <select name="dynamic_data">
        <?php
        for ($i = 0; $i < $array_length; $i++) {
            ?>
            <option value="<?= $toy_cars[$i]; ?>"><?= $toy_cars[$i]; ?></option>
            <?php
        }
        ?>
    </select>
</body>

</html>