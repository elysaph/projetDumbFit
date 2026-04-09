<?php
include('bdd/bdd.php');


if (isset($_POST['inscrire'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $datenaissance = $_POST['datenaissance'];
    $tel = $_POST['tel'];
    $obj = $_POST['objectif'];
    $mdp = $_POST['mdp'];

    $req = $bdd->prepare('INSERT INTO clients(nom, prenom, mail, datenaissance, tel, obj, mdp) VALUES (:nom, :prenom, :mail, :datenaissance, :tel, :obj, :mdp)');

    $req->bindParam(':nom', $nom);
    $req->bindParam(':prenom', $prenom);
    $req->bindParam(':mail', $mail);
    $req->bindParam(':datenaissance', $datenaissance);
    $req->bindParam(':tel', $tel);
    $req->bindParam(':obj', $obj);
    $req->bindParam(':mdp', $mdp);
    $req->execute();

    header("Location: index.php");
    exit();
}
$req = $bdd->prepare("SELECT * FROM objectif ");
$req->execute();
$allobjectif = $req->fetchAll();
