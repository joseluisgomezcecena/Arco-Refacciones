<footer class="bg-dark py-2">
	<div class="container">
		<div class="row pt-3">
			<!-- Column 1 -->
			<div class="col-md-4 footer-column text-decoration-none">
				<img src="<?php echo base_url() ?>assets/front/img/logonb.png" alt="" class="img-fluid" width="320">

				<p><b>Matriz</b></p>
				<p class="mt-2">
					Calzada Cetys #1546 Fraccionamiento Vista Hermosa,<br/> Mexicali, B.C., C.P. 21240
					<br>
					<a class="text-decoration-none text-white" href="mailto:matriz@arcorefacciones.com">matriz@arcorefacciones.com</a><br>
					<a class="text-decoration-none text-white" href="tel:(686)567-2413">(686)567-2413</a>
				</p>
			</div>

			<!-- Column 2 -->
			<div class="col-md-4 footer-column">
				<h5 class="footer-title">Nuestras Redes Sociales</h5>
				<p>Síguenos! En redes sociales.</p>
				<a href="https://www.facebook.com/profile.php?id=100063782362833"><i class="fa-brands fa-facebook-f fa-2x facebook-hover"></i></a>
			</div>

			<!-- Column 3 -->
			<div class="col-md-4 footer-column">
				<h5 class="footer-title">Navegación</h5>
				<a class="text-decoration-none text-white" href="<?php echo base_url() ?>">Inicio.</a><br>
				<a class="text-decoration-none text-white" href="<?php echo base_url() ?>productos/categoria/todos">Productos.</a><br>
				<a class="text-decoration-none text-white" href="<?php echo base_url() ?>sucursales">Sucursales.</a><br/>
				<a class="text-decoration-none text-white" href="<?php echo base_url() ?>contacto">Contacto.</a><br/>
			</div>
		</div>
	</div>
</footer>
<div class="container-fluid bg-black">
	<div class="row py-3">
		<div class="col-12 text-center">
			<p class="text-white-50">© Arco aislantes, rejillas y controles. <?php echo date("Y"); ?> All Rights Reserved.</p>
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
	(function(d, s, id) {
		if (d.getElementById(id)) {
			if (window.__TOMORROW__) {
				window.__TOMORROW__.renderWidget();
			}
			return;
		}
		const fjs = d.getElementsByTagName(s)[0];
		const js = d.createElement(s);
		js.id = id;
		js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";

		fjs.parentNode.insertBefore(js, fjs);
	})(document, 'script', 'tomorrow-sdk');
</script>

<script>
	/*
	$(document).ready(function() {
		$('#searchInput').keyup(function() {
			let query = $(this).val();

			// Check if the query is empty
			if (query.trim() === '') {
				// Clear the results if the query is empty
				clearResults();
				return;
			}

			// Perform AJAX request to the CodeIgniter controller
			$.ajax({
				url: 'index.php/searchController/autocomplete',
				method: 'GET',
				data: { query: query },
				dataType: 'json',
				success: function(data) {
					// Update the search results on success
					displayResults(data);
				}
			});
		});

		function clearResults() {
			let resultList = $('#searchResults');
			resultList.empty();
		}

		function displayResults(results) {
			let resultList = $('#searchResults');
			resultList.empty();

			// Display results in a list
			results.forEach(function(result) {
				// Ensure that the 'name' property exists before accessing it
				if (result.hasOwnProperty('product_name')) {
					resultList.append('<li class="list-group-item">'  + '<a href="<?php base_url() ?>productos/'+ result.product_name+'">' + result.product_name +'</a>'+ '</li>');
				} else {
					console.error('Result does not have a "name" property:', result);
				}
			});
		}
	});
	*/
</script>


<script>
	$(document).ready(function() {
		$('#searchInput').keyup(function() {
			let query = $(this).val();

			// Check if the query is empty
			if (query.trim() === '') {
				// Clear the results if the query is empty
				clearResults();
				return;
			}

			// Perform AJAX request to the CodeIgniter controller
			$.ajax({
				//url: 'index.php/searchController/autocomplete',
				url: '<?php echo base_url() ?>searchController/autocomplete',
				method: 'GET',
				data: { query: query },
				dataType: 'json',
				success: function(data) {
					// Update the search results on success
					displayResults(data);
				}
			});
		});

		// Close search results when clicking outside
		$(document).on('click', function(event) {
			if (!$(event.target).closest('#searchInput, #searchResults').length) {
				clearResults();
			}
		});

		function clearResults() {
			let resultList = $('#searchResults');
			resultList.hide().empty();
		}

		function displayResults(results) {
			let resultList = $('#searchResults');
			resultList.empty();

			// Display results in a list
			results.forEach(function(result) {
				// Ensure that the 'name' property exists before accessing it
				if (result.hasOwnProperty('product_name')) {

					let imageUrl = result.product_image === 'noimage.jpg' ? '<?php echo base_url() ?>assets/front/img/logonb.png' : '<?php echo base_url() ?>assets/uploads/' + result.product_image;


					resultList.append('<li class="list-group-item">'  +'<img class="img-fluid img-thumbnail" width="100" src="' + imageUrl + '" />' + '  <a href="<?php echo base_url() ?>producto/'+ result.slug+'">' + result.product_name +'</a>'+ '</li>');
				} else {
					console.error('Result does not have a "name" property:', result);
				}
			});

			// Show the results container
			resultList.show();
		}
	});
</script>

<script>
	$(document).ready(function () {
		// Submit the form using Ajax
		$("#contactForm").submit(function (e) {
			e.preventDefault();

			$.ajax({
				type: "POST",
				url: $(this).attr('action'),
				data: $(this).serialize(),
				dataType: 'json',
				success: function (response) {
					if (response.status === 'success') {
						//alert(response.message);
						//$("#messageContainer").html('<div class="success-message">' + response.message + '</div>');
						$('#exampleModal').modal('show');
						$('#titleModal').html('Mensaje enviado');
						$('#bodyModal').html('Gracias por contactarnos, en breve nos pondremos en contacto con usted.');
						// Optionally, reset the form
						 $("#contactForm")[0].reset();
					} else {
						//alert(response.message);
						//$("#messageContainer").html('<div class="error-message">' + response.message + '</div>');
						$('#exampleModal').modal('show');
						$('#titleModal').html('Error');
						$('#bodyModal').html('Error al enviar el mensaje, por favor intente nuevamente.');
					}
				},
				error: function () {
					alert('Error submitting the form.');
				}
			});
		});
	});
</script>


</body>
</html>
