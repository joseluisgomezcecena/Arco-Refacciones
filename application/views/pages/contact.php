<section>
	<div class="container-fluid">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3359.030350063174!2d-115.42266892462524!3d32.65863649002694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d771b1583c4637%3A0x327a37cb432ff282!2sARCO%20AISLANTES%2C%20REJILLAS%20Y%20CONTROLES!5e0!3m2!1sen!2sus!4v1702327994970!5m2!1sen!2sus" width="100%" height="450" style="width100%; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="hover-text mt-3 mb-4">Contacto</h1>
				<p class="">Para más información ponte en contacto con nosotros y uno de nuestros asesores te atenderá lo más rápido posible:</p>
				<p><strong>Teléfono:</strong> <a href="tel:+526865672413">(686) 567-2413</a></p>
				<p><strong>Correo electronico:</strong> anahernandez@arcorefacciones.com</p>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-lg-12">
				<h1 class="hover-text mt-3 mb-4">Envia un Mensaje</h1>
				<form id="contactForm" action="<?= base_url('contact/submit_contact'); ?>" method="post">

					<div class="form-group row">
						<div class="col-lg-4">
							<label class="label bold" for="">Nombre</label>
							<input type="text" class="form-control" name="name" placeholder="Nombre">
						</div>
						<div class="col-lg-3">
							<label for="">Correo Electronico</label>
							<input type="email" class="form-control" name="email" placeholder="Correo Electronico">
						</div>
						<div class="col-lg-3">
							<label for="">Teléfono</label>
							<input type="text" class="form-control" name="phone" placeholder="Teléfono">
						</div>
						<div class="col-lg-2">
							<label for="">Sucursal</label>
							<select  class="form-control" name="store" required>
								<option value="">Seleccione una sucursal</option>
								<option value="Mexicali">Mexicali</option>
								<option value="Tijuana">Tijuana</option>
								<option value="Ensenada">Ensenada</option>
								<option value="Peñasco">Puerto Peñasco</option>
							</select>
						</div>
					</div>

					<div class="form-group row mt-2">
						<div class="col-lg-12">
							<label for="">Mensaje</label>
							<textarea name="message" class="form-control" cols="30" rows="10"></textarea>
						</div>
					</div>

					<div class="form-group row mt-3">
						<div class="col-lg-12">
							<button type="submit" class="btn btn-primary">Enviar Mensaje</button>
						</div>
					</div>

					<!-- Message container -->
					<div id="messageContainer"></div>

				</form>
			</div>
		</div>

	</div>
</section>


<div class="cta mt-5">
	<div class="container">
		<h2>Tenemos más sucursales!</h2>
		<p>Conoce todas nuestras sucursales, estamos trabajando para estar más cerca de ti.</p>
		<a href="#" class="btn btn-primary btn-lg">Conoce Nuestras Sucursales</a>
	</div>
</div>

<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
<script>
	var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"Manda Un WhatsApp","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"526862428934","welcomeMessage":"Gracias por ponerte en contacto con Arco!","zIndex":999999,"btnColorScheme":"light"};
	window.onload = () => {
		_waEmbed(wa_btnSetting);
	};
</script>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="titleModal">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<p id="bodyModal"></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
