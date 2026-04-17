<?php
session_start();

// message initialisation
$message = '';
$messageType = '';

// formulaire handler
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // fetch données du formulaire
    $fullName = isset($_POST['fullName']) ? trim($_POST['fullName']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';

    // validation
    if (empty($fullName) || empty($email) || empty($password) || empty($confirmPassword)) {
        $message = 'Tous les champs sont obligatoires.';
        $messageType = 'error';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Veuillez entrer une adresse e-mail valide.';
        $messageType = 'error';
    } elseif (strlen($password) < 8) {
        $message = 'Le mot de passe doit contenir au moins 8 caractères.';
        $messageType = 'error';
    } elseif ($password !== $confirmPassword) {
        $message = 'Les mots de passe ne correspondent pas.';
        $messageType = 'error';
    } else {
        // a faire : insérer l'utilisateur dans la base de données avec un mot de passe hashé


        $message = 'Compte créé avec succès ! Connectez ce formulaire à votre base de données.';
        $messageType = 'success';
    }
}
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte | DumbFit</title>
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
                    <a class="menu-link" href="index.php">Tableau de bord</a>
                    <a class="menu-link" href="profil.php">Profil</a>
                    <a class="menu-cta" href="compteCreation.php">Créer un compte</a>
                </nav>
            </div>
        </header>

        <main class="wrap auth-page">
            <section class="auth-card" aria-labelledby="create-account-title">
                <h1 id="create-account-title">Créez votre compte</h1>
                <p>Configurez vos identifiants pour commencer à suivre vos données de santé.</p>

                <form id="account-form" method="POST" class="form-grid">
                    <div class="field">
                        <label for="full-name">Nom complet</label>
                        <input id="full-name" name="fullName" type="text" autocomplete="name" required>
                    </div>

                    <div class="field">
                        <label for="email">Adresse e-mail</label>
                        <input id="email" name="email" type="email" autocomplete="email" required>
                    </div>

                    <div class="field">
                        <label for="password">Mot de passe</label>
                        <input id="password" name="password" type="password" minlength="8" required>
                    </div>

                    <div class="field">
                        <label for="confirm-password">Confirmer le mot de passe</label>
                        <input id="confirm-password" name="confirmPassword" type="password" minlength="8" required>
                    </div>

                    <div class="form-actions">
                        <button class="btn" type="submit">Créer le compte</button>
                        <a class="link-btn" href="index.php">Retour au tableau de bord</a>
                    </div>

                    <?php if (!empty($message)): ?>
                        <p id="form-note" class="form-note" style="color: <?php echo $messageType === 'error' ? '#b0203a' : '#1c7d3c'; ?>" aria-live="polite">
                            <?php echo htmlspecialchars($message); ?>
                        </p>
                    <?php endif; ?>
                </form>
            </section>
        </main>
    </div>

    <script src="script.js" defer></script>
</body>

</html>