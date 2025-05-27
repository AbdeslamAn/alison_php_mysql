<?php

    $to = "beispiel@example.com";
    $subject = "Einfacher Text";
    $message = "Hallo,\ndas ist eine einfache Text-E-Mail.";
    $headers = "From: deinname@deinedomain.com";

    mail($to, $subject, $message, $headers);




?>