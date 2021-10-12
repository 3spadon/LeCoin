<?php $title = 'Le Coin | Journal'; ?>

<?php ob_start(); ?>
<div id="grid_confirmDeletePost">
    <div class="panel">
        <h3 id='txt_confirmDelete'>Confirmer la suppression de l'entrée #<?=$id?> ?</h3>
            <form action='deletePost.php' id='btns_confirm' method='post'>
                <input type='text' name="id" value='<?=$id?>' hidden>
                <button type='submit'><h3>Confirmer</h3></button>
                <button id='btn_annuler' type="reset" formaction=<?='index.php?action=post&id='.$id?>><h3>Annuler</h3></button>
            <form>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>