<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/fawesome.css" rel="stylesheet" />
    <link href="css/button.css" rel="stylesheet" />
</head>

<body>
    <header>
        <h1><a href='index.php'>{Le Coin}.</a></h1>
        <nav>
            <a id='lienJournal' href='index.php'>Journal</a>
            <a id='lienReves' href='index.php?action=listDreams'>Rêves</a>
            <a id='lienLivres' href='www/'>Livres</a>
            <a id='lienTheologie' href='index.php?action=viewTheologie'>Théologie</a>
            <a id='lienShellcoding' href='www/'>Shellcoding</a>
        </nav>
    </header>
    <?php
        require('view/loginTab.php');
    ?>
    <hr id="header_hr">
    <main>
        <?= $content ?>
    </main>
    <!-- <footer>
        <hr id='footer_hr'>
        <small>Copyright 2021</small>
    </footer> -->
</body>
<script src="js/nav.js"></script>

</html>