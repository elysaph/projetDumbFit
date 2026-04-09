<?php
// Traitement des formulaires EN PREMIER, avant tout output HTML
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

if ($page === 'inscription') {
    include('controller/inscription/inscription.php');
}

// Seulement après les redirections potentielles, on affiche le HTML
include('vue/commun/header.php');

switch ($page) {
    case 'accueil':
        include('vue/accueil/accueil.php');
        break;
    case 'inscription':
        include('vue/inscription/inscription.php');
        break;
    case 'objectif':
        include('vue/objectif/objectif.php');
        break;
    default:
        include('vue/accueil/accueil.php');
        break;
}

include('vue/commun/footer.php');
?>
