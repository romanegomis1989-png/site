<?php
$destinataire = "romane.gomis1989@gmail.com";
$sujet = $POST['sujet'];
$message = $POST['message'];
$email = $POST['email'];
if (mail($destinataire, $sujet, $message)) {
    echo "Email envoyé avec succès";
} else {
    echo "Échec de l'envoi de l'email...";
}
