<section class="container py-4">
    <div class="mb-3">
        <h2 class="h4 mb-3">Choisissez votre profil</h2>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="typeconnexion" id="radioClient2" value="client2">
            <label class="form-check-label" for="radioClient2">Client</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="typeconnexion" id="radioPros2" value="pros2">
            <label class="form-check-label" for="radioPros2">Professionnel</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="typeconnexion" id="radioadmin2" value="admin2">
            <label class="form-check-label" for="radioadmin2">admin</label>
        </div>
    </div>

    <div id="formClientConnexion" style="display: none;">
        <?php include('vue/connexion/connexionclient.php'); ?>
    </div>

    <div id="formProsconnexion" style="display: none;">
        <?php include('vue/connexion/connexionpros.php'); ?>
    </div>
    <div id="formAdminconnexion" style="display: none;">
        <?php include('vue/connexion/connexionadmin.php'); ?>
    </div>
</section>