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


			<a href="<?php echo base_url() ?>admin/wo/new/<?php echo $flow; ?>" class="btn btn-primary mb-5">Add Work Order</a>

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
						<?php foreach ($work_orders as $work_order): ?>
							<tr>
								<?php echo form_open('flows/update_status/'. $flow); ?>
								<input type="hidden" name="wo_id" value="<?php echo $work_order['wo_id']; ?>">
								<td><?= $work_order['work_order_number'] ?></td>
								<td><?= $work_order['work_order_pn'] ?></td>
								<td><?= $work_order['work_order_qty'] ?></td>
								<td><?= $work_order['required_date'] ?></td>
								<td>

									<select class="form-control" name="work_order_step" id="status">
										<?php foreach ($items as $item ): ?>
											<option <?php if ($work_order['work_order_step'] == $item->item_id){echo "selected"; }else{ echo ""; } ?> value="<?php echo $item->item_id ?>"><?php echo $item->item_name; ?></option>
										<?php endforeach; ?>
									</select>

									Currently: <b class="text-primary"><?= $work_order['item_name'] ?></b>
								</td>
								<td><?= $work_order['notes'] ?></td>
								<td><?= $work_order['created_at'] ?></td>
								<td><?= $work_order['updated_at'] ?></td>
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



