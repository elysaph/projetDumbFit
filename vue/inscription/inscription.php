<?php
$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fullName = isset($_POST['fullName']) ? trim($_POST['fullName']) : '';
	$email = isset($_POST['email']) ? trim($_POST['email']) : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	$confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';

	if (empty($fullName) || empty($email) || empty($password) || empty($confirmPassword)) {
		$message = 'Tous les champs sont obligatoires.';
		$messageType = 'error';
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$message = 'Veuillez entrer une adresse e-mail valide.';
		$messageType = 'error';
	} elseif (strlen($password) < 8) {
		$message = 'Le mot de passe doit contenir au moins 8 caracteres.';
		$messageType = 'error';
	} elseif ($password !== $confirmPassword) {
		$message = 'Les mots de passe ne correspondent pas.';
		$messageType = 'error';
	} else {
		$message = 'Compte cree avec succes. Connectez ce formulaire a votre base de donnees.';
		$messageType = 'success';
	}
}
?>

<section class="auth-page">
	<section class="auth-card" aria-labelledby="create-account-title">
		<h1 id="create-account-title">Creez votre compte</h1>
		<p>Configurez vos identifiants pour commencer a suivre vos donnees de sante.</p>

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
				<button class="btn" type="submit">Creer le compte</button>
				<a class="link-btn" href="index.php?page=accueil">Retour au tableau de bord</a>
			</div>

			<?php if (!empty($message)): ?>
				<p id="form-note" class="form-note <?php echo $messageType === 'error' ? 'is-error' : 'is-success'; ?>" aria-live="polite">
					<?php echo htmlspecialchars($message); ?>
				</p>
			<?php endif; ?>
		</form>
	</section>
</section>