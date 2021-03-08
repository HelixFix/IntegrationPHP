<?php

$db = new PDO('mysql:host=localhost;dbname=cours_php', 'root', '');

$trans = array("," => ".", " " => "");
// remplace les virgules par des points et remplace les espaces par rien

if (isset($_POST['subprd'])) { // Si il y a un submit
    // echo $_POST['nomprd'];
    // echo '<br>';
    // echo $_POST['prixprd'];
    // echo '<br>';
    // echo $_POST['descrprd'];

    if ($_POST['idprd'] > 0) { // Si ID supérieur à 0 on modifie un produit

        $requete = "UPDATE `produits` 
        SET `nom`= '" .addslashes($_POST['nomprd']) . "',`description` = '" .addslashes($_POST['descrprd']) . "', `prix` = '" . strtr($_POST['prixprd'], $trans) . "' 
        WHERE `id_produit` = " . $_POST['idprd'];

        // addslashes echappe les apostrophes et guillements

        $db->query($requete); // Exécute la requete

        echo "Votre produit est maintenant dans la base.<br>";


    } else { // Sinon on fait une insertion

        $requete = "INSERT INTO `produits`( `nom`, `description`, `prix`) 
        VALUES ('" .addslashes($_POST['nomprd']) . "','" .addslashes($_POST['descrprd']) . "', '" . strtr($_POST['prixprd'], $trans) . "')";

        $db->query($requete); // Exécute la requete

        echo "Votre produit est maintenant dans la base.<br>";
    }

    echo "<a href='index.php?page=produits'>Retour à la liste.</a>";
}
// Test si un idprd dans l'url
if (isset($_GET['idprd'])) {

    // SELECTION des informations du produit ayant id_produit = $_GET[`ìdprd`]
    echo $requete = "SELECT * FROM `produits` WHERE `id_produit` = ".$_GET['idprd'];
    $result = $db->query($requete);
    $tblresult = $result->fetchAll();

    // affiche le type de contenu d'une variable
    //var_dump($tblresult);
}


?>

<section class="border p-4 text-center mb-4">
    <form method="post" action="">

        <!-- 2 column grid layout with text inputs for the first and last names -->


        <!-- ID input -->
        <div class="form-outline mb-4">
            <input type="text" name="idprd" readonly="readonly" id="form6Example3" class="form-control" value="<?php if (isset($_GET['idprd'])) echo $_GET['idprd']; ?>">
            <label class="form-label" for="form6Example3" style="margin-left: 0px;">ID du produit<label>
                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 97.6px;"></div>
                        <div class="form-notch-trailing"></div>
                    </div>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="text" name="nomprd" id="form6Example3" class="form-control" required value="<?php if (isset($_GET['idprd']))  echo stripslashes($tblresult[0]['nom']); ?>"> <!-- stripslashes pour ne pas afficher les slash -->
            <label class="form-label" for="form6Example3" style="margin-left: 0px;">Nom du produit<label>
                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 97.6px;"></div>
                        <div class="form-notch-trailing"></div>
                    </div>
        </div>

        <!-- Number input -->
        <div class="form-outline mb-4">
            <input type="number" name="prixprd"  id="form6Example6" class="form-control" required value="<?php if (isset($tblresult))  echo number_format($tblresult[0]['prix'], 2, ',', ' '); ?>">
            <label class="form-label" for="form6Example6" style="margin-left: 0px;">Prix</label>
            <div class="form-notch">
                <div class="form-notch-leading" style="width: 9px;"></div>
                <div class="form-notch-middle" style="width: 44px;"></div>
                <div class="form-notch-trailing"></div>
            </div>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
            <textarea class="form-control" name="descrprd" id="form6Example7" rows="4" ><?php if (isset($tblresult))  echo stripslashes($tblresult[0]['description']); ?></textarea>
            <label class="form-label" for="form6Example7" style="margin-left: 0px;">Description</label>
            <div class="form-notch">
                <div class="form-notch-leading" style="width: 9px;"></div>
                <div class="form-notch-middle" style="width: 135.2px;"></div>
                <div class="form-notch-trailing"></div>
            </div>
        </div>

        <!-- Submit button -->
        <button type="submit" name="subprd" class="btn btn-primary btn-block mb-4">Enregistrer</button>
    </form>
</section>


<?php 

$date_form = "24/02/2021"; // BDD 1970-01-01
$mydate = explode('/', $date_form); // array("24", "02", "2021")

$date_bdd = $mydate[2]."-".$mydate[1]."-".$mydate[0]; // 2021-02-24

date('Y-m-d H:i:s'); // YYYY-MM-DD HH:mm:ss
date('Hi-md?Ys'); //1013-0224?202136
date('YmdHis'); //20210224101636


$date_aff = date('d/m/Y', strtotime($date_bdd)); // 24/02/2021

?>