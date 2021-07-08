<?php

$db = new PDO('mysql:host=localhost;dbname=cours_php', 'root', '');
//var_dump($db);
//print_r($db->errorInfo());
$requete = "SELECT * FROM `produits` WHERE `deleted_at` > '2020-01-01 00:00:00' OR `deleted_at` IS NULL";

$tblpd = $db->query($requete); // Enregistre la requete efectuer sur la db dans une variable

$requeteChaud = "SELECT COUNT(*) as total  FROM `produits` WHERE type LIKE 'chaud' ";
$countChaud = $db->query($requeteChaud);

$requeteFroid = "SELECT COUNT(*) as total  FROM `produits` WHERE type LIKE 'froid' ";
$countFroid = $db->query($requeteFroid);

?>

</table>

<br>

<div class="table-title">
    <div class="row">
        <div class="col-sm-6">
            <h2>Gestion <strong>Produits</strong></h2>

            <?php while ($donnees = $countChaud->fetch()) {
                echo '<h3>' . $donnees['total'] . ' produit(s) chaud</h3>';
            } ?>
            <?php while ($donnees = $countFroid->fetch()) {
                echo '<h3>' . $donnees['total'] . ' produit(s) froid</h3>';
            } ?>
        </div>
        <div class="col-sm-6">
            <a href="index.php?page=formprd" class="btn btn-success" data-toggle="modal"><span>Ajout nouveau produit</span></a>

        </div>
    </div>
</div>

<table class="table table-striped table-hover">
<caption>Un tableau de produits</caption>
    <thead>
        <tr>

            <th scope="col">Action</th>
            <th scope="col">Nom</th>
            <th scope="col">Descriptif</th>
            <th scope="col">Prix</th>
            <th scope="col">Type</th>
            <th scope="col">Etat</th>
            <th scope="col">Cat.</th>
        </tr>
    </thead>
    <tbody>
        <?php

        while ($ligne = $tblpd->fetch()) { ?>
            <tr>
                <th scope="row"><a href="index.php?page=formprd&idprd=<?php echo $ligne['id_produit']; ?>">Modifier</a></th>
                <td><?php echo $ligne['nom']; ?></td>
                <td><?php echo $ligne['description']; ?></td>
                <td><?php echo $ligne['prix']; ?></td>
                <td><?php echo $ligne['type']; ?></td>
                <td><?php echo $ligne['etat']; ?></td>
                <td><?php echo $ligne['categorie']; ?></td>

            </tr>
        <?php } ?>

    </tbody>
</table>
