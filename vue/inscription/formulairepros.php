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
        <label for="tel" class="form-label">téléphone</label>
        <input type="tel" maxlength="10" class="form-control" id="tel" name="tel">
    </div>
    <select name="obj">
        <label for="objectif" class="form-label">objectif</label>
        <?php foreach ($allobjectif as $objectif) { ?>
            <option value="<?php echo $objectif["id"] ?>"><?php echo $objectif['libelle']; ?>
            <?php } ?>
            </select>
            <div class="mb-3">
                <label for="mdp" class="form-label">Password</label>
                <input type="password" class="form-control" name="mdp" id="mdp">
            </div>
            <button type="submit" name="inscrire" class="btn btn-primary">inscription</button>
</form>