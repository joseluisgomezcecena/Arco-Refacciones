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
					<h4 class="card-title">Eliminando Productos</h4>
					<p class="card-text text-danger">Estas por eliminar el siguiente producto, si estás seguro de hacerlo haz click en el botón de confirmar.</p>

					<?php echo form_open_multipart(base_url() . "products/delete/" . $product['product_id'])?>

					<h1 class="h1"><?php echo $product['product_name'] ?></h1>

					<p><?php echo $product['product_description'] ?></p>

					<?php if($product['product_image'] == 'noimage.jpg'): ?>
						<img width="300" class="img-fluid img-thumbnail  hoverable" src="<?php echo base_url() ?>assets/front/img/logonb.png" alt="noimage.jpg">
					<?php else: ?>
						<img width="300" class="img-fluid img-thumbnail  hoverable" src="<?php echo base_url() ?>assets/uploads/<?php echo $product['product_image'] ?>" alt="<?php echo $product['product_image'] ?>">
					<?php endif; ?>

					<div class="form-group mt-5">
						<label for="">Se encuentra en las siguientes Categorias.</label>
						<select style="width: 100%" class="select2" name="categories[]" multiple="multiple">

							<?php foreach ($categories as $category): ?>
								<option <?php if (in_array($category['category_id'], array_column($product_categories, 'cp_category_id'))) echo "selected" ?> value="<?php echo $category['category_id'] ?>">
									<?php echo $category['category_name'] ?>
								</option>
							<?php endforeach; ?>
						</select>
					</div>


					<button type="submit" name="delete_product" class="btn btn-danger mt-5">Confirmar Eliminación</button>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div>
	</div>
</div>



