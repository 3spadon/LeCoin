<?php
if($_GET['err'])
{
    $errorType = $_GET['err'];
    switch ($errorType) {
        case '1':
            // Mauvais identifiant ou mot de passe
            $error = "<b id='err'><i id='warningCircle' class='fas fa-exclamation-triangle'></i>Mauvais identifiant ou mot de passe.</b>";
            break;
        
        case '2':
            // Utilisateur non identifié
            $error = "<b id='err'><i id='warningCircle' class='fas fa-exclamation-triangle'></i>Vous devez être connecté pour accéder à cette page.</b>";
            break;

        default:
            break;
    }

}