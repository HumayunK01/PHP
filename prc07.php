<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet" />
    <title>Practical 07</title>
</head>
<!-- Design a web page using following form controls: Text box, Radio button, Check box, Buttons. -->

<body style="font-family: 'Poppins';">
    <!-- Text box  -->
    <h3>Text Box</h3>
    <form action="welcome.php" method="get">
        <input type="text" name="user" />
        <input type="submit" value="Submit" />
    </form>

    <!-- Radio button -->
    <h3>Radio Buttons</h3>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>

    <!-- Check box -->
    <h3>CheckBoxes</h3>
    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <label for="vehicle1"> I have a bike</label><br>
    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
    <label for="vehicle2"> I have a car</label><br>
    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
    <label for="vehicle3"> I have a boat</label><br>

    <!-- Buttons -->
    <h3>Buttons</h3>
    <button>Button 1</button>
    <button>Button 2</button>
    <button>Button 3</button>
</body>

</html>