<?php
    require('controller.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <link href="css/loginPage.css" rel="stylesheet">
    <link href="css/fawesome.css" rel="stylesheet" />
    <div id="main">
        <a href="index.php" id="lienRetourAccueil"><i id="icon_arrow" class="fas fa-arrow-alt-circle-left"></i>Retour à l'accueil</a>
        <div id="boxLogin">
            <form action="index.php?action=login" method="post" id="formLogin">
                <h1 id="titre">{Le Coin}.</h1>
                <label for="inp_username" id="lbl_username">Nom d'utilisateur</label>
                <input type="text" class="" name="username" id="inp_username">
                <label for="inp_password" id="lbl_password">Mot de passe</label>
                <input type="password" class="" name="password" id="inp_password">
                <button type="submit" id="btn_submitLogin">Connexion</button>
                <?php require('view/err_login.php');?>
                <?= $error ?>
            </form>
            
        </div>
    </div>
</head>
</html>