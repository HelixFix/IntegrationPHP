<?php 

// echo $_POST['order'];

$db = new PDO('mysql:host=localhost;dbname=cours_php', 'root', '');
//var_dump($db);
//print_r($db->errorInfo());



if(isset($_GET['filter']) && $_GET['filter'] === 'chaud') {
    $requete = "SELECT * FROM `produits` WHERE `type` = 'chaud' AND (`deleted_at` > '2020-01-01 00:00:00' OR `deleted_at` IS NULL)"; 

} else if (isset($_GET['filter']) && $_GET['filter'] === 'froid') {
    $requete = "SELECT * FROM `produits` WHERE `type` = 'froid' AND (`deleted_at` > '2020-01-01 00:00:00' OR `deleted_at` IS NULL)"; 
}

if(isset($_GET['filter']) && isset($_GET['order'])) {
    $requete = "SELECT * FROM `produits` WHERE `type` = '".$_GET['filter']."' AND (`deleted_at` > '2020-01-01 00:00:00' OR `deleted_at` IS NULL) ORDER BY `prix` ".$_GET['order'].""; 
}


 if ($_GET['filter'] === 'vide' && isset($_GET['order'])) {
    $requete = "SELECT * FROM `produits` WHERE `deleted_at` > '2020-01-01 00:00:00' OR `deleted_at` IS NULL ORDER BY `prix` ".$_GET['order']." "; 
}else if($_GET['filter'] === 'vide') {
    $requete = "SELECT * FROM `produits` WHERE `deleted_at` > '2020-01-01 00:00:00' OR `deleted_at` IS NULL"; 
}



$tblpd = $db->query($requete); // Enregistre la requete efectuer sur la db dans une variable

$requeteChaud = "SELECT COUNT(*) as total  FROM `produits` WHERE type LIKE 'chaud' ";
$countChaud = $db->query($requeteChaud);

$requeteFroid = "SELECT COUNT(*) as total  FROM `produits` WHERE type LIKE 'froid' ";
$countFroid = $db->query($requeteFroid);


?>

<caption>Un tableau de produits</caption>
    <thead>
        <tr>

            <th scope="col">Action</th>
            <th scope="col">Nom</th>
            <th scope="col">Descriptif</th>
            
            <?php if( isset($_GET['order']) && $_GET['order'] != 'desc') {?>
                <th scope="col" style="padding-left:0">
                <button onclick="filterPrice('<?php echo $_GET['filter'] ?>','desc')"  title="Tri descendant" >⬆</button>Prix<?php } ?>  
                
            <?php if( isset($_GET['order']) && $_GET['order'] != 'asc') {?>
                <th scope="col">    
                Prix<button onclick="filterPrice('<?php echo $_GET['filter'] ?>','asc')" title="Tri décroisant">⬇</button>
                <?php } 
                else if (!isset($_GET['order'])) { ?> 
                <th scope="col" style="padding-left:0">
                <button onclick="filterPrice('<?php echo $_GET['filter'] ?>','desc')"  title="Tri descendant">⬆</button> Prix <button onclick="filterPrice('<?php echo $_GET['filter'] ?>','asc')" title="Tri croissant">⬇</button>
                <?php } ?>    
            </th>
            <th scope="col">Type</th>
            <th scope="col">Etat</th>
            <th scope="col">Cat.</th>
        </tr>
    </thead>
    <tbody >


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

    <script type="text/javascript">

    function filterPrice(filter, order) {
   
        $('#tbl_product').html("")

        $.ajax({
                url     : 'pages/tbl_prd_ajax.php?filter='+ filter+'&order='+order,
                dataType: 'html',
                cache   : false,
                type    : "GET",
                success: function(url) {
                    $('#tbl_product').append(url);
                }
            })

    }
</script>