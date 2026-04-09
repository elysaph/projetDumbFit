<?php
include('../../bdd/bdd.php');


if (isset($_POST['inscrire'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $datenaissance = $_POST['datenaissance'];
    $tel = $_POST['tel'];
    $obj = $_POST['obj'];
    $mdp = $_POST['mdp'];

    $req = $bdd->prepare('INSERT INTO clients (nom, prenom, datenaissance, tel, obj, mdp) VALUES (:nom, :prenom, :datenaissance, :tel, :obj, :mdp,)');

    $req->bindParam(':name', $nom);
    $req->bindParam(':prenom', $prenom);
    $req->bindParam(':mail', $mail);
    $req->bindParam(':datenaissance', $datenaissance);
    $req->bindParam(':tel', $tel);
    $req->bindParam(':obj', $obj);
    $req->bindParam(':mdp', $mdp);

    $req->execute();

    header("Location: ../../index.php?page=inscription");
    exit();
}