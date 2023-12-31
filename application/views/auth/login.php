<div class="container">
	<div class="row mt-5">
		<div class="col-lg-6 offset-3 text-center">
			<?php if($this->session->flashdata('errors')): ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Authentication Error</strong>
					<?php echo $this->session->flashdata('errors'); ?>.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>

			<?php echo validation_errors(); ?>
		</div>
	</div>
</div>

<div class="container">
	<div class="row mt-5">
		<div class="col-lg-6 offset-lg-3">
			<div style="min-height: 400px" class="card">
				<div class="card-body">

					<div class="text-center">
						<img src="<?php echo base_url(); ?>assets/front/img/logonb.png" alt="logo" class="img-fluid text-center align-items-center" width="250">
					</div>

					<h2 class="m-t-20 font-weight-bolder fw-bolder">Inicia Sesión</h2>
					<p class="m-b-30">Ingresa tus credenciales para acceder al panel de administración.</p>

					<?php echo form_open_multipart(base_url() . "auth/login")?>
					<div class="form-group">
						<label class="font-weight-semibold" for="userName">Usuario:</label>
						<div class="input-affix">
							<i class="prefix-icon anticon anticon-user"></i>
							<input type="text" class="form-control" name="username" id="userName" placeholder="Usuario">
						</div>
					</div>
					<div class="form-group">
						<label class="font-weight-semibold" for="password">Contraseña:</label>
						<div class="input-affix m-b-10">
							<i class="prefix-icon anticon anticon-lock"></i>
							<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
						</div>
						<a class="float-right font-size-13 text-muted" href="#">
							Olvidaste tu contraseña?
						</a>
					</div>
					<div class="form-group">
						<div class="d-flex align-items-center justify-content-between">
							<button type="submit" class="btn btn-primary">Inicia Sesión</button>
						</div>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
