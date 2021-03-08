<?php
// phpinfo();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<h2>Selecteur jquery</h2>
<input type="text" name="nom" value="DUPOND" id="formnom">
<br>
<br>
<button id="btnlire">Lire</button>
<button id="btnassign">Affecter</button>

<script>
	
	// Evenement ecoute au clique
	$('#btnlire').on("click", lireformnom);
	$('#btnassign').on("click", assignformnom);

	


	function lireformnom() {


		// $$('#formnom') selection de l'element qui a pour id formnom
		console.log($('#formnom').val());
	}

	function assignformnom() {
		$('#formnom').val('DURAND');
	}
</script>
<br>
<br>

<hr>

<h2>Ma calculette</h2>
<select name="pets" id="select">
	<option value="">--Choisir le mode de calcul--</option>
	<option value="Multiplication">Multiplication</option>
	<option value="Division">Division</option>
	<option value="Soustraction">Soustraction</option>
	<option value="Addition">Addition</option>

</select>
<br>
<input type="number" name="frtNumber" id="frtNumber">
<input type="number" name="scdNumber" id="scdNumber">

<br>

<button id="btncalcul">Calculer</button>

<br>


<label for="total">Total</label>
<input type="" name="total" id="total" disabled>
<br>
<br>

<hr>

<h3>Correction</h3>

<input type="text" id="first">

<select name="" id="operator">
	<option value="+">+</option>
	<option value="-">-</option>
	<option value="/">/</option>
	<option value="*">*</option>
</select>

<input type="text" id="second">

<input type="text" id="result" disabled>
<br>
<br>
<button id="btn_calc">Calcule</button>

<br>
<hr>
<!-- 1 champ libre pour le premier nombre
1 select (addition, soustraction, multi, divi)
1 champ libre pour le deuxième nombre
1 champ libre pour le résultat
1 bouton pour lancer le calcule -->

<script>
	// alert('test');

	console.log('test');

	//ma calculette
	$('#btncalcul').on("click", calcul);



	// ma calculette
	function calcul() {

		if ($('#select').val() == "Multiplication") {
			$calcul = $('#frtNumber').val() * $('#scdNumber').val();
			$('#total').val($calcul);
			console.log($calcul);

		} else if ($('#select').val() == "Division") {
			$calcul = $('#frtNumber').val() / $('#scdNumber').val();
			$('#total').val($calcul);
			console.log($calcul);
		} else if ($('#select').val() == "Addition") {
			$calcul = parseFloat($('#frtNumber').val()) + parseFloat($('#scdNumber').val());
			$('#total').val($calcul);
			console.log($calcul);
		} else if ($('#select').val() == "Soustraction") {
			$calcul = $('#frtNumber').val() - $('#scdNumber').val();
			$('#total').val($calcul);
			console.log($calcul);
		}

	}


	// Correction
	$('#btn_calc').on("click", calculette);

	function calculette() {
		var nb1 = $('#first').val();
		var nb2 = $('#second').val();

		var oper = $('#operator').val();
		var result = 0;

		switch (oper) {
			case '+':
				result = parseFloat(nb1) + parseFloat(nb2);
				break;
			case '-':
				result = parseFloat(nb1) - parseFloat(nb2);
				break;
			case '/':
				result = parseFloat(nb1) / parseFloat(nb2);
				break;
			case '*':
				result = parseFloat(nb1) * parseFloat(nb2);
				break;
		}

		$('#result').val(result);
	}
</script>

<br>


<!-------------------------------------DEBUT AJAX----------------------------------------->

<H2>AJAX</H2>

<form id="ajaxform" action="">

	Num : <input type="text" name="numtbl"><br>
	<input type="submit" value="Envoyer">

</form>

<script>
	$("#ajaxform").submit(function(e) {
		e.preventDefault();
		$.ajax({
			type    : 'POST',
			url     : 'ajax1.php',           // Les parametres demander
			dataType: 'html',
			cache   : false,
			data    : $(this).serialize(),   // $(this) = $("#ajaxform")
			success : function(data) {
				$('#resultframeAJAX').html(data);
			}
		});

	});
</script>

<br>
<hr>

<button onclick="affInfo(1);">Info 1</button>
<button onclick="affInfo(2);">Info 2</button>

<div id="resultframeAJAX"></div>

<script>
	function affInfo(idinfo) {
		$('#resultframeAJAX').html('Voila les informations : ' + idinfo);

		$.ajax({
			type    : 'GET', // passe en méthode GET
			dataType: 'html',
			cache   : false,
			url     : 'ajax1.php?idprd='+idinfo, // Les parametres demander
			success : function(data) {
				$('#resultframeAJAX').html(data);

			}
		});
	}
</script>



<!--------------------------------------FIN AJAX------------------------------------------>
<br>
<hr>
<br>

<h2>Toggle Class</h2>
<style>
	.onglSelect {
		font-weight: blod;
		text-decoration: underline;
	}
</style>

<div id="ongl1" class="onglSelect">Onglet 1</div>
<div id="ongl2">Onglet 2</div>

<div id="content_ongl1" class="d-block">Je suis le contenu de mon premier onglet</div>
<div id="content_ongl2" class="d-none">Je suis le contenu de mon second onglet</div>

<script>
	$('#ongl1').on("click", aff_ongl1);
	$('#ongl2').on("click", aff_ongl2);

	function aff_ongl1() {
		$('#content_ongl1').toggleClass('d-none');
		$('#content_ongl1').toggleClass('d-block');
		$('#content_ongl2').toggleClass('d-block');
		$('#content_ongl2').toggleClass('d-none');
		$('#ongl1').toggleClass('onglSelect');
		$('#ongl2').toggleClass('onglSelect');
	}

	function aff_ongl2() {
		$('#content_ongl2').toggleClass('d-block');
		$('#content_ongl2').toggleClass('d-none');
		$('#content_ongl1').toggleClass('d-block');
		$('#content_ongl1').toggleClass('d-none');
		$('#ongl2').toggleClass('onglSelect');
		$('#ongl1').toggleClass('onglSelect');
	}
</script>

<br>

<hr>

<br>

<div id="resultframe">

</div>

<button id="btn_info">Infos</button>

<button id="btn_warning">Warning</button>

<button id="btn_error">Error</button>

<button id="btn_success">Success</button>

<script>
	$('#btn_info').on("click", aff_info);
	$('#btn_warning').on("click", aff_warning);
	$('#btn_error').on("click", aff_error);
	$('#btn_success').on("click", aff_success);

	function aff_error() {
		var mess = "<b>Danger</b> Je suis une erreur fatale";
		$('#resultframe').html(mess);
		$('#resultframe').removeClass().addClass('alert alert-danger');
	}

	function aff_warning() {
		var mess = "<b>Attention</b> Je suis un avertissement";
		$('#resultframe').html(mess);
		$('#resultframe').removeClass().addClass('alert alert-warning');
	}

	function aff_info() {
		var mess = "<b>Information</b> Je vous informe";
		$('#resultframe').html(mess);
		$('#resultframe').removeClass().addClass('alert alert-info');
	}

	function aff_success() {
		var mess = "<b>Bravo</b> Tout est conforme";
		$('#resultframe').html(mess);
		$('#resultframe').removeClass().addClass('alert alert-success');
	}
</script>