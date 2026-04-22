<?php
include('bdd/bdd.php');

$id = $_SESSION['id'];
$req = $bdd->prepare("
    SELECT categorie.libelle, cibler.id_categorie
    FROM cibler 
    JOIN categorie ON cibler.id_categorie = categorie.id
    WHERE cibler.id_user = ?
");
$req->execute([$id]);
$allcate = $req->fetchAll();
