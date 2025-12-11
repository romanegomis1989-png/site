<?php
$destinataire = "romane.gomis1989@gmail.com";
$sujet = $POST['sujet'];
$message = "message de " . $POST['nom'] . " (" . $POST['email'] . ") : " . $POST['message'];
//$email = $POST['email'];
//$nom = $POST['nom'];
if (mail($destinataire, $sujet, $message)) {
    echo "Email envoyé avec succès";
} else {
    echo "Échec de l'envoi de l'email...";
}
