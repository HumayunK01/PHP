<?php
    function sanitize_my_email($field){
        $field = filter_var($field, FILTER_VALIDATE_EMAIL);
            if (filter_var($field, FILTER_VALIDATE_EMAIL)){
                return true;
            } else {
                return false;
            }
        }
    $to_email = "humayunk.pvt@gmail.com";
    $subject = "Testing PHP Mail";
    $message = "This mail is sent using PHP Mail";
    $headers = "From: testerzoro25@gmail.com";

    $secure_check = sanitize_my_email($to_email);
    if ($secure_check == false){
        echo "Invalid Input";
    } else {
        mail($to_email, $subject, $message, $headers);
        echo "This email is sent using PHP Mail";
    }
?>