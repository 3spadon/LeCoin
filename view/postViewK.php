<?php $title = 'Le Coin | Journal'; ?>
<?php ob_start(); ?>

<a href=<?="index.php?action=listPosts&key=".$_GET['key']?>><i id='lcarret' class="fas fa-caret-left"></i>Retour au journal</a>

<div id="billet">
    <div id="contenuBillet">
        <h3>
            <?= htmlspecialchars(decrypt($post['intitule'], $key)) ?>
            <em><i id="iconCalendar" class="fas fa-calendar-day"></i><?= $post['dateAjout'] ?></em>
        </h3>

        <p>
            <?= nl2br(htmlspecialchars(decrypt($post['extra'], $key))) ?><br>
            <?= nl2br(htmlspecialchars(decrypt($post['note'], $key))) ?>
        </p>
    </div>
    <a href=<?='index.php?action=deletePost&id='.$_GET['id']?>><i class="trashcan fas fa-trash-alt"></i>Supprimer</a>
    <div id='navBillets'>
        <a href=<?= "../index.php?action=post&id=" . $lastPost ?>><i id='leftArrow' class="fas fa-long-arrow-alt-left"></i>Billet précédent</a>
        <a id='billetSuivant' href=<?= "index.php?action=post&id=" . $nextPost ?>>Billet suivant<i id='rightArrow' class="fas fa-long-arrow-alt-right"></i></a>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>