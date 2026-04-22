<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';
$isLoggedIn = isset($_SESSION['id']) || isset($_SESSION['user']) || isset($_SESSION['user_id']);
$username = 'utilisateur';

if (isset($_SESSION['user']) && is_string($_SESSION['user']) && $_SESSION['user'] !== '') {
    $username = $_SESSION['user'];
} elseif (isset($_SESSION['username']) && is_string($_SESSION['username']) && $_SESSION['username'] !== '') {
    $username = $_SESSION['username'];
} elseif (isset($_SESSION['mail']) && is_string($_SESSION['mail']) && $_SESSION['mail'] !== '') {
    $username = $_SESSION['mail'];
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DumbFit</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/style.css">
</head>

<body>
    <div id="app">
        <header class="topbar">
            <div class="wrap topbar-row">
                <a class="brand" href="index.php?page=accueil">DumbFit</a>

                <?php if ($isLoggedIn): ?>
                    <nav class="menu" aria-label="Navigation principale">
                        <a class="menu-link<?php echo $page === 'accueil' ? ' active' : ''; ?>" href="index.php?page=accueil">Tableau de bord</a>
                        <a class="menu-link<?php echo $page === 'profil' ? ' active' : ''; ?>" href="index.php?page=profil">Profil</a>
                        <a class="menu-link<?php echo $page === 'objectif' ? ' active' : ''; ?>" href="index.php?page=objectif">Objectif</a>
                        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                            <a class="menu-link<?php echo $page === 'dashbord' ? ' active' : ''; ?>" href="index.php?page=dashbord">Dashbord</a>
                        <?php endif; ?>
                        <a class="menu-cta" href="index.php?page=deco">Se deconnecter</a>
                    </nav>
                <?php else: ?>
                    <nav class="menu" aria-label="Navigation principale">
                        <a class="menu-link<?php echo $page === 'accueil' ? ' active' : ''; ?>" href="index.php?page=accueil">Tableau de bord</a>
                        <a class="menu-link<?php echo $page === 'inscription' ? ' active' : ''; ?>" href="index.php?page=inscription">Creer un compte</a>
                        <a class="menu-link<?php echo $page === 'connexion' ? ' active' : ''; ?>" href="index.php?page=connexion">Connexion</a>
                    </nav>
                <?php endif; ?>
            </div>
        </header>

        <main class="wrap page">
            <p class="eyebrow">Bienvenue, <?php echo htmlspecialchars($username); ?></p>