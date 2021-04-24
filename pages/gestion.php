<?php

$db = new PDO('mysql:host=localhost;dbname=cours_php', 'root', '');
//var_dump($db);
//print_r($db->errorInfo());
$requete = "SELECT * FROM `produits` WHERE `deleted_at` > '2020-01-01 00:00:00' OR `deleted_at` IS NULL";

$tblpd = $db->query($requete); // Enregistre la requete efectuer sur la db dans une variable


?>
<!--
Liste des produits<br>
<br>
<a href="index.php?page=formprd">Créer un nouveau produit</a>

<table>
    <tr>
        <th>Actions</th>
        <th>Nom</th>
        <th>Descriptif</th>
        <th>Prix</th>
    </tr>

    -->


<?php

// while ($ligne = $tblpd->fetch()) { 
?>

<tr>
    <!-- <td><a href="index.php?page=formprd&idprd=">Modifier</a> --><?php //echo $ligne['id_produit']; 
                                                                ?></td>
    <td><?php //echo $ligne['nom']; 
        ?></td>
    <td><?php //echo $ligne['description']; 
        ?></td>
    <td><?php //echo $ligne['prix']; 
        ?></td>
</tr>

<?php // } 
?>



</table>

<br>

<div class="table-title">
    <div class="row">
        <div class="col-sm-6">
            <h2>Gestion <b>Produits</b></h2>
        </div>
        <div class="col-sm-6">
            <a href="index.php?page=formprd" class="btn btn-success" data-toggle="modal"><span>Ajout nouveau produit</span></a>
        </div>
    </div>
</div>

<table class="table table-striped table-hover">
    <thead>
        <tr>

            <th>Action</th>
            <th>Nom</th>
            <th>Descriptif</th>
            <th>Prix</th>
        </tr>
    </thead>
    <tbody>
        <?php

        while ($ligne = $tblpd->fetch()) { ?>
            <tr>
                <td><a href="index.php?page=formprd&idprd=<?php echo $ligne['id_produit']; ?>">Modifier</a></td>
                <td><?php echo $ligne['nom']; ?></td>
                <td><?php echo $ligne['description']; ?></td>
                <td><?php echo $ligne['prix']; ?></td>

            </tr>
        <?php } ?>

    </tbody>
</table>


<!-- Je suis sur la page du produit: <b><?php echo $_GET['id']; ?></b> -->