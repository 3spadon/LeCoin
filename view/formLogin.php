<?php $title = 'Le Coin | Connexion'; ?>

<?php ob_start(); ?>
<div id="grid_loginForm">
    <div class="panel">
        <div class="panel_heading">
            <h3><i class="fas fa-pencil-alt paddingRightIcon"></i>Nouvel entrée dans le journal</h3>
        </div>
        <div id="formulaire">
            <form action="index.php?action=addPost" method="post">

                <div class="champDateFormulaire">
                    <button onclick="setDateYesYesterday();return false;" class="" id="btnAvHier">Avant-hier</button>
                    <button onclick="setDateYesterday();return false;" class="btnDates" id="btnHier">Hier</button>
                    <input class="form-control inpArticle" name="dateArticle" id="dateArticle" aria-describedby="dateArticleHelp" value="" placeholder="<?php echo date("Y-m-d"); ?>">
                    <button action="" onclick="setDateToday();return false;" class="btnDates" id="btnAujourdhui">Aujourd'hui</button>
                </div> <!-- class=champDateFormulaire -->

                <input class="inpArticle champsTexteFormulaire" name="titreArticle" id="titre" aria-describedby="titreHelp" placeholder="">
                <textarea class="inpArticle champsTexteFormulaire" placeholder="" name="contenuArticle" rows="3"></textarea>
                <input class="champsTexteFormulaire inpArticle" name="extraArticle" id="extraArticle" placeholder="(extras)">

                <div id="check_aPublier">
                    <input type="checkbox" name="publierArticle" id="publierArticle">
                    <label class="" for="publierArticle">Publier l'article</label>
                </div>

                <button type="submit" id="btn_sauvegarderArticle">Sauvegarder</button>
            </form>
        </div> <!-- id=formulaire -->
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>