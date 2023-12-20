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
					<h4 class="card-title">Productos</h4>
					<p class="card-text">Crea productos estos se veran reflejados en tu sitio web.</p>

					<?php echo form_open_multipart(base_url() . "products/store")?>

					<div class="form-group">
						<label for="step">Nombre del producto</label>
						<input type="text" class="form-control" name="name">
					</div>

					<div class="form-group">
						<label for="step">Descripción del producto</label>
						<input type="text" class="form-control" name="description">
					</div>

					<!-- Multiple select boxes -->
					<div class="form-group">
						<label for="">Categoria(s)</label>
						<select style="width: 100%" class="select2" name="categories[]" multiple="multiple">
							<?php foreach ($categories as $category): ?>
								<option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<!--product image-->
					<div class="form-group">
						<label for="step">Imagen del producto</label>
						<input type="file"  name="userfile">
					</div>

					<div class="form-group">
						<label for="step">Agregar a pagina principal?</label>
						<select  class="form-control" name="homepage">
							<option value="0">No</option>
							<option value="1">Si</option>
						</select>
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
					<p class="card-text">Esta es una lista de los products disponibles.</p>

					<table class="table" id="data-table">
						<thead>
							<tr>
								<td>ID</td>
								<td>Categoria</td>
								<td>Producto</td>
								<td>Imagen</td>
								<td>Acciones</td>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($products as $product): ?>
								<tr>
									<td><?php echo $product['product_id'] ?></td>
									<td><?php echo $product['category_name'] ?></td>
									<td><?php echo $product['product_name'] ?></td>
									<td>
										<?php if($product['product_image'] == 'noimage.jpg'): ?>
											<img width="124" class="img-fluid img-thumbnail  hoverable" src="<?php echo base_url() ?>assets/front/img/logonb.png" alt="noimage.jpg">
										<?php else: ?>
										<img width="124" class="img-fluid img-thumbnail  hoverable" src="<?php echo base_url() ?>assets/uploads/<?php echo $product['product_image'] ?>" alt="<?php echo $product['product_image'] ?>">
										<?php endif; ?>
									</td>
									<td>
										<a href="<?php echo base_url() ?>admin/products/edit/<?php echo $product['product_id'] ?>" class="btn btn-primary">Editar</a>
										<a href="<?php echo base_url() ?>admin/products/delete/<?php echo $product['product_id'] ?>" class="btn btn-danger">Eliminar</a>
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



