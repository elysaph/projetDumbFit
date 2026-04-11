<?php
session_start();
include('../../bdd/bdd.php');

if (isset($_POST['logadmin'])) {
    $user = $_POST['user'];
    $mdp = $_POST['mdp'];
    $reqs = $bdd->prepare('SELECT * FROM staff WHERE user = :user ');
    $reqs->bindParam(':user', $user);

    $reqs->execute();
    $result = $reqs->fetch();
    if ($result && password_verify($mdp, $result['mdp'])) {
        $_SESSION['user'] = $result;
        header('Location:  http://127.0.0.1/BTSSIO/projet/projetDumbFit/index.php?page=accueil');
        exit();
    } else {
        echo ('Incorrect email or password');
    }
}
