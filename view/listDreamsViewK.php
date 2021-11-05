<?php $title = 'Le Coin | Journal'; ?>

<!-- BODY -->
<?php ob_start(); ?>
<div id="main_header">
    <h2><i id="iconJournal" class="far fa-newspaper"></i>Liste des rêves</h2>
    <form action="index.php?action=listDreams">
        <input id="inpK" type="text" name="key" hidden>
        <button id="btnK" type="submit" hidden><i class="fas fa-key"></i></button>
    </form>
    <a id="lienAjouterEntree" href="index.php?action=newDream">
        <h2><i id="iconPencil" class="fas fa-pencil-alt"></i>Ajouter un rêve</h2>
    </a>
</div>
<script src="js/formk.js"></script>
<?php
while ($data = $posts->fetch()) {
?>
    <div class="trends">
        <h3>
            <em>[<?= $data['date'] ?>]</em>
            <a href='<?= 'index.php?action=dream&id=' . htmlspecialchars($data['id']).'&key='.htmlspecialchars($key)?>'>
                <?= htmlspecialchars(decrypt($data['intitule'],$key)) ?>
            </a>
        </h3>


    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>
<!-- <<BODY>> -->

<?php require('template.php'); ?>