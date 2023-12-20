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


		<div class="col-lg-4">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Usuarios</h4>
					<p class="card-text">Registra los usuarios que tendran acceso al panel de administrador.</p>

					<?php echo form_open_multipart(base_url() . "users/register")?>

					<div class="form-group">
						<label for="step">Nombre de Usuario</label>
						<input type="text" class="form-control" name="user_name">
					</div>

					<div class="form-group">
						<label for="step">Contraseña</label>
						<input type="password" class="form-control" name="user_password">
					</div>

					<button type="submit" class="btn btn-primary">Guardar</button>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div>

		<div class="col-lg-8">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Lista</h4>
					<p class="card-text">Esta es una lista de las categorias disponibles.</p>

					<table class="table" id="data-table">
						<thead>
						<tr>
							<td>ID</td>
							<td>Usuario</td>
							<td>Acciones</td>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($users as $user): ?>
							<tr>
								<td><?php echo $user['user_id'] ?></td>
								<td><?php echo $user['user_name'] ?></td>
								<td>
									<a href="<?php echo base_url() ?>admin/users/edit/<?php echo $user['user_id'] ?>" class="btn btn-primary">Editar</a>
									<a href="<?php echo base_url() ?>admin/users/delete/<?php echo $user['user_id'] ?>" class="btn btn-danger">Eliminar</a>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>

				</div>
			</div>
		</div>

	</div>
</div>



