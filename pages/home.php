<?php $requete = "SELECT * FROM `produits` LIMIT 2";
$tblWebinaire = $db->query($requete); // Enregistre la requete efectuer sur la db dans une variable
// var_dump($tblWebinaire);
?>





<div class="container">

	<div class="row body">

		<div class=" bg-image">

		</div>
		<br>
		<br>
		<div class="col-lg-6 col-md-6 col-sm-6 col-6">
			<button onclick="affInfo(1);">Chaud</button>
		</div>
		<div class="col">
			<button onclick="affInfo(2);">Froid</button>
		</div>


	
	<div id="resultframeAJAX">
	</div>
<br>
	<H1>NOUVEAUTES</H1>
	<?php
	while ($ligne = $tblWebinaire->fetch()) {
		// var_dump($ligne)
		// $date = utf8_encode(strftime("%A %d %B %G", strtotime($ligne['date'])));

	?>


		<div class="">

			<div class="card " >
				<div class="row no-gutters">
					<div class="col-md-4">
						<img src="https://loremflickr.com/640/360" class="card-img" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><?php echo $ligne['nom'] ?></h5>
							<p class="card-text"><?php echo $ligne['description'] ?></p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							<a target="_blank rel=noopener" href="index.php?page=contact" class="btn btnHome">contact</a>
                            <a target="_blank rel=noopener" href="index.php?page=details&id=<?php echo $ligne['id_produit']; ?>" class="btn btnHome">détails</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>




	<script>
		function affInfo(idinfo) {
			$('#resultframeAJAX').html('Voila les informations : ' + idinfo);

			$.ajax({
				type: 'GET', // passe en méthode GET
				dataType: 'html',
				cache: false,
				url: 'ajax1.php?idprd=' + idinfo, // Les parametres demander
				success: function(data) {
					$('#resultframeAJAX').html(data);

				}
			});
		}
	</script>