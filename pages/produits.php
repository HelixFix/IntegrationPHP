<?php if (!isset($_POST['subrche'])) {
    $requete = "SELECT * FROM `produits`";
    $tblWebinaire = $db->query($requete); // Enregistre la requete efectuer sur la db dans une variable
    // var_dump($tblWebinaire);
?>

    <div class="container">
        <div class="row" ">
            <?php
            while ($ligne = $tblWebinaire->fetch()) {
                // var_dump($ligne)
                // $date = utf8_encode(strftime("%A %d %B %G", strtotime($ligne['date'])));

            ?>


                <div class="col-lg-4 col-md-6 col-sm-6 col-12">


                    <div class="card">
                        <img class="card-img-top" src="https://loremflickr.com/640/360" alt="Card image cap">

                        <div class="card-body">
                            <!-- <p class=""><small class="text-muted">Diffusé le <?php echo $date ?></small></p> -->

                            <h3 class="card-title"><?php echo $ligne['nom'] ?></h3>

                            <p class="card-text clamp" onclick="(function(){classList.toggle('clamp')})()" ?><?php echo $ligne['description'] ?>
                            </p>

                            <a target="_blank rel=noopener" href="index.php?page=contact" class="btn btnHome">contact</a>
                            <a target="_blank rel=noopener" href="index.php?page=produits&id=<?php echo $ligne['id_produit']; ?>" class="btn btnHome">détails</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>



    </div>

<?php } else {
    $requete = "SELECT * FROM `produits` WHERE id_produit = " . $_POST['selectProduit'];
    $tblWebinaire = $db->query($requete); // Enregistre la requete efectuer sur la db dans une variable
    // var_dump($tblWebinaire);
    $ligne = $tblWebinaire->fetch()
?>

    <div class="container">

        <div class="row">
           


                <div id="left" class="col-lg-8 col-md-8 col-sm-8 col-8">
                    <div class="titre"><?php echo $ligne['nom'] ?></div>
                    <div class="photo">
                        <img src="images/placeholder.png" alt="" class="large">
                    </div>
                    <div class="miniatures">
                        <img src="images/placeholder.png" alt="..." class="img-thumbnail small">
                        <img src="images/placeholder.png" alt="..." class="img-thumbnail small">
                        <img src="images/placeholder.png" alt="..." class="img-thumbnail small">
                        <img src="images/placeholder.png" alt="..." class="img-thumbnail small">
                    </div>
                    <div class="descriptif"><?php echo $ligne['description'] ?>
                </div>
                





                </div>

                <div id="right" class="col">
                    <div class="caracteristique">
                        <div>Prix : <?php echo $ligne['prix'] ?></div>

                        <div>Type : <?php echo $ligne['type'] ?></div>

                        <div>Etat : <?php echo $ligne['etat'] ?></div>
                        
                    </div>
                </div>
          
        </div>



    </div>

    <div class="grid-container">


    </div>








<?php } ?>