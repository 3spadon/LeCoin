<?php $title = 'Le Coin | Théologie'; ?>
<?php ob_start(); ?>

<a href='index.php?action=viewTheologie'>Retour</a>
<div id='th_grid'>
    <div id='th_main'>
        <h1 class='titrePrincipal'>les Anges</h1>
        <p>Le mot ange vient du latin <em>angelus</em> emprunté au grec ancien ἄγγελος / ággelos signifiant « messager ».
        L'ange est présent dans de nombreuses traditions, on le trouve notamment dans les trois religions abrahamiques. 
        L'ange est un intermédiaire entre Dieu et les Hommes.</p>
        <p>Dans l'inconscient populaire les anges sont représentés par des bébés potelés avec des ailes. Nombre de personnes 
        ayant vécu une expérience aux frontières de la mort disent avoir rencontré leur ange gardien. </p>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>