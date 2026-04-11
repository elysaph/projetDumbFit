<?php
include('bdd/bdd.php');


$reqs = $bdd->prepare("SELECT * FROM categorie");
$reqs->execute();
$allcategorie = $reqs->fetchAll();
