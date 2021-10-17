<?php $title = 'Le Coin | Compte'; ?>

<!-- BODY -->
<?php ob_start(); session_start();?>
<div id="main">
    <div id="sectionTitle">
        <h1><i class="fas fa-user-cog icon"></i>Gérer mon compte utilisateur</h1>
    </div>
    <div id='nav_account'>
        <a href='account.php?action=view'><button class="custom-btn btnFx active">Informations</button></a>
        <a href='account.php?action=changePassword'><button class="custom-btn btnFx">Mot de passe</button></a>
        <a href='account.php?action=Chiffrement'><button class="custom-btn btnFx">Chiffrement</button></a>
    </div>
    <div id="main_content">
        <div id="usernameTitle">
            <img id="userCircleIcon" src='img/user.png' alt='user_circle_icon'><h2 id="username"><?=$_SESSION['auth']['username']?></h2>
        </div>
        <div id="boxContent">
            <p id="lastConnection">Dernière connexion:</p>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<!-- <<BODY>> -->

<script src=""></script>
<?php require('template.php'); ?>