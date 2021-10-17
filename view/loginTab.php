<?php 
session_start();
if(isset($_SESSION['auth'])){
    echo "<script src='js/loginTab.js'></script><div id='accountTab'><b id='lienConnexion'>Bienvenue,<a href='account.php'>".$_SESSION['auth']['username']."</a><a href='logout.php'><i id='icon_logout' class='fas fa-sign-out-alt'></i></a></b></div>";
} 
else{
    echo "<div id='accountTab'><a href='login.php'><b id='lienConnexion'>Connexion</b></a></div>";
}
?>
