<?php $title = 'Le Coin | Théologie'; ?>
<?php ob_start(); ?>

<a href='index.php?action=viewTheologie'>Retour</a>
<div id='th_grid'>
    <div id='th_main'>
        <h1 class='titrePrincipal'>les Dominations</h1>
        <p>Les vertus sont "une force héroïque et inébranlable". Souvent représentés un livre à la main dans la religion chrétienne.</p>
        <p>Ces anges sont ceux qui accomplissent les signes et miracles dans le monde</p>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>