<?php
$db = new PDO('mysql:host=localhost;dbname=cours_php', 'root', '');

if ($_GET['idprd'] == 1) { ?>

    <?php


    $requete = "SELECT * FROM `produits` WHERE type = 'chaud'";
    $tblWebinaire = $db->query($requete); // Enregistre la requete efectuer sur la db dans une variable
    // var_dump($tblWebinaire);
    ?>

    <form method="post" action="index.php?page=produits">

        <select name="selectProduit" class="browser-default custom-select">
            <option value="chaud">Chaud</option>
        </select>
        <button type="submit" name="subrche" class="btn btn-primary">
            <em class="fas fa-search"></em>
        </button>


    </form>
<?php }

if ($_GET['idprd'] == 2) {

    $requete = "SELECT * FROM `produits` WHERE type = 'froid'";
    $tblWebinaire = $db->query($requete); // Enregistre la requete efectuer sur la db dans une variable
    // var_dump($tblWebinaire);
?>

    <form method="post" action="index.php?page=produits">

        <!-- <select name="selectProduit" class="browser-default custom-select">
            <option selected>Open this select menu</option>
            <?php while ($ligne = $tblWebinaire->fetch()) { ?>
            <option value="<?php echo $ligne['id_produit'] ?>"><?php echo $ligne['nom'] ?></option>
     <?php } ?> -->
        <select name="selectProduit" class="browser-default custom-select">
        
            <option value="froid">Froid</option>
            

        </select>
        <button type="submit" name="subrche" class="btn btn-primary">
            <em class="fas fa-search"></em>
        </button>


    </form>
<?php } ?>