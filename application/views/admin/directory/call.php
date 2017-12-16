<?php init_head(); ?>
<div id="wrapper">
	<div class="content">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Number <?= urldecode($filter) ?></h3>
				</div>
				<div class="panel-body">
					<?php echo form_open($this->uri->uri_string(), ['id'=>'myForm']); ?>
					<div class="form-group col-md-6">
						<?php echo render_input('date','Date',date("Y/m/d"),'text',['readonly'=>'readonly']); ?>
					</div>
					<div class="form-group col-md-6">
						<?php echo render_input('full_name','Full Name','Sample Name','text',['readonly'=>'readonly']); ?>
					</div>
					<div class="form-group col-md-6">
						<?php echo render_input('mobile_number','WhatsApp/Alternate Number','+97123214587','text',['readonly'=>'readonly']); ?>
					</div>
					<div class="form-group col-md-6">
						<?php echo render_input('apartment_number','Apartment No','Apt 1234','text',['readonly'=>'readonly']); ?>
					</div>
					<div class="form-group col-md-12">
						<?php echo render_input('address','Address','Apt 1234','text',['readonly'=>'readonly']); ?>
					</div>
					<div class="form-group col-md-6">
						<label>Status</label>
						<select name="status" class="form-control">
							<?php
								foreach ($statuses as $key => $value) {
									echo "<option value='$key'>$key</option>";
								}
								
							?>
						</select>
					</div>
					<div class="form-group col-md-6" id="assign_task" style="display: none;">
						<label>Assign Task</label>
						<select name="employee" class="form-control">
							<?php
								foreach ($staff as $key => $value) {
									echo "<option value='$key'>$value</option>";
								}
								
							?>
						</select>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
google_api = '<?php echo $google_api_key; ?>';
calendarIDs = '<?php echo json_encode($google_ids_calendars); ?>';
</script>
<?php init_tail(); ?>
<?php $this->load->view('admin/utilities/calendar_template'); ?>
<?php $this->load->view('admin/includes/dashboard_js'); ?>
<script type="text/javascript">
// 	$(document).ready(
// function(){
// $("#assign_task").hide();
// });
</script>
</body>
</html>