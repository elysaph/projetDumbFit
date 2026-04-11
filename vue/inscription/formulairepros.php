<form method="POST" action="controller/inscription/inscription.php">
    <div class="mb-3">
        <label for="nom" class="form-label">nom</label>
        <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nomHelp">
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">prenom</label>
        <input type="text" class="form-control" id="prenom" name="prenom">
    </div>
    <div class=" mb-3">
        <label for="mail" class="form-label">email</label>
        <input type="mail" maxlength="10" class="form-control" id="mail" name="mail">
    </div>
    <div class=" mb-3">
        <label for="tel" class="form-label">téléphone</label>
        <input type="tel" maxlength="10" class="form-control" id="tel" name="tel">
    </div>
    <div class=" mb-3">
        <label for="licence" class="form-label">licence</label>
        <input type="text" class="form-control" id="licence" name="licence">
    </div>

    <select name="specialite">
        <label for="specialite" class="form-label">categorie de santé</label>
        <?php foreach ($allcategorie as $categorie) { ?>
            <option value="<?php echo $categorie["id"] ?>"><?php echo $categorie['libelle']; ?>
            <?php } ?>
    </select>
    <div class="mb-3">
        <label for="mdp" class="form-label">Password</label>
        <input type="password" class="form-control" name="mdp" id="mdp">
    </div>
    <button type="submit" name="sign" class="btn btn-primary">inscription</button>
</form>