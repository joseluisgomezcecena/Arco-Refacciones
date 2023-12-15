<div>
	<div class="row">

		<div class="col-12">
			<!--print success message-->
			<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
		</div>

		<div class="col-lg-4">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">WorkFlows</h4>
					<p class="card-text">You can create different types of work orders and each of them can have different steps to follow.</p>

					<?php echo form_open(base_url() . "workflows/create")?>

					<div class="form-group">
						<label for="step">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Work order type name." required>
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
						<?php foreach ($work_flows as $type): ?>
							<tr>
								<td><?= $type['work_flow_name'] ?></td>
								<td><?= $type['work_flow_notes'] ?></td>
								<td>
									<a href="<?= base_url() . "admin/config/workflows/steps/" . $type['work_flow_id'] ?>" class="btn btn-warning">Edit</a>
									<a href="<?= base_url() . "admin/config/workflows/steps/" . $type['work_flow_id'] ?>" class="btn btn-danger">Delete</a>
									<a href="<?= base_url() . "admin/config/workflows/steps/" . $type['work_flow_id'] ?>" class="btn btn-primary">Add Steps</a>
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



