<?php
$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
    $lastName = isset($_POST['lastName']) ? trim($_POST['lastName']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $newPassword = isset($_POST['newPassword']) ? $_POST['newPassword'] : '';
    $confirmNewPassword = isset($_POST['confirmNewPassword']) ? $_POST['confirmNewPassword'] : '';

    if (empty($firstName) || empty($lastName) || empty($email) || empty($username)) {
        $message = 'Les champs obligatoires doivent etre remplis.';
        $messageType = 'error';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Veuillez entrer une adresse e-mail valide.';
        $messageType = 'error';
    } elseif (!empty($newPassword) && strlen($newPassword) < 8) {
        $message = 'Le mot de passe doit contenir au moins 8 caracteres.';
        $messageType = 'error';
    } elseif (!empty($newPassword) && $newPassword !== $confirmNewPassword) {
        $message = 'Les champs du nouveau mot de passe ne correspondent pas.';
        $messageType = 'error';
    } else {
        $message = 'Modifications du profil enregistrees avec succes.';
        $messageType = 'success';
    }
}
?>

<section class="auth-page">
    <section class="auth-card profile-card" aria-labelledby="profile-title">
        <h1 id="profile-title">Modifier le profil</h1>
        <p>Mettez a jour vos informations personnelles et les parametres du compte.</p>

        <form id="profile-form" method="POST" class="form-grid">
            <h2 class="form-section-title">Informations personnelles</h2>

            <div class="split-fields">
                <div class="field">
                    <label for="first-name">Prenom</label>
                    <input id="first-name" name="firstName" type="text" autocomplete="given-name" required>
                </div>
                <div class="field">
                    <label for="last-name">Nom</label>
                    <input id="last-name" name="lastName" type="text" autocomplete="family-name" required>
                </div>
            </div>

            <div class="field">
                <label for="profile-email">Adresse e-mail</label>
                <input id="profile-email" name="email" type="email" autocomplete="email" required>
            </div>

            <div class="field">
                <label for="phone">Telephone</label>
                <input id="phone" name="phone" type="tel" autocomplete="tel">
            </div>

            <h2 class="form-section-title">Informations du compte</h2>

            <div class="field">
                <label for="username">Nom d'utilisateur</label>
                <input id="username" name="username" type="text" autocomplete="username" required>
            </div>

            <div class="field">
                <label for="new-password">Nouveau mot de passe</label>
                <input id="new-password" name="newPassword" type="password" minlength="8" placeholder="Laissez vide pour conserver le mot de passe actuel">
            </div>

            <div class="field">
                <label for="confirm-new-password">Confirmer le nouveau mot de passe</label>
                <input id="confirm-new-password" name="confirmNewPassword" type="password" minlength="8" placeholder="Saisissez a nouveau le nouveau mot de passe">
            </div>

            <div class="form-actions">
                <button class="btn" type="submit">Enregistrer les modifications</button>
                <a class="link-btn" href="index.php?page=accueil">Retour au tableau de bord</a>
            </div>

            <?php if (!empty($message)): ?>
                <p id="profile-note" class="form-note <?php echo $messageType === 'error' ? 'is-error' : 'is-success'; ?>" aria-live="polite">
                    <?php echo htmlspecialchars($message); ?>
                </p>
            <?php endif; ?>
        </form>
    </section>
</section>