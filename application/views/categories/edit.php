<div>
	<div class="row">

		<div class="col-lg-12 mb-3">
			<a class="btn btn-primary" href="<?php echo base_url() ?>admin/categories">Ir A Categorias</a>
		</div>

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
					<h4 class="card-title">Categorias</h4>
					<p class="card-text">Actualiza la categoria.</p>

					<?php echo form_open_multipart(base_url() . "categories/update/" . $category['category_id'])?>

					<div class="form-group">
						<label for="step">Categoria Principal</label>
						<select class="form-control" name="parent" required>
							<option value="">Selecciona una categoria</option>
							<?php foreach ($parent_categories as $parent_category): ?>
								<option <?php if ($category['parent_id'] == $parent_category['parent_id']){echo "selected";}else{echo "";} ?> value="<?php echo $parent_category['parent_id'] ?>"><?php echo $parent_category['parent_name'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<div class="form-group">
						<label for="step">Nombre de la categoria</label>
						<input type="text" class="form-control" name="name" value="<?php echo $category['category_name']; ?>">
					</div>

					<!--product image-->
					<div class="form-group">
						<label for="step">Imagen de categoria</label>
						<input type="file"  name="userfile">
					</div>

					<div>
						<label for="">Imagen Actual</label>
						<br>
						<?php if($category['category_image'] == 'noimage.jpg'): ?>
							<img width="150" class="img-fluid img-thumbnail  hoverable" src="<?php echo base_url() ?>assets/front/img/logonb.png" alt="noimage.jpg">
						<?php else: ?>
							<img width="150" class="img-fluid img-thumbnail  hoverable" src="<?php echo base_url() ?>assets/uploads/<?php echo $category['category_image'] ?>" alt="<?php echo $category['category_image'] ?>">
						<?php endif; ?>
					</div>


					<button type="submit" class="btn btn-primary mt-5">Guardar</button>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div>
	</div>
</div>



