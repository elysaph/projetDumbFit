<?php
include('controller/inscription/choixobj.php');
?>

<section class="container py-4">
	<div class="mb-3">
		<h2 class="h4 mb-3">Choisissez votre profil</h2>

		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="typeInscription" id="radioClient" value="client">
			<label class="form-check-label" for="radioClient">Client</label>
		</div>

		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="typeInscription" id="radioPros" value="pros">
			<label class="form-check-label" for="radioPros">Professionnel</label>
		</div>
	</div>

	<div id="formClientContainer" style="display: none;">
		<?php include('vue/inscription/formulaireclient.php'); ?>
	</div>

	<div id="formProsContainer" style="display: none;">
		<?php include('vue/inscription/formulairepros.php'); ?>
	</div>
</section>

