<form method="POST" action="" id='form_Encryption'>
            <?php 
            // require('view/err_encryption.php');
            ?>
            <?= $error ?>
                <label for="key" id="lbl_key">Clé de chiffrement [#1]</label>
                <input type="password" id="inp_key" name='key'>

                <label for="keyBis" id="lbl_keyBis">Clé de chiffrement [#2]</label>
                <input type="password" id="inp_keyBis" name='newPassword'>

                <button action='submit' id='btn_submitKeys'>Valider</button>
            </form>