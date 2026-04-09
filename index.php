<?php 
include ('vue/commun/header.php');

$page=isset($_GET['page']) ? $_GET['page']:'accueil';
switch ($page) {
    case 'accueil':
        include('vue/accueil/accueil.php');
    break;
    case 'inscription':
        include('vue/inscription/inscription.php');
    break;

    default:
        include('view/accueil/accueil.php');
    break;
}







include('vue/commun/footer.php');
?>    