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
					<h4 class="card-title">Productos</h4>
					<p class="card-text">Edita y actualiza los productos estos se veran reflejados en tu sitio web.</p>

					<?php echo form_open_multipart(base_url() . "products/edit/" . $product['product_id'])?>

					<div class="form-group">
						<label for="step">Nombre del producto</label>
						<input type="text" class="form-control" name="name" value="<?php echo $product['product_name'] ?>">
					</div>

					<div class="form-group">
						<label for="step">Descripción del producto</label>
						<input type="text" class="form-control" name="description" value="<?php echo $product['product_description'] ?>">
					</div>


					<!-- Multiple select boxes -->
					<div class="form-group">
						<label for="">Categoria(s)</label>
						<select style="width: 100%" class="select2" name="categories[]" multiple="multiple">

							<?php foreach ($categories as $category): ?>
								<option <?php if (in_array($category['category_id'], array_column($product_categories, 'cp_category_id'))) echo "selected" ?> value="<?php echo $category['category_id'] ?>">
									<?php echo $category['category_name'] ?>
								</option>
							<?php endforeach; ?>
						</select>
					</div>

					<!--product image-->
					<div class="form-group">
						<label for="step">Imagen del producto</label>
						<br>
						<?php if($product['product_image'] == 'noimage.jpg'): ?>
							<img width="300" class="img-fluid img-thumbnail" src="<?php echo base_url() ?>assets/front/img/logonb.png" alt="noimage.jpg">
						<?php else: ?>
							<img class="img-thumbnail img-fluid" src="<?php echo base_url() ?>assets/uploads/<?php echo $product['product_image']; ?>" width="300" alt="Product Image">
						<?php endif; ?>

						<input type="file"  name="userfile">
					</div>

					<div class="form-group">
						<label for="step">Agregar a pagina principal?</label>
						<select  class="form-control" name="homepage">
							<option <?php if ($product['homepage'] == 0){echo "selected";}else{echo "";} ?> value="0">No</option>
							<option <?php if ($product['homepage'] == 1){echo "selected";}else{echo "";} ?> value="1">Si</option>
						</select>
					</div>

					<button type="submit" class="btn btn-primary">Guardar</button>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div>
	</div>
</div>



