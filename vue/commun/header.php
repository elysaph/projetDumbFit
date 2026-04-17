<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>dumbfit</title>
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
        </nav>
    <?php

    }
    ?>