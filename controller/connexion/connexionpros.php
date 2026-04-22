<?php
session_start();
include('../../bdd/bdd.php');


if (isset($_POST['logpros'])) {
    if (!empty($_POST['mail']) and !empty($_POST['mdp'])) {
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $reqs = $bdd->prepare('SELECT * FROM pros WHERE mail = ? and mdp = ? ');
        $reqs->execute(array($mail, $mdp));
        if ($reqs->rowCount() > 0) {
            $_SESSION['role'] = 'pros';
            $_SESSION['mail'] = $mail;
            $_SESSION['id'] = $reqs->fetch()['id'];
            header('Location: ../../index.php?page=accueil');
            exit();
        } else {
            echo ('Incorrect email or password');
        }
    } else {
        echo ('veuillez remplir tous les champs');
    }
}
