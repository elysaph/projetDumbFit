<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';


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
    case 'admin':
        include('vue/admin/admin.php');
        break;
    case 'deco':
        include('vue/deco/deco.php');
        break;
    case 'connexion':
        include('vue/connexion/connexion.php');
        break;    
            
    default:
        include('vue/accueil/accueil.php');
        break;
}

include('vue/commun/footer.php');
