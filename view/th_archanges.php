<?php $title = 'Le Coin | Théologie'; ?>
<?php ob_start(); ?>

<a href='index.php?action=viewTheologie'>Retour</a>
<div id='th_grid'>
    <div id='th_main'>
        <h1 class='titrePrincipal'>les Archanges</h1>
        <p>Les archanges sont présents dans les trois religions monothéistes. 
            Ils se situent au niveau supérieur de celui des anges dans la hiérarchie céleste. Ils constituent le neuvième coeur des anges</p>
        <figure>
            <img id='img_archanges' src='img/archanges.jpeg' alt='Les Trois Archanges avec Tobie par Filippino Lippi, vers 1485.'>
            <figcaption>Les Trois Archanges avec Tobie par Filippino Lippi, vers 1485.</figcaption>
        </figure>
        <p>Dans la tradition chrétienne, quatres archanges sont connus par leur nom:</p>
        <ul>
            <li><b>Michel</b> Prince de la milice céleste. Il est cité dans la bible hébraïque ainsi que dans le Coran.</li> 
            <li><b>Raphaël</b> Protecteur des voyageurs.</li>
            <li><b>Gabriel</b> Messager céleste. Présent dans le judaïsme, le christianisme et l'Islam sous le nom de Djibril. est préposé au paradis, aux dragons et aux chérubins.</li>
            <li><b>Uriel</b> qui est préposé au monde et au tartare.</li>
        </ul>
        <p>Le livre d'Enoch cite les archanges, on y découvre le nom des 3 autres archanges se tenant devant le trône de Dieu</p>
        <ul>
            <li><b>Ragouël</b> châtie le monde des luminaires.</li> 
            <li><b>Sariel (ou Saraquiel)</b> est préposé aux esprits qui pèchent contre l'esprit.</li>
            <li><b>Rémiel ou (Ramiel)</b> chargé par Dieu du soin des ressuscités.</li>
        </ul>
        <p>La distinction entre ange et archange n'est pas toujours clairement précisée.</p>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>