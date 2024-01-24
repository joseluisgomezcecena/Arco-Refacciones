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
							<input type="text" id="searchInput" class="form-control form-control-lg"  placeholder="Busca Productos">
							<!--
							<button type="submit" class="btn btn-primary btn-lg">Buscar</button>
							&nbsp;
							-->
						</div>
						<div class="col-lg-12">
							<ul id="searchResults" class="list-group"></ul>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-4 mt-3 mb-3 d-none d-md-block">
				<div class="d-flex justify-content-end">
					<a href="<?php echo base_url() ?>contact" class="btn btn-primary btn-lg">Contacto</a>
				</div>
			</div>
		</div>
	</div>
</div>

<nav class="navbar navbar-expand-lg navbar-light shadow-sm animate__animated animate__fadeIn animate__slow animate__delay-2s">
	<div class="container">
		<a class="navbar-brand" href="<?php echo base_url() ?>">
			<img class="logo" src="<?php echo base_url() ?>assets/front/img/logo1.jpg" alt="" width="250" >
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url() ?>">Inicio</a>
				</li>
				<!--
				<li class="nav-item">
					<a class="nav-link" href="#">Nosotros</a>
				</li>
				-->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Productos
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item font-weight-bolder bold text-primary" href="<?php echo base_url() ?>productos/categoria/todos">Todos Los Productos</a></li>
						<?php foreach ($categories as $category): ?>
							<li>
								<a class="dropdown-item" href="<?php echo base_url() ?>productos/categoria/<?php echo $category['category_slug'] ?>">
									<?php echo $category['parent_name'] ?> | <?php echo $category['category_name'] ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url() ?>sucursales">Sucursales</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url() ?>contact">Contacto</a>
				</li>
			</ul>
		</div>
	</div>
</nav>


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
