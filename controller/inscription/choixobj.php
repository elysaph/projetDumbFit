<?php
include('bdd/bdd.php');


$reqs = $bdd->prepare("SELECT * FROM objectif");
$reqs->execute();
$allobjectif = $reqs->fetchAll();
?>
