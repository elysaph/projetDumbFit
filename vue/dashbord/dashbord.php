<?php include('controller/dashbord/dashbord.php');?>


<div class="col-12 col-md-4 text-center text-md-start">
    <a href="index.php?page=ajoutercategorie">ajouter une categorie</a>
</div>
<div class="col-12 col-md-4 text-center text-md-start">
    <a href="index.php?page=ajouterstat">ajouter une state</a>
</div>

<div class="card" style="width: 18rem;">
    <?php foreach ($allcate as $cate) { ?>
    <div class="card-body">
        <h5 class="card-title"><?php echo $cate['libelle'] ?></h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
<?php } ?>    
</div>
