<?php init_head();?>
<div id = "wrapper">
  <div class = "content">
    <div class = "row">
      <div class = "panel panel-primary">
        <div class = "panel-heading text-center">
          <h1>
            <?php echo $call_number->
            mobile; ?>
          </h1>
        </div>
        <div class = "panel-body">
          <?php echo form_open($this->
          uri->
          uri_string(), ['id' =>
          'myForm']); ?>
          <div class = "form-group col-md-6">
            <?php echo render_input('date', 'Date', date("Y/m/d"), 'text', ['disabled' =>
            'disabled']); ?>
          </div>
          <div class = "form-group col-md-6">
            <?php echo render_input('full_name', 'Full Name', $call_number->
            full_name, 'text', ['disabled' =>
            'disabled']); ?>
          </div>
          <div class = "form-group col-md-6">
            <?php echo render_input('mobile_number', 'WhatsApp/Alternate Number', $call_number->
            whatsapp, 'text', ['disabled' =>
            'disabled']); ?>
          </div>
          <div class = "form-group col-md-6">
            <?php echo render_input('apartment_number', 'Apartment No', $call_number->
            apartment, 'text', ['disabled' =>
            'disabled']); ?>
          </div>
          <div class = "form-group col-md-12">
            <?php echo render_input('address', 'Address', $call_number->
            address, 'text', ['disabled' =>
            'disabled']); ?>
          </div>
          <div class = "form-group col-md-12">
            <label for="id_status">
              Status
            </label>
            <select name = "status" id = "id_status" class = "form-control">
              <?php foreach ($statuses as $key =>
              $value) {
              echo "  <option value='$key'> $key  </option> ";
              }
              ?>
            </select>
          </div>
          <div id="assign_task_block" style="display: none;">
            <div class = "form-group col-md-4">
              <label for="employee">
                Assign Task To
              </label>
              <select name = "employee" class = "form-control">
                <?php foreach($staff as $key => $value) {
                echo "<option value='$key'> $value  </option>";
                }
                ?>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="date">Date</label>
              <input type="date" name="date" id="date" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="time">Time</label>
              <input type="time" name="time" id="time" class="form-control">
            </div>
          </div>
          <div id="call_block" style="display: none;">
            <div class="form-group col-md-6">
              <label for="o_date">Call On</label>
              <input type="date" name="o_date" id="o_date" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="o_number">Number</label>
              <input type="text" name="o_number" id="o_number" class="form-control">
            </div>
          </div>
        <div class="form-group col-md-12">
          <label for="notes">Notes/Comments</label>
          <textarea name="notes" id="notes" class="form-control"></textarea>
        </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php init_tail();?>
<?php $this->load->view('admin/utilities/calendar_template');?>
<?php //$this->load->view('admin/includes/dashboard_js');?>
<script type = "text/javascript" > 
$(document).ready(function(){
$("#id_status").on("change",
function(){
  if($("#id_status option:selected").val() == 'Willing for demo')
    {
      $("#assign_task_block").fadeIn();
    }
    else
    {
      $("#assign_task_block").fadeOut();
    }
      if($("#id_status option:selected").val() == 'Call me on' || $("#id_status option:selected").val() == 'Follow up')
    {
      $("#call_block").fadeIn();
    }
    else
    {
      $("#call_block").fadeOut();
    }
});


});

</script>
</body>
</html>
