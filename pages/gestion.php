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

<body onload="showtbl('vide')">

    </table>

    <br>
    <div class="container">
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

        <a href="javascript:showtbl('chaud');">Chaud</a>
        <a href="javascript:showtbl('froid');">Froid</a>
        <table class="table table-striped table-hover" id="tbl_product">


        </table>
    </div>

    <script type="text/javascript">
        function showtbl(filter) {

            $('#tbl_product').html("")

            $.ajax({
                url: 'pages/tbl_prd_ajax.php?filter=' + filter,
                dataType: 'html',
                cache: false,
                type: "GET",
                success: function(url) {
                    $('#tbl_product').append(url);
                }
            })

        }
    </script>