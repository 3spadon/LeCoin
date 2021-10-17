<?php
require('controller.php');
session_start();
needLogin();

try{
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'view') {
                displayAccount(); 
        }
        elseif ($_GET['action'] == 'changePassword') {
                displayChangePassword();
        }
    }
    else {
        displayAccount();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}