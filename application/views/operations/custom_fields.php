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

					<h4 class="card-title">Create Custom Fields For: <b class="text-primary"><?php echo $operation['operation_name'] ?></b></h4>
					<p class="card-text">Custom fields allow you to personalize your operations.</p>

					<?php echo form_open(base_url() . "operations/custom_fields/" . $operation['operation_id'])?>

					<div class="form-group row">
						<div class="col-lg-6">
							<label for="step">Field Name</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Operation Name or ID" required>
						</div>

						<div class="col-lg-6">
							<label for="step">Field Type</label>
							<select  class="form-control" id="type" name="type" required>
								<option value="">Select Type</option>
								<option value="1">Text</option>
								<option value="2">Number</option>
							</select>
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


		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">
					<div>

						<div class="form-group row">
							<div class="col-lg-6">
								<label for="step">Start</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Start Time" disabled>
							</div>

							<div class="col-lg-6">
								<label for="step">End</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="End Time" disabled>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-lg-6">
								<label for="step">Start Date</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Start Date" disabled>
							</div>

							<div class="col-lg-6">
								<label for="step">End Date</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="End Date" disabled>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-lg-6">
								<label for="step">Done By</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Done By" disabled>
							</div>

							<div class="col-lg-6">
								<label for="step">Reviewed By</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Reviewed By" disabled>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-lg-3">
								<label for="step">Received By</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Received By" disabled>
							</div>

							<div class="col-lg-3">
								<label for="step">Date</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Received date" disabled>
							</div>

							<div class="col-lg-3">
								<label for="step">Delivered By</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Delivered By" disabled>
							</div>

							<div class="col-lg-3">
								<label for="step">Date</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Delivery date" disabled>
							</div>
						</div>

						<div class="form-group row">

							<?php foreach ($custom_fields as $field): ?>
								<div class="col-lg-6">
									<label for="step"><?php echo $field['field_name'] ?></label>
									<input type="<?php if ($field['type'] == 1){echo "text";}else{ echo "number";} ?>" class="form-control" id="name" name="name" placeholder="<?php echo $field['field_name'] ?>" >
									<small class="text-primary">*<?php echo $field['notes'] ?></small>
								</div>
							<?php endforeach; ?>

						</div>

						<!--
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
						-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




