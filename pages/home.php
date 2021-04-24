<div class="container">

    <div class="bg-image">

    </div>

    <button onclick="affInfo(1);">Chaud</button>
<button onclick="affInfo(2);">Froid</button>

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

    

</div>