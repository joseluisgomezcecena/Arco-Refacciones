<!-- page css -->
<link href="<?php echo base_url(); ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

<div>
	<div class="row">
		<!-- application/views/items_view.php -->
		<div class="col-lg-12">
			<!--print success message-->
			<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>

			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<?php echo form_open('reports/index'); ?>

						<div class="form-group row">
							<div class="col-lg-4">
								<label>Start Date</label>
								<div class="input-affix m-b-10">
									<i class="prefix-icon anticon anticon-calendar"></i>
									<input type="text" class="form-control datepicker-input" name="required_date" placeholder="Pick a date">
								</div>
							</div>
							<div class="col-lg-4">
								<label>End Date</label>
								<div class="input-affix m-b-10">
									<i class="prefix-icon anticon anticon-calendar"></i>
									<input type="text" class="form-control datepicker-input" name="required_date" placeholder="Pick a date">
								</div>
							</div>
						</div>

						<?php echo form_close(); ?>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-body">
					<table style="width: 100%; font-size: 11px;" id="data-table" class="table">
						<thead>
						<tr>
							<th>Work Order</th>
							<th>Part Number</th>
							<th>Qty</th>
							<th>Required Date</th>
							<th>Status</th>
							<th>Notes</th>
							<th>Created</th>
							<th>Updated</th>
							<th>Actions</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($reports as $report): ?>
							<tr>
								<?php echo form_open('flows/update_status/'. $flow); ?>
								<input type="hidden" name="wo_id" value="<?php echo $report['wo_id']; ?>">
								<td><?= $report['work_order_number'] ?></td>
								<td><?= $report['work_order_pn'] ?></td>
								<td><?= $report['work_order_qty'] ?></td>
								<td><?= $report['required_date'] ?></td>
								<td>

									<select class="form-control" name="work_order_step" id="status">
										<?php foreach ($items as $item ): ?>
											<option <?php if ($report['work_order_step'] == $item->item_id){echo "selected"; }else{ echo ""; } ?> value="<?php echo $item->item_id ?>"><?php echo $item->item_name; ?></option>
										<?php endforeach; ?>
									</select>

									Currently: <b class="text-primary"><?= $report['item_name'] ?></b>
								</td>
								<td><?= $report['notes'] ?></td>
								<td><?= $report['created_at'] ?></td>
								<td><?= $report['updated_at'] ?></td>
								<td>
									<button type="submit" class="btn btn-primary btn-sm">Update Flow</button>
								</td>
								<?php echo form_close(); ?>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>



