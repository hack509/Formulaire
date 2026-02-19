<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sécurisation basique
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $number = htmlspecialchars($_POST["number"]);

    // Ton email ici
    $to = "clubcodinggonaives@gmail.com";

    $subject = "Nouvelle soumission du formulaire";

    $message = "
    Nom: $name
    Email: $email
    Âge: $number
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>✅ Message envoyé avec succès !</h2>";
    } else {
        echo "<h2>❌ Erreur lors de l'envoi.</h2>";
    }
}

?>