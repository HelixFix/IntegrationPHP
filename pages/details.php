<?php     
$requete = "SELECT * FROM `produits` WHERE id_produit = " . $_GET['id'];
    $tblWebinaire = $db->query($requete); // Enregistre la requete efectuer sur la db dans une variable
    // var_dump($tblWebinaire);
    $ligne = $tblWebinaire->fetch()
?>

    <div class="container">

        <div class="row body">
           


                <div id="left" class="col-lg-8 col-md-8 col-sm-8 col-8">
                    <h2><?php echo $ligne['nom'] ?></h2>
                    <div class="photo">
                        <img src="images/placeholder.png" alt="" class="large">
                    </div>
                    <div class="miniatures">
                        <img src="images/placeholder.png" alt="..." class="img-thumbnail small">
                        <img src="images/placeholder.png" alt="..." class="img-thumbnail small">
                        <img src="images/placeholder.png" alt="..." class="img-thumbnail small">
                        <img src="images/placeholder.png" alt="..." class="img-thumbnail small">
                    </div>
                    <h4>Description</h4>
                    <div class="descriptif"><?php echo $ligne['description'] ?>
                </div>
                





                </div>

                <div id="right" class="col">
                    <div class="caracteristique">
                    <h3>Caractéristiques</h3>

                    <div>Catégorie : <?php echo $ligne['categorie'] ?></div>


                        <div>Prix : <?php echo $ligne['prix'] ?> €</div>

                        <div>Type : <?php echo $ligne['type'] ?></div>

                        <div>Etat : <?php echo $ligne['etat'] ?></div>
                        
                    </div>
                </div>
          
        </div>



    </div>

    <div class="grid-container">


    </div>