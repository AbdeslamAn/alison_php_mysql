<?php 

    $to = "beispiel@email.com";
    $subject = "Willkommen bei unserem Newsletter!";

    // HTML-Inhalt der E-Mail
    $message = "
    <html>
    <head>
    <title>Willkommen!</title>
    </head>
    <body>
    <h1 style='color: darkblue;'>Hallo und herzlich willkommen!</h1>
    <p>Danke, dass Sie sich für unseren Newsletter angemeldet haben.</p>
    <p><strong>Wir freuen uns, Sie an Bord zu haben!</strong></p>
    </body>
    </html>
    ";

    // E-Mail-Header
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: DeineFirma <info@deinefirma.com>" . "\r\n";

    // E-Mail versenden
    if (mail($to, $subject, $message, $headers)) {
        echo "HTML-E-Mail wurde erfolgreich gesendet.";
    } else {
        echo "Fehler beim Senden der E-Mail.";
    }






?>