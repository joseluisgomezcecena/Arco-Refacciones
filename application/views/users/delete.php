<div>
	<div class="row">

		<div class="col-lg-12">
			<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

			<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Operación exitosa!</strong> <?php echo $this->session->flashdata('success'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<?php if ($this->session->flashdata('error')): ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<?php if ($this->session->flashdata('upload_error')): ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Error!</strong> <?php echo $this->session->flashdata('upload_error'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
		</div>


		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Usuarios</h4>
					<p class="card-text">Estas por eliminar al siguiente usuario.</p>

					<?php echo form_open_multipart(base_url() . "users/delete/" . $user['user_id'])?>

					<div class="form-group">
						<label for="step">Nombre de Usuario</label>
						<input type="text" class="form-control" name="user_name" value="<?php echo $user['user_name'] ?>" disabled>
					</div>

					<div class="form-group">
						<label for="step">Contraseña</label>
						<input type="password" class="form-control" name="user_password" disabled>
					</div>

					<button type="submit" name="delete" class="btn btn-danger">Eliminar</button>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div>
	</div>
</div>



