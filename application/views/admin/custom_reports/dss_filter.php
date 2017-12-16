<?php init_head(); ?>
<title>
	<?php echo $title; ?>
</title>
<div id="wrapper">
	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3>View/Print Daily Service Sheet</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open($this->uri->uri_string(),array('id'=>'dss-form', 'target'=>'_blank')); ?>
						<div class="col-md-4">
							<div class="form-group">
								<label for="customer_group">Select Customer Area</label>
								<select id="customer_group" name="customer_group" class="form-control">
									<?php
									foreach ( $groups as $group ) {
										echo "<option value='$group[id]'>$group[name]</option>";
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="staffid">Select Employee</label>
								<select id="staffid" name="staffid" class="form-control">
									<?php
									foreach ( $staff as $employee ) {
										echo "<option value='$employee[staffid]'>$employee[firstname] $employee[lastname]</option>";
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="date">Date</label>
								<input id="date" name="date" type="date" class="form-control" required="required"/>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Load Report" class="btn btn-primary pull-right">
								<input type="reset" value="Clear" class="btn btn-warning pull-left">
							</div>
						</div>
					</div>

				</div>
				<?php echo form_close(); ?>
				<?php
				//					var_dump($groups);
				?>
			</div>
		</div>
	</div>
</div>

<?php init_tail(); ?>
</body>
</html>