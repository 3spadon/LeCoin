<?php $title = 'Le Coin | Théologie'; ?>
<?php ob_start(); ?>

<a href='index.php?action=viewTheologie'>Retour</a>
<div id='th_grid'>
    <div id='th_main'>
        <h1 class='titrePrincipal'>les Puissances</h1>
        <p>Les Puissances travaillent essentiellement à maintenir l'ordre divin et lutter contre les démons.</p>
        <p>Ces anges sont généralement représentés comme des soldats portant une armure et un casque, et dotés d'armes tant offensives que défensives — boucliers et lances, et chaînes rappelant leur fonction d'enchaîner les démons. Leurs attributs consistent dans l'aube, la baguette d'or, le sceau de Dieu et le sceptre, ce qui ne les différencie pas suffisamment ; 
            à Milan, leur poing fermé indique le combat et la victoire est exprimée par le démon qu'elles foulent aux pieds</p>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>