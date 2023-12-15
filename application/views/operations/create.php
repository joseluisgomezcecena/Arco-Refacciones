<!-- page css -->
<link href="<?php echo base_url(); ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

<div>
	<div class="row">
		<div class="col-lg-12">
			<a href="#" class="btn btn-primary mb-5">View All</a>
		</div>

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

		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">

					<?php
					//show validation errors
					echo validation_errors('<div class="alert alert-danger">', '</div>');
					?>

					<h4 class="card-title">Create An <b class="text-primary">Operation</b></h4>
					<p class="card-text">Operations will be added to your operation catalog.</p>

					<?php echo form_open(base_url() . "operations/create")?>

					<div class="form-group row">
						<div class="col-lg-12">
							<label for="step">Operation Name</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Operation Name or ID">
						</div>
					</div>



					<div class="form-group">
						<label for="description">Notes</label>
						<textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
					</div>

					<p>Operation Signature: <b><?php echo $this->session->userdata['user_name'];  ?></b></p>

					<button type="submit" name="save" class="btn btn-primary">Save & Add More</button>
					<button type="submit" name="more" class="btn btn-dark">Save & Configure</button>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div>

		<!--
		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">
					<div>
						<table style="width: 100%;" id="data-talbe" class="table">
							<thead>
								<tr>
									<th>Work Order</th>
									<th>Part Number</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($work_orders as $work_order): ?>
									<tr>
										<td><?php echo $work_order['work_order_number'] ?></td>
										<td><?php echo $work_order['work_order_pn'] ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
-->

	</div>
</div>




