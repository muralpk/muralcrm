<?php init_head(); ?>
<div id="wrapper">
	<div class="content">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Contact Directory/Call Center </h3>
				</div>
				<div class="panel-body">
					<?php foreach ($status as $key => $value) : ?>
					<div class="col-md-3">
						<a href="<?php echo admin_url('the_directory/call_contact'); ?>/<?php echo urldecode($key); ?>">
							<div class="well well-lg text-center">
								<span class="badge"><?php echo $value[1]; ?></span>
								<h1 ><span class="fa <?php echo $value[0]; ?>"></span></h1>
								
								<h4>
								<?php echo urldecode($key);?>
								</h4>
								
							</div>
						</a>
					</div>
					<?php endforeach ?>
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
</body>
</html>