<!-- page css -->
<link href="<?php echo base_url(); ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

<div>
	<div class="row">
		<div class="col-lg-12">
			<a href="<?php echo base_url() ?>admin/wo/manage/<?php echo $flows['type_id'] ?>" class="btn btn-primary mb-5">Manage Work Orders</a>
		</div>

		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">

					<?php
					//show validation errors
					echo validation_errors('<div class="alert alert-danger">', '</div>');
					?>

					<h4 class="card-title">Add a Work Order to <b class="text-primary"><?php echo $flows['type_name'] ?></b></h4>
					<p class="card-text">Add work order details, so you can follow its progress.</p>

					<?php echo form_open(base_url() . "flows/create/{$flows['type_id']}")?>

					<div class="form-group row">
						<div class="col-lg-6">
							<label for="step">Work Order Number or ID</label>
							<input type="text" class="form-control" id="number" name="number" placeholder="Work Order Number or ID">
						</div>
						<div class="col-lg-6">
							<label for="step">Part Number</label>
							<input type="text" class="form-control" id="part_no" name="part_no" placeholder="Part number">
						</div>
					</div>

					<div class="form-group row">
						<div class="col-lg-4">
							<label for="step">Quantity</label>
							<input type="text" class="form-control" id="qty" name="qty" placeholder="Quantity to Process">
						</div>
						<div class="col-lg-4">
							<label for="step">Starting Point</label>
							<select  class="form-control" id="work_order_step" name="work_order_step" required>
								<option value="">Select a Starting Point</option>
								<?php foreach ($items as $item): ?>
									<option value="<?php echo $item->item_id ?>"><?php echo $item->item_name ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-lg-4">
							<label>Required Date</label>
							<div class="input-affix m-b-10">
								<i class="prefix-icon anticon anticon-calendar"></i>
								<input type="text" class="form-control datepicker-input" name="required_date" placeholder="Pick a date">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="description">Notes</label>
						<textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
					</div>

					<button type="submit" class="btn btn-primary">Save</button>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div>

		<!-- application/views/items_view.php -->
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


	</div>
</div>




