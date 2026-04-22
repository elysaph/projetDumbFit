<?php
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';
$isLoggedIn = isset($_SESSION['user']) || isset($_SESSION['user_id']);
$username = 'utilisateur';

if (isset($_SESSION['username']) && is_string($_SESSION['username'])) {
    $username = $_SESSION['username'];
} elseif (isset($_SESSION['user']) && is_string($_SESSION['user']) && $_SESSION['user'] !== '') {
    $username = $_SESSION['user'];
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DumbFit</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/style.css">
</head>

<body>
    <?php
    if (isset($_SESSION['user'])) {

    ?>
        <nav class="navbar sticky-top navbar-expand-lg bg-transparent">
            <div class="container-fluid">


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand mx-auto" href="index.php">
                        <img src="#" alt="Logo" width="70" height="70">
                    </a>
                    <ul class="navbar-nav mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=accueil">accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=categorie">categorie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=objectif">objectif</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=verif">verif des proffesionelles de santé</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php
    } else {

    ?>
        <nav class="navbar sticky-top navbar-expand-lg bg-transparent">
            <div class="container-fluid">


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand mx-auto" href="index.php">
                        <img src="#" alt="Logo" width="70" height="70">
                    </a>
                    <ul class="navbar-nav mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=accueil">accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=inscription">inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=objectif">objectif</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=connexion">connexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

    }
    ?>