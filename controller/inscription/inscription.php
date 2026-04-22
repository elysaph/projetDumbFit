<?php
include('../../bdd/bdd.php');

session_start();


if (isset($_POST['inscrire'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $datenaissance = $_POST['datenaissance'];
    $tel = $_POST['tel'];
    $obj = $_POST['obj'];
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

    header('Location: ../../index.php?page=accueil');
    exit();
}

if (isset($_POST['sign'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $mdp = $_POST['mdp'];
    $specialite = $_POST['specialite'];


    $req = $bdd->prepare('INSERT INTO pros(nom, prenom, mail, tel, mdp, specialite) VALUES (:nom, :prenom, :mail, :tel, :mdp, :specialite )');

    $req->bindParam(':nom', $nom);
    $req->bindParam(':prenom', $prenom);
    $req->bindParam(':mail', $mail);
    $req->bindParam(':tel', $tel);
    $req->bindParam(':mdp', $mdp);
    $req->bindParam(':specialite', $specialite);
    $req->execute();

    header('Location: ../../index.php?page=accueil');
    exit();
}
