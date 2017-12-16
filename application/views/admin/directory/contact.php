<?php init_head(); ?>
<div id="wrapper">
	<div class="content">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel_s">
					<div class="panel-body">
						<h4 class="no-margin">
						<?php echo $title; ?>
						</h4>
						<hr class="hr-panel-heading" />
						<div class="clearfix"></div>
						<?php echo form_open($this->uri->uri_string(), ['id'=>'myForm']); ?>
						<?php echo render_input('full_name','Full Name','','text',['required'=>'required']); ?>
						<?php echo render_input('email','Email',''); ?>
						<?php echo render_input('mobile','Mobile',''); ?>
						<?php echo render_input('whatsapp','WhatsApp',''); ?>
						<?php echo render_input('apartment','Apartment',''); ?>
						<?php echo render_input('address','Address',''); ?>
						<div class="form-group">
							<label for="customer_group_id">Area</label>
							<select id="customer_group_id" name="customer_group_id" class="form-control">
								<?php foreach ($customer_groups as $customer_group) {
									echo "<option value='$customer_group[id]'>$customer_group[name]</option>";
								}?>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary pull-right btn-default"><?php echo _l('submit'); ?></button>
							<button class="btn btn-warning pull-left" onclick="resetform();">Clear</button>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<script>
google_api = '<?php echo $google_api_key; ?>';
calendarIDs = '<?php echo json_encode($google_ids_calendars); ?>';
function resetform() {
document.getElementById("myForm").reset();
}
resetform();
</script>
<?php init_tail(); ?>
<?php $this->load->view('admin/utilities/calendar_template'); ?>
<?php $this->load->view('admin/includes/dashboard_js'); ?>
</body>
</html>