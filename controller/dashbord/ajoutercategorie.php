<?php
include('../../bdd/bdd.php');
session_start();


if (isset($_POST['ajoutcate'])) {
    $id_user = $_SESSION['id'];
    $id_categorie = $_POST['categorie'];



    $req = $bdd->prepare('INSERT INTO cibler (id_user, id_categorie) VALUES (:id_user, :id_categorie)');

    $req->bindParam(':id_user', $id_user);
    $req->bindParam(':id_categorie', $id_categorie);
    $req->execute();

    header("Location: http://127.0.0.1/BTSSIO/projet/projetDumbFit/index.php?page=accueil");
    exit();
} else {
    // Si on arrive ici directement, on peut par exemple rediriger vers l'accueil
    header("http://127.0.0.1/BTSSIO/projet/projetDumbFit/index.php?page=accueil");
    exit();
}
