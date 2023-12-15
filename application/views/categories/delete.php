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
		</div>


		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Categorias</h4>
					<p class="card-text">Actualiza la categoria.</p>

					<?php echo form_open(base_url() . "categories/delete/" . $category['category_id'])?>

					<div class="form-group">
						<label for="step">Nombre de la categoria</label>
						<input type="text" class="form-control" name="name" value="<?php echo $category['category_name']; ?>">
					</div>

					<button type="submit" name="delete" class="btn btn-danger">Eliminar</button>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div>
	</div>
</div>



