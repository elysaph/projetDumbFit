<?php
session_start();
include('../../bdd/bdd.php');


if (isset($_POST['logadmin'])) {
    if (!empty($_POST['user']) and !empty($_POST['mdp'])) {
        $user = $_POST['user'];
        $mdp = $_POST['mdp'];
        $reqs = $bdd->prepare('SELECT * FROM staff WHERE user = ? and mdp = ? ');
        $reqs->execute(array($user,$mdp));
        if ($reqs->rowCount()>0) {
            $_SESSION['user']=$user;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $reqs->fetch()['id'];
            header('Location:  http://127.0.0.1/BTSSIO/projet/projetDumbFit/index.php?page=accueil');
            exit();
        } else {
            echo ('Incorrect email or password');
        }
    }else{
        echo('veuillez remplir tous les champs');
    }    
}
