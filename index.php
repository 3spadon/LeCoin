<?php
require('controller.php');
try{
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            if(isset($_GET['key'])){ //Need to sanitize GET input later
                listTrendsK(); //displaying unencrypted post
            }
            else{   //if action=post but no GET_['key'] passed: displaying encrypted post list;
                listTrends();
            }
        }
        
        elseif ($_GET['action'] == 'listDreams') {
            if(isset($_GET['key'])){ //Need to sanitize GET input later
                listDreamsK(); //displaying unencrypted post
            }
            else{   //if action=post but no GET_['key'] passed: displaying encrypted post list;
                listDreams();
            }
        }

        elseif ($_GET['action'] == 'viewTheologie') {
                menu_theologie(); 
        }

        elseif ($_GET['action'] == 'viewLogin') {
            viewLogin();
        }

        elseif ($_GET['action'] == 'theo') {
            if (isset($_GET['ch']) && $_GET['ch'] == 'anges') {
            EC_anges(); 
            }
            if (isset($_GET['ch']) && $_GET['ch'] == 'archanges') {
            EC_archanges(); 
            }   
            if (isset($_GET['ch']) && $_GET['ch'] == 'vertus') {
                EC_vertus(); 
            }
            if (isset($_GET['ch']) && $_GET['ch'] == 'puissances') {
                EC_puissances(); 
            }
            if (isset($_GET['ch']) && $_GET['ch'] == 'principautes') {
                EC_principautes(); 
            }
            if (isset($_GET['ch']) && $_GET['ch'] == 'dominations') {
                EC_dominations();
            }  
        }

        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if(isset($_GET['key'])){ //Need to sanitize GET input later
                    postK(); //displaying unencrypted post
                }
                else{   //if action=post but no GET_['key'] passed displaying encrypted post
                    post();
                }
            }
            else {
                throw new Exception('aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'dream') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if(isset($_GET['key'])){ //Need to sanitize GET input later
                    dreamK(); //displaying unencrypted post
                }
                else{   //if action=post but no GET_['key'] passed displaying encrypted post
                    dream();
                }
            }
            else {
                throw new Exception('aucun identifiant de rêve envoyé');
            }
        }
        elseif (($_GET['action'] == 'newPost')){
            writePost();
        }
        elseif (($_GET['action'] == 'newDream')){
            writeDream();
        }
        elseif (($_GET['action'] == 'addPost')){
            if (!empty($_POST['dateArticle']) && !empty($_POST['titreArticle']) && !empty($_POST['contenuArticle'])) {
                addPost($_POST['dateArticle'],$_POST['titreArticle'],$_POST['contenuArticle'],$_POST['extraArticle']);
                // echo $_POST['dateArticle'];
                // echo $_POST['titreArticle'];
                // echo $_POST['contenuArticle'];
                // echo $_POST['extraArticle'];
                // echo $_POST['publierArticle'];
            }
            else {
                throw new Exception('tous les champs ne sont pas remplis !');
            }
        }
        elseif (($_GET['action'] == 'addDream')){
            if (!empty($_POST['dateArticle']) && !empty($_POST['titreArticle']) && !empty($_POST['contenuArticle'])) {
                addPost($_POST['dateArticle'],$_POST['titreArticle'],$_POST['contenuArticle'],$_POST['extraArticle']);
                // echo $_POST['dateArticle'];
                // echo $_POST['titreArticle'];
                // echo $_POST['contenuArticle'];
                // echo $_POST['extraArticle'];
                // echo $_POST['publierArticle'];
            }
            else {
                throw new Exception('tous les champs ne sont pas remplis !');
            }
        }
        elseif ($_GET['action'] == 'deletePost'){
            if (!empty($_GET['id']))
            {
                confirmDeletePost($_GET['id']);
            }
            else
            {
                throw new Exception('ID manquant');
            }
        }
        elseif ($_GET['action'] == 'confirmDeletePost'){
            if (!empty($_GET['id']))
            {
                deletePost($_GET['id']);
            }
            else
            {
                throw new Exception('ID manquant');
            }
        }
    }
    else {
        listTrends();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}

