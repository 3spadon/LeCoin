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
            <form method="POST" action="" id='form_Encryption'>
            <?php 
            // require('view/err_encryption.php');
            ?>
                <label for="key" id="lbl_key">Clé de chiffrement [#1]</label>
                <input type="text" id="inp_key" name='key' value="<?= $cleChiffrement['cle'] ?>" disabled>

                <label for="keyBis" id="lbl_keyBis">Clé de chiffrement [#2]</label>
                <input type="text" id="inp_keyBis" name='newPassword' value="<?= $cleChiffrement['cleBis'] ?>" disabled>

                <!-- <button action='submit' id='btn_submitKeys'>Valider</button> -->
            </form>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<!-- <<BODY>> -->

<script src=""></script>
<?php require('template.php'); ?>