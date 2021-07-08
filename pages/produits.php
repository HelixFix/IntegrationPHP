<?php if (!isset($_POST['subrche'])) {
    $requete = "SELECT * FROM `produits`";
    $tblWebinaire = $db->query($requete); // Enregistre la requete efectuer sur la db dans une variable
    // var_dump($tblWebinaire);
?>

    <div class="container">
        <div class="row body">
            <h2>Liste des produits</h2>
            <?php
            while ($ligne = $tblWebinaire->fetch()) {
                // var_dump($ligne)
                // $date = utf8_encode(strftime("%A %d %B %G", strtotime($ligne['date'])));

            ?>


                <div class="col-lg-4 col-md-6 col-sm-6 col-12">


                    <div class="card">
                        <img class="card-img-top" src="https://loremflickr.com/640/360" alt="Card image cap">

                        <div class="card-body">

                            <div class="solde2">-7%</div>
                            <h3 class="card-title"><?php echo $ligne['nom'] ?></h3>

                            <p class="card-text clamp" onclick="(function(){classList.toggle('clamp')})()" ?><?php echo $ligne['description'] ?>
                            </p>

                            <a target="_blank rel=noopener" href="index.php?page=contact" class="btn btnHome">contact</a>
                            <a target="_blank rel=noopener" href="index.php?page=details&id=<?php echo $ligne['id_produit']; ?>" class="btn btnHome">détails</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>



    </div>

<?php } else {
    $requete = "SELECT * FROM produits WHERE type = '$_POST[selectProduit]'";
    $tblWebinaire = $db->query($requete); // Enregistre la requete efectuer sur la db dans une variable
    // var_dump($tblWebinaire);


    echo "foo $_POST[selectProduit] bar";
?>

    <div class="container">

        <div class="row">
            <h2>Liste de produits <?php echo $_POST['selectProduit'] ?></h2>

            <?php
            while ($ligne2 = $tblWebinaire->fetch()) {
                // var_dump($ligne)
                // $date = utf8_encode(strftime("%A %d %B %G", strtotime($ligne['date'])));

            ?>


                <div class="col-lg-4 col-md-6 col-sm-6 col-12">



                    <div class="card">
                        <img class="card-img-top" src="https://loremflickr.com/640/360" alt="Card image cap">

                        <div class="card-body">

                            <div class="solde2">-7%</div>
                            <h3 class="card-title"><?php echo $ligne2['nom'] ?></h3>

                            <p class="card-text clamp" onclick="(function(){classList.toggle('clamp')})()" ?><?php echo $ligne2['description'] ?>
                            </p>

                            <a target="_blank rel=noopener" href="index.php?page=contact" class="btn btnHome">contact</a>
                            <a target="_blank rel=noopener" href="index.php?page=details&id=<?php echo $ligne2['id_produit']; ?>" class="btn btnHome">détails</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>



    </div>


<?php } ?>