<form method="POST" action="controller/inscription/inscription.php">
    <div class="mb-3">
        <label for="nom" class="form-label">nom</label>
        <input type="text" class="form-control" id="nom" aria-describedby="nomHelp">
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">prenom</label>
        <input type="text" class="form-control" id="prenom" aria-describedby="prenomHelp">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="email" class="form-control" id="mail" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="naissance" class="form-label">date de naissance</label>
        <input type="date" class="form-control" id="datenaissance" aria-describedby="naissanceHelp">
    </div>
    <div class="mb-3">
        <label for="objectif" class="form-label">téléphone</label>
        <input type="int" maxlength="10" class="form-control" id="tel" aria-describedby="telHelp">
    </div>
    <div class="mb-3">
        <label for="objectif" class="form-label">objectif</label>
        <input type="text" class="form-control" id="obj" aria-describedby="objectifHelp">
    </div>
    <div class="mb-3">
        <label for="mdp" class="form-label">Password</label>
        <input type="password" class="form-control" id="mdp">
    </div>
    <input type="submit" id="inscrire" value=" inscription">
</form>