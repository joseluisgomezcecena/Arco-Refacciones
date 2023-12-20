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

					<table class="table" id="data-table">
						<thead>
						<tr>
							<td>Campo</td>
							<td>Contenido</td>
						</tr>
						</thead>
						<tbody>

							<tr>
								<td>ID</td>
								<td><?php echo $message['message_id'] ?></td>
							</tr>
							<tr>
								<td>Nombre</td>
								<td><?php echo $message['from_name'] ?></td>
							</tr>
							<tr>
								<td>Telefono</td>
								<td><?php echo $message['from_phone'] ?></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><?php echo $message['from_email'] ?></td>
							</tr>
							<tr>
								<td>Sucursal</td>
								<td><?php echo $message['to_store'] ?></td>
							</tr>
							<tr>
								<td>Mensaje</td>
								<td><?php echo $message['message_text'] ?></td>
							</tr>
							    <td>Fecha</td>
								<td><?php echo $message['date'] ?></td>
							</tr>

						</tbody>
					</table>

				</div>
			</div>
		</div>

	</div>
</div>



