<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet" />
    <title>Practical 10</title>
</head>
<!-- Cookies are stored in browser as text -->
<!-- Sessions are stored in server side -->

<body style="font-family: 'Poppins'; font-size: 1.5rem;">
    <?php
    /* --------- COOKIES CODE --------- */
    $cookie_name = "Human";
    $cookie_value = "Being";
    setcookie($cookie_name, $cookie_value, time() + (24 * 60 * 60), "/"); //i.e 86400*30 = 1 Day
    
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie Name '" . $cookie_name . "' is not set!"; // isset($_COOKIE[Name of cookie])
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
    }

    // Set the expiration date to one hour ago
    setcookie("Human", "", time() - 3600); // 3600 = 1 Hour
    
    echo "Cookie 'Human' is deleted.<br>";

    /* --------- SESSION CODE --------- */
    session_start();
    if (isset($_SESSION['page_count'])) {
        $_SESSION['page_count'] += 1;
    } else {
        $_SESSION['page_count'] = 1;
    }
    echo "You're visitor number " . $_SESSION['page_count'];

    session_destroy();
    echo "<br> All visitors sessions are now destroyed, and the previous sessions are cleared."
    ?>
</body>

</html>