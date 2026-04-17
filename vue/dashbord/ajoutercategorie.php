<?php
include('controller/categorie/allcategorie.php');
?>


<h2>inscription</h2>

<form action="controller/dashbord/ajoutercategorie.php" method="POST">
    <select name="categorie">
        <?php foreach ($allcategorie as $categorie) { ?>
            <option value="<?php echo $categorie["id"] ?>"><?php echo $categorie['libelle']; ?></option>
        <?php } ?>
    </select>
    <input type="submit" name="ajoutcate" value=" ajouter une categorie">
</form>