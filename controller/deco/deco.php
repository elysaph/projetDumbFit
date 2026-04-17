<?php 
session_start();
$_SESSION=array();
session_destroy();
header("Location: http://127.0.0.1/BTSSIO/projet/projetDumbFit/index.php?page=accueil");

?>