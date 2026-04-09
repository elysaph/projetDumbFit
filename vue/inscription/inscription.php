<form method="POST" action="../../index.php?page=inscription">
    <div class="mb-3">
        <label for="nom" class="form-label">nom</label>
        <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nomHelp">
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">prenom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="prenomHelp">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="naissance" class="form-label">date de naissance</label>
        <input type="date" class="form-control" id="datenaissance" name="datenaissance" aria-describedby="naissanceHelp">
    </div>
    <div class="mb-3">
        <label for="objectif" class="form-label">téléphone</label>
        <input type="int" maxlength="10" class="form-control" id="tel" name="tel" aria-describedby="telHelp">
    </div>
    <select name="objectif">
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