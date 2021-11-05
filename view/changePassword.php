<?php $title = 'Le Coin | Compte'; ?>

<!-- BODY -->
<?php ob_start(); session_start();?>
<div id="main">
    <div id="sectionTitle">
        <h1><i class="fas fa-user-cog icon"></i>Gérer mon compte utilisateur</h1>
    </div>
    <div id='nav_account'>
        <a href='account.php?action=view'><button class="custom-btn active">Informations</button></a>
        <a href='account.php?action=changePassword'><button class="custom-btn">Identification</button></a>
        <a href='account.php?action=Chiffrement'><button class="custom-btn">Chiffrement</button></a>
    </div>
    <div id="main_content">
        <div id="usernameTitle">
            <img id="userCircleIcon" src='img/user.png' alt='user_circle_icon'><h2 id="username"><?=$_SESSION['auth']['username']?></h2>
        </div>
        <div id="boxContent">
        <form method="POST" action="" id='form_ChangePassword'>
            <?php require('view/err_changePassword.php');?>
            <?= $error ?>
                <label for="currentPassword" id="lbl_currentPassword">Mot de passe actuel</label>
                <input type="password" id="inp_currentPassword" name='currentPassword'>

                <label for="newPassword" id="lbl_newPassword">Nouveau mot de passe</label>
                <input type="password" id="inp_newPassword" name='newPassword'>

                <label for="newPasswordBis" id="lbl_newPasswordBis">Répéter mot de passe</label>
                <input type="password" id="inp_newPasswordBis" name='newPasswordBis'>

                <button action='submit' id='btn_submitChangePassword'>Valider</button>
            </form>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<!-- <<BODY>> -->

<script src=""></script>
<?php require('template.php'); ?>