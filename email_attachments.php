<?php

    
        $to = "example@email.com"; // Empfänger der E-Mail / Recipient's email address
        $subject = "E-Mail mit Anhang"; // Betreff / Subject
        $message = "Bitte finden Sie den Anhang in dieser E-Mail."; // Nachricht / Message content
        $from = "info@deinefirma.com"; // Absender / Sender

        // === Datei vorbereiten / Prepare the file ===
        $file = "beispiel.pdf"; // Dateiname auf dem Server / File on the server
        $filename = "Angebot.pdf"; // Name beim Empfänger / Filename shown to recipient
        $filetype = mime_content_type($file); // Dateityp ermitteln / Get MIME type
        $filesize = filesize($file); // Dateigröße ermitteln / Get file size

        // Datei einlesen und Base64 kodieren / Read and encode the file in base64
        $filedata = file_get_contents($file); // Dateiinhalt lesen / Read file content
        $base64file = chunk_split(base64_encode($filedata)); // In base64 umwandeln und aufteilen / Encode + split for email

        // === MIME-Grenze (Trenner zwischen E-Mail-Teilen) / MIME boundary ===
        $boundary = md5(time()); // Einzigartige Grenze erstellen / Create unique boundary

        // === E-Mail-Header vorbereiten / Set up email headers ===
        $headers  = "From: DeineFirma <$from>\r\n"; // Von wem / From
        $headers .= "MIME-Version: 1.0\r\n"; // MIME-Version
        $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n"; // Mehrteiliger Inhalt / Multipart type

        // === Nachrichtentext (Textteil der E-Mail) / Text part of the email ===
        $body  = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=\"utf-8\"\r\n"; // Klartext-Teil / Plain text part
        $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $body .= "$message\r\n\r\n";

        // === Anhang hinzufügen / Add the attachment ===
        $body .= "--$boundary\r\n";
        $body .= "Content-Type: $filetype; name=\"$filename\"\r\n"; // Typ und Name / MIME type and name
        $body .= "Content-Disposition: attachment; filename=\"$filename\"\r\n"; // Als Anhang kennzeichnen / Mark as attachment
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= "$base64file\r\n"; // Die kodierte Datei / Encoded file
        $body .= "--$boundary--"; // Ende der E-Mail / End of message

        // === E-Mail senden / Send the email ===
        if (mail($to, $subject, $body, $headers)) {
            echo "✅ E-Mail mit Anhang wurde erfolgreich gesendet."; // Erfolgreich / Success
        } else {
            echo "❌ Fehler beim Senden der E-Mail."; // Fehler / Error
        }




?>