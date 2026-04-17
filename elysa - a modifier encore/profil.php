<?php
session_start();

// vérification de la connexion de l'utilisateur
$loggedIn = isset($_SESSION['user_id']);

// message initialisation
$message = '';
$messageType = '';

// formulaire handler
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // fetch données du formulaire
    $firstName = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
    $lastName = isset($_POST['lastName']) ? trim($_POST['lastName']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $newPassword = isset($_POST['newPassword']) ? $_POST['newPassword'] : '';
    $confirmNewPassword = isset($_POST['confirmNewPassword']) ? $_POST['confirmNewPassword'] : '';

    // validation
    if (empty($firstName) || empty($lastName) || empty($email) || empty($username)) {
        $message = 'Les champs obligatoires doivent être remplis.';
        $messageType = 'error';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Veuillez entrer une adresse e-mail valide.';
        $messageType = 'error';
    } elseif (!empty($newPassword) && strlen($newPassword) < 8) {
        $message = 'Le mot de passe doit contenir au moins 8 caractères.';
        $messageType = 'error';
    } elseif (!empty($newPassword) && $newPassword !== $confirmNewPassword) {
        $message = 'Les champs du nouveau mot de passe ne correspondent pas.';
        $messageType = 'error';
    } else {
        // a faire : mttre à jour l'utilisateur dans la base de données


        $message = 'Modifications du profil enregistrées avec succès !';
        $messageType = 'success';
    }
}
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | DumbFit</title>
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
                    <a class="menu-link active" href="profil.php">Profil</a>
                    <a class="menu-cta" href="compteCreation.php">Créer un compte</a>
                </nav>
            </div>
        </header>

        <main class="wrap auth-page">
            <section class="auth-card profile-card" aria-labelledby="profile-title">
                <h1 id="profile-title">Modifier le profil</h1>
                <p>Mettez à jour vos informations personnelles et les paramètres du compte.</p>

                <form id="profile-form" method="POST" class="form-grid">
                    <h2 class="form-section-title">Informations personnelles</h2>

                    <div class="split-fields">
                        <div class="field">
                            <label for="first-name">Prénom</label>
                            <input id="first-name" name="firstName" type="text" autocomplete="given-name" value="" required>
                        </div>
                        <div class="field">
                            <label for="last-name">Nom</label>
                            <input id="last-name" name="lastName" type="text" autocomplete="family-name" value="" required>
                        </div>
                    </div>

                    <div class="field">
                        <label for="profile-email">Adresse e-mail</label>
                        <input id="profile-email" name="email" type="email" autocomplete="email" value="" required>
                    </div>

                    <div class="field">
                        <label for="phone">Téléphone</label>
                        <input id="phone" name="phone" type="tel" autocomplete="tel" value="">
                    </div>

                    <h2 class="form-section-title">Informations du compte</h2>

                    <div class="field">
                        <label for="username">Nom d'utilisateur</label>
                        <input id="username" name="username" type="text" autocomplete="username" value="" required>
                    </div>

                    <div class="field">
                        <label for="new-password">Nouveau mot de passe</label>
                        <input id="new-password" name="newPassword" type="password" minlength="8" placeholder="Laissez vide pour conserver le mot de passe actuel">
                    </div>

                    <div class="field">
                        <label for="confirm-new-password">Confirmer le nouveau mot de passe</label>
                        <input id="confirm-new-password" name="confirmNewPassword" type="password" minlength="8" placeholder="Saisissez à nouveau le nouveau mot de passe">
                    </div>

                    <div class="form-actions">
                        <button class="btn" type="submit">Enregistrer les modifications</button>
                        <a class="link-btn" href="index.php">Retour au tableau de bord</a>
                    </div>

                    <?php if (!empty($message)): ?>
                        <p id="profile-note" class="form-note" style="color: <?php echo $messageType === 'error' ? '#b0203a' : '#1c7d3c'; ?>" aria-live="polite">
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