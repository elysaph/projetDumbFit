<?php
// authentification et gestion de session (à implémenter avec la base de données)
session_start();

// vérification de la connexion de l'utilisateur
$loggedIn = isset($_SESSION['user_id']);
$username = $loggedIn ? $_SESSION['username'] : 'utilisateur';
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord DumbFit</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div id="app">
        <header class="topbar">
            <div class="wrap topbar-row">
                <a class="brand" href="index.php">DumbFit</a>
                <nav class="menu" aria-label="Navigation principale">
                    <a class="menu-link active" href="index.php">Tableau de bord</a>
                    <a class="menu-link" href="profil.php">Profil</a>
                    <a class="menu-cta" href="compteCreation.php">Créer un compte</a>
                </nav>
            </div>
        </header>

        <main class="wrap page">
            <section class="hero">
                <div>
                    <p class="eyebrow">Bienvenue, <?php echo htmlspecialchars($username); ?></p>
                    <h1>Tableau de bord santé</h1>
                    <p>Suivez vos indicateurs de santé</p>
                </div>
                <button class="btn" type="button">Ajouter des données santé</button>
            </section>

            <section class="cards" aria-label="Indicateurs de santé">
                <article class="card tone-red">
                    <h2><span class="metric-icon">TM</span>Temps de sport</h2>
                    <p class="status">Aucune donnée enregistrée</p>
                    <p class="range">Plage : 50-150 minutes/semaine</p>
                </article>
                <article class="card tone-pink">
                    <h2><span class="metric-icon">HY</span>Hydratation</h2>
                    <p class="status">Aucune donnée enregistrée</p>
                    <p class="range">Plage : 2-3L/jour</p>
                </article>
                <article class="card tone-blue">
                    <h2><span class="metric-icon">XX</span>XXXXX</h2>
                    <p class="status">Aucune donnée enregistrée</p>
                    <p class="range">Plage : YY-YY/Z</p>
                </article>
                <article class="card tone-violet">
                    <h2><span class="metric-icon">PD</span>Poids</h2>
                    <p class="status">Aucune donnée enregistrée</p>
                    <p class="range">Plage : 0-999 kg</p>
                </article>
                <article class="card tone-orange">
                    <h2><span class="metric-icon">XX</span>XXXXX</h2>
                    <p class="status">Aucune donnée enregistrée</p>
                    <p class="range">Plage : XXXX/YYY</p>
                </article>
                <article class="card tone-cyan">
                    <h2><span class="metric-icon">XX</span>XXXXX</h2>
                    <p class="status">Aucune donnée enregistrée</p>
                    <p class="range">Plage : XXXX/YYY</p>
                </article>
            </section>

            <section class="summary" aria-label="Résumé de santé">
                <h2>Résumé de santé</h2>
                <p>Vue d'ensemble de votre suivi de santé</p>
                <div class="stats">
                    <article class="stat stat-blue">
                        <p class="value">0</p>
                        <p class="label">Mesures totales</p>
                    </article>
                    <article class="stat stat-green">
                        <p class="value">0</p>
                        <p class="label">Indicateurs suivis</p>
                    </article>
                    <article class="stat stat-amber">
                        <p class="value">0</p>
                        <p class="label">Alertes actives</p>
                    </article>
                </div>
            </section>
        </main>
    </div>

    <script src="script.js" defer></script>
</body>

</html>