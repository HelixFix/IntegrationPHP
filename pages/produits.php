<?php if (!isset($_POST['subrche'])){
$requete = "SELECT * FROM `produits`";
$tblWebinaire = $db->query($requete); // Enregistre la requete efectuer sur la db dans une variable
// var_dump($tblWebinaire);
?> ?>

<div class="container">
    <div class="row">
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

            <!-- <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="..." class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div> -->

    </div>

        <?php } else{
            
            
            echo $_POST['selectProduit'];
            
            
            
            
            
        }?>
