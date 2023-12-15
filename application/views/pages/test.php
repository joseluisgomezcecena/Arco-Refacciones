<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Your Bootstrap Site</title>
    <style>
        /* Add your custom styles here */
		.banner{
			background-image: url('https://source.unsplash.com/1600x900/?nature,water');
			background-size: cover;
			background-position: center;
			height: 60vh;
		}

		#id{
			width: 100px !important;
		}

		.bottom-shadow {
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
			border-bottom: 1px #f3f0f0 solid
		}

		@media (max-width: 767px) {
			.spacing{
				margin-top: 458px;
			}

			.img-carousel{
				display: none !important;
			}

		}

		@media (min-width: 768px) {
			.spacing{
				margin-top: 300px;
			}

		}

		.img-carousel{
			width: 220px !important;
		}

		.gradient-text {
			background-image: linear-gradient(45deg, #3498db 0%, #2980b9 5%, #e74c3c 20%, #c0392b 30%, #e74c3c 100%);
			-webkit-background-clip: text;
			color: transparent;
			font-size: 36px;
			font-weight: 800;
			letter-spacing: 2px;
		}

		.hover-text {
			background-image: linear-gradient(45deg, #3498db 0%, #2980b9 5%, #067de1 20%, #031993 30%, #e74c3c 100%);
			-webkit-background-clip: text;
			color: transparent;
			font-size: 36px;
			font-weight: 800;
			letter-spacing: 2px;
			transition: color 0.3s cubic-bezier(0.68, -0.55, 0.27, 1.55); /* Use a cubic bezier curve for a smoother transition */
		}

		.hover-text:hover {
			background-image: linear-gradient(45deg, #db9334 0%, #f6bc02 5%, #ff6d2e 20%, #c20225 30%, #e74c3c 100%);
		}

		.title-custom{
			font-weight: 800;
			padding-top: 20px;
		}

		.card-img-custom{
			height: 220px !important;
			object-fit: cover;
			border-top-left-radius: 25px !important;
			border-top-right-radius: 25px !important;
			overflow: hidden;
		}

		.custom-card {
			border-radius: 25px !important;
			transition: transform 0.3s ease; /* Apply a smooth transition effect on the transform property */
		}

		.custom-card:hover {
			transform: scale(1.1); /* Increase the size on hover */
		}

		footer {
			background-color: #343a40;
			color: #ffffff;
			padding: 40px 0;
			margin-top: 50px;
		}

		.footer-column {
			margin-bottom: 20px;
		}

		.footer-column h5 {
			color: #fff;
		}

		.footer-title
		{
			font-weight: 800;
			margin-bottom: 25px;
		}

    </style>
</head>
<body>

<!-- Navigation -->
<div class="bg-light bottom-shadow">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">

			</div>
			<div class="col-lg-4">
				<form action="">
					<div class="col-sm-12 mt-3 mb-3">
						<label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
						<div class="input-group">
							<div class="input-group-text">
								<img width="20" height="20" src="https://img.icons8.com/ios/50/search--v1.png" alt="search--v1"/>
							</div>
							<input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Busca Productos">
							<button type="submit" class="btn btn-primary">Buscar</button>
							&nbsp;
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-4 mt-3 mb-3 d-none d-md-block">
				<div class="d-flex justify-content-end">
					<a href="#" class="btn btn-primary">Contacto</a>
				</div>
			</div>
		</div>
	</div>
</div>

<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img class="logo" src="<?php base_url() ?>assets/front/img/logo1.jpg" alt="" width="200" >
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Services
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Service 1</a></li>
						<li><a class="dropdown-item" href="#">Service 2</a></li>
						<li><a class="dropdown-item" href="#">Service 3</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>


<!-- Banner Section -->
<header class="banner bg-primary text-white text-center py-5">
    <h1>Your Website</h1>
    <p>Awesome Tagline Goes Here</p>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div  class="tomorrow"
					  data-location-id="072099"
					  data-language="EN"
					  data-unit-system="METRIC"
					  data-skin="light"
					  data-widget-type="upcoming"
					  style="padding-bottom:22px; padding-top:220px; position:relative;"
				>
					<a
							href="https://www.tomorrow.io/weather-api/"
							rel="nofollow noopener noreferrer"
							target="_blank"
							style="position: absolute; bottom: 0; transform: translateX(-50%); left: 50%;"
					>
						<img
								alt="Powered by the Tomorrow.io Weather API"
								src="https://weather-website-client.tomorrow.io/img/powered-by.svg"
								width="1"
								height="1"
						/>
					</a>
				</div>
			</div>
			<div class="col-lg-8">

			</div>
		</div>
	</div>

</header>



<!-- Offcanvas Menu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <!-- Add more items as needed -->
        </ul>
    </div>
</div>

<!-- Your Content Goes Here -->
<section id="nosotros">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="spacing"></div>
			</div>
			<div class="col-lg-8 mt-5">
				<h2 class="hover-text">Nosotros</h2>
				<p class="text-justify">
					En Aislantes rejillas y controles somos una empresa con 12 años de experiencia,
					especializada en la venta de refacciones y materiales para instalación de aire
					acondicionado, refrigeración y ventilación.<br>
					Contamos con una amplia variedad de productos de marcas reconocidas a precios muy
					competitivos, lo que nos permite proporcionar a nuestros clientes todo lo que
					necesitan para una efectiva ejecución de sus proyectos.<br><br>
					Las alianzas comerciales con nuestros proveedores y la confianza de nuestros clientes
					en nuestro servicio son puntos importantes que nos caracterizan.
					<br><br>
					Para la ciudad de Mexicali contamos con 2 unidades de reparto, con la finalidad de
					hacer llegar a cualquier punto de Mexicali sus requerimientos.
				</p>
			</div>
		</div>
	</div>
</section>

<section class="mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2 class="hover-text">Misión</h2>
				<p class="text-justify">
					Satisfacer las necesidades de refrigeración y aire acondicionado de nuestros
					clientes, innovando el modo de atención y brindando una asesoría
					sobresaliente.
				</p>
			</div>
			<div class="col-lg-6">
				<h2 class="hover-text">Visión</h2>
				<p class="text-justify">
					Sobresalir en el mercado revolucionando el modelo de refaccionarias de
					refrigeración y aire acondicionado logrando posicionarnos a nivel local, estatal,
					regional y nacional, creando herramientas y servicios, que permitan lazos más
					fuertes con nuestros clientes, mediante un esfuerzo en conjunto con nuestros
					proveedores Nacionales e Internacionales.
				</p>
			</div>
		</div>
	</div>
</section>

<section class="bg-primary pb-5">
	<div class="container">
		<h2 class="text-white mb-5 title-custom">Líneas de productos</h2>

		<div class="row row-cols-1 row-cols-md-3 g-4 mt-3 mb-5">
			<div class="col">
				<div class="card custom-card h-100">
					<img  src="<?php echo base_url() ?>assets/front/img/invotech.png" class="card-img-top card-img-custom" alt="Refacciones">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card h-100 custom-card">
					<img src="<?php echo base_url() ?>assets/front/img/parker.png" class="card-img-top card-img-custom" alt="Mantenimiento">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a short card.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="custom-card card h-100">
					<img src="<?php echo base_url() ?>assets/front/img/cobre.png" class="card-img-top card-img-custom" alt="Obras Nuevas">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section>
	<div class="container">
		<!-- Bootstrap Carousel -->
		<div id="brandCarousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<!-- Brand Slide 1 -->
				<div class="carousel-item active">
					<div class="row text-center">
						<div class="col-md-3">
							<img src="<?php echo base_url() ?>assets/front/img/trane-logo-svg-vector.svg" class="d-block brand-logo img-fluid img-carousel" alt="Trane" >
						</div>
						<div class="col-md-3">
							<img src="<?php echo base_url() ?>assets/front/img/carrier-01.png" class="d-block brand-logo img-fluid img-carousel" alt="Carrier Corporation" >
						</div>
						<div class="col-md-3">
							<img src="<?php echo base_url() ?>assets/front/img/york-1-logo-png-transparent.png" class="d-block brand-logo img-fluid img-carousel" alt="Carrier Corporation" >
						</div>
						<div class="col-md-3">
							<img src="<?php echo base_url() ?>assets/front/img/emerson-01.png" class="d-block brand-logo img-fluid img-carousel" alt="Carrier Corporation">
						</div>
					</div>
				</div>
				<!-- Brand Slide 2 -->
				<div class="carousel-item">
					<div class="row text-center">
						<div class="col-md-3">
							<img src="<?php echo base_url() ?>assets/front/img/daikin-01.svg" class="d-block brand-logo img-fluid img-carousel" alt="Carrier Corporation" >
						</div>
						<div class="col-md-3">
							<img src="<?php echo base_url() ?>assets/front/img/truper-01.png" class="d-block brand-logo img-fluid img-carousel" alt="Carrier Corporation" >
						</div>
						<div class="col-md-3">
							<img src="<?php echo base_url() ?>assets/front/img/owens-01.png" class="d-block brand-logo img-fluid img-carousel" alt="Carrier Corporation" >
						</div>
						<div class="col-md-3">
							<img src="<?php echo base_url() ?>assets/front/img/nu-calgon-01.png" class="d-block brand-logo img-fluid img-carousel" alt="Carrier Corporation" >
						</div>
					</div>
				</div>
				<!-- Add more slides for additional brands -->

				<!-- Navigation Arrows -->
				<button class="carousel-control-prev" type="button" data-bs-target="#brandCarousel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#brandCarousel" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
	</div>
</section>


<footer class="bg-dark py-5">
	<div class="container">
		<div class="row pt-5">
			<!-- Column 1 -->
			<div class="col-md-4 footer-column">
				<img src="<?php echo base_url() ?>assets/front/img/logonb.png" alt="" class="img-fluid" width="320">

				<p><b>Direccion Matriz</b></p>
				<p class="mt-2">
					Calzada Cetys #1546 Fraccionamiento Vista Hermosa,<br/> Mexicali, B.C., C.P. 21240
				</p>
			</div>

			<!-- Column 2 -->
			<div class="col-md-4 footer-column">
				<h5 class="footer-title">Column 2</h5>
				<p>This is the content of the second column in the footer.</p>
			</div>

			<!-- Column 3 -->
			<div class="col-md-4 footer-column">
				<h5 class="footer-title">Column 3</h5>
				<p>This is the content of the third column in the footer.</p>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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

</body>
</html>
