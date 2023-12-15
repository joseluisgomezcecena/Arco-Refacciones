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
					<h4 class="card-title">Categorias</h4>
					<p class="card-text">Crea categorias y asígnalas a tus productos.</p>

					<?php echo form_open_multipart(base_url() . "categories/store")?>

					<div class="form-group">
						<label for="step">Categoria Principal</label>
						<select class="form-control" name="parent" required>
							<option value="">Selecciona una categoria</option>
							<?php foreach ($parent_categories as $parent_category): ?>
								<option value="<?php echo $parent_category['parent_id'] ?>"><?php echo $parent_category['parent_name'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<div class="form-group">
						<label for="step">Nombre de la categoria</label>
						<input type="text" class="form-control" name="name">
					</div>

					<!--product image-->
					<div class="form-group">
						<label for="step">Imagen de categoria</label>
						<input type="file"  name="userfile">
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

					<table class="table" id="#data-table">
						<thead>
							<tr>
								<td>ID</td>
								<td>Principal</td>
								<td>Categoria</td>
								<td>Imagen</td>
								<td>Acciones</td>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($categories as $category): ?>
								<tr>
									<td><?php echo $category['category_id'] ?></td>
									<td><?php echo $category['parent_name'] ?></td>
									<td><?php echo $category['category_name'] ?></td>
									<td>
										<?php if($category['category_image'] == 'noimage.jpg'): ?>
											<img width="124" class="img-fluid img-thumbnail  hoverable" src="<?php echo base_url() ?>assets/front/img/logonb.png" alt="noimage.jpg">
										<?php else: ?>
											<img width="124" class="img-fluid img-thumbnail  hoverable" src="<?php echo base_url() ?>assets/uploads/<?php echo $category['category_image'] ?>" alt="<?php echo $category['category_image'] ?>">
										<?php endif; ?>
									</td>
									<td>
										<a href="<?php echo base_url() ?>admin/categories/edit/<?php echo $category['category_id'] ?>" class="btn btn-primary">Editar</a>
										<a href="<?php echo base_url() ?>admin/categories/delete/<?php echo $category['category_id'] ?>" class="btn btn-danger">Eliminar</a>
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



