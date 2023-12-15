<div>
	<div class="row">
		<div class="col-lg-4">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Work Order Types</h4>
					<p class="card-text">You can create different types of work orders and each of them can have different steps to follow.</p>

					<?php echo form_open(base_url() . "configuration/types")?>

					<div class="form-group">
						<label for="step">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Work order type name.">
					</div>

					<div class="form-group">
						<label for="description">Description</label>
						<textarea class="form-control" id="description" name="description" rows="3"></textarea>
					</div>

					<button type="submit" class="btn btn-primary">Save</button>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div>

		<!-- application/views/items_view.php -->
		<div class="col-lg-8">
			<div class="card">
				<div class="card-body">
					<table style="width: 100%; font-size: 12px;" id="data-table" class="table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Description</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($types as $type): ?>
								<tr>
									<td><?= $type->type_name ?></td>
									<td><?= $type->type_description ?></td>
									<td>
										<a href="<?= base_url() . "configuration/types/" . $type->type_id ?>" class="btn btn-primary">Edit</a>
										<a href="<?= base_url() . "configuration/types/" . $type->type_id . "/delete" ?>" class="btn btn-danger">Delete</a>
										<a href="<?= base_url() . "configuration/steps/" . $type->type_id ?>" class="btn btn-light">Add Flow</a>
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



