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
		</div>



		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Mensajes</h4>
					<p class="card-text">Aqui podras ver todos los mensajes que recibio tu sitio web.</p>

					<table class="table" id="#data-table">
						<thead>
						<tr>
							<td>ID</td>
							<td>Nombre</td>
							<td>Numero</td>
							<td>Correo</td>
							<td>Sucursal</td>
							<td>Mensaje</td>
							<td>Acciones</td>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($messages as $message): ?>
							<tr>
								<td><?php echo $message['message_id'] ?></td>
								<td><?php echo $message['from_name'] ?></td>
								<td><?php echo $message['from_phone'] ?></td>
								<td><?php echo $message['from_email'] ?></td>
								<td><?php echo $message['to_store'] ?></td>
								<td><?php echo $message['message_text'] ?></td>
								<td>
									<a href="<?php echo base_url() ?>admin/categories/edit/<?php echo $message['message_id'] ?>" class="btn btn-primary">Detalles</a>
									<a href="<?php echo base_url() ?>admin/categories/delete/<?php echo $message['message_id'] ?>" class="btn btn-danger">Eliminar</a>
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



