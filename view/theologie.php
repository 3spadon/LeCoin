<?php $title = 'Le Coin | Théologie'; ?>
<?php ob_start(); ?>

<div id='menuTheologie'>
    <ul>
        <li><h1>Esprits célestes</h1></li>
            <ul>
                <li><a href='index.php?action=theo&ch=anges'>les Anges</a></li>
                <li><a href='index.php?action=theo&ch=archanges'>les Archanges</a></li>
                <li><a href='index.php?action=theo&ch=vertus'>les Vertus</a></li>
                <li><a href='index.php?action=theo&ch=puissances'>les Puissances</a></li>
                <li><a href='index.php?action=theo&ch=principautes'>les Principautés</a></li>
                <li><a href='index.php?action=theo&ch=dominations'>les Dominations</a></li>
                <li>les Trônes</li>
                <li>les Chérubins</li>
                <li>les Séraphins</li>
            </ul>
    </ul>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>