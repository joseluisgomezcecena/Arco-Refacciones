<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<div>
	<div class="row">
		<div class="col-lg-4">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Add Steps</h4>
					<p class="card-text">Add steps to follow for this operation, you can re-arrange by dragging and dropping.</p>

					<?php echo form_open(base_url() . "configuration/steps/$type")?>

					<input type="hidden" value="<?php echo $type ?>" name="operation">

					<div class="form-group">
						<label for="step">Step</label>
						<input type="text" class="form-control" id="step" name="step" placeholder="Step">
					</div>

					<div class="form-group">
						<label for="description">Description</label>
						<textarea class="form-control" id="description" name="description" rows="3"></textarea>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div>

		<!-- application/views/items_view.php -->
		<div class="col-lg-8">
			<div class="card">
				<div class="card-body">
					<div id="sortable">
						<?php foreach ($items as $item): ?>
							<div class="alert alert-success" data-id="<?= $item->item_id ?>">
								<div class="d-flex align-items-center justify-content-start">
									<span class="alert-icon">
										<i class="anticon anticon-drag"></i>
									</span>
									<span><?= $item->item_name ?></span>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>

<script>
	$("#sortable").sortable({
		update: function(event, ui) {
			var new_order = [];
			$("#sortable .alert").each(function(index) {
				new_order.push({id: $(this).data('id'), order: index});
			});

			alert(JSON.stringify(new_order));

			$.post('<?php echo base_url() ?>configuration/update_order', {new_order: new_order}, function(data) {
				// Handle the response
				//alert("Response from server: " + JSON.stringify(data));
				//alert("new order saved" + JSON.stringify(new_order));


				if (data.status === 'success') {
					console.log('Order updated successfully');
				} else {
					console.error('Failed to update order');
				}
			});
		}
	});

</script>





