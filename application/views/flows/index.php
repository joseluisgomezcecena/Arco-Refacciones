<div>
	<div class="row">
		<div class="col-lg-4">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Flows</h4>
					<p class="card-text">Select the flow you want to add a work order to.</p>

					<?php echo form_open(base_url() . "flows/index")?>

					<div class="form-group">
						<label for="step">Available Flows</label>
						<select class="form-control" name="flow" required>
							<option value="">Select a Flow</option>
							<?php foreach ($flows as $flow): ?>
								<option value="<?php echo $flow['type_id'] ?>"><?php echo $flow['type_name'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<button type="submit" class="btn btn-primary">Select</button>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div>
	</div>
</div>



