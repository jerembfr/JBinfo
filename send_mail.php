<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "contact@jbinfo.eu";
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $subject = "Nouveau message de contact - JB Info";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=utf-8";

    $body = "Nom : $name\nEmail : $email\n\nMessage :\n$message";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: confirmation.html");
        exit();
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>

