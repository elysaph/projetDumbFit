<?php
include('../../bdd/bdd.php');


if (isset($_POST['ajouter'])) {
    $libelle = $_POST['libelle'];
    $request = $bdd->prepare('INSERT INTO objectif(libelle) values(:libelle)');
    $request->bindParam(':libelle', $libelle);
    $request->execute();

    header("Location : http://127.0.0.1/BTSSIO/projet/projetDumbFit/index.php?page=accueil");
    exit();
}
