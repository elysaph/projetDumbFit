<?php
session_start();
include('../../bdd/bdd.php');


if (isset($_POST['logclient'])) {
    if (!empty($_POST['mail']) and !empty($_POST['mdp'])) {
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $reqs = $bdd->prepare('SELECT * FROM clients WHERE mail = ? and mdp = ? ');
        $reqs->execute(array($mail, $mdp));
        if ($reqs->rowCount() > 0) {
            $_SESSION['role'] = 'client';
            $_SESSION['mail'] = $mail;
            $_SESSION['id'] = $reqs->fetch()['id'];
            header('Location:  http://127.0.0.1/BTSSIO/projet/projetDumbFit/index.php?page=accueil');
            exit();
        } else {
            echo ('Incorrect email or password');
        }
    } else {
        echo ('veuillez remplir tous les champs');
    }
}
