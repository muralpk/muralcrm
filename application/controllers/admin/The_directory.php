<?php
defined('BASEPATH') or exit('No direct script access allowed');
class The_directory extends Admin_controller
{
  public $statuses = ["New" => "fa-address-card-o", "Not interested" => "fa-frown-o", "Out of Country" => "fa-plane", "Not responding" => "fa-bell-slash-o", "Willing for demo" => "fa-television", "Call me on" => "fa-phone-square", "Follow up" => "fa-history", "Donot call" => "fa-microphone-slash"];

  public function __construct()
  {
    parent::__construct();
    $this->load->model('directory_model');
    $this->load->model('staff_model');
    $this->load->model('clients_model');
    if (!is_admin()) {
      access_denied('Directory');
    }

  }

  public function index()
  {
    $data['title'] = "Contact Directory/Call Center";
    foreach ($this->statuses as $status => $icon) {
      $data['status'][$status] = [$icon, $this->directory_model->count_by_filter($status)];
    }

    $this->load->view('admin/directory/home', $data);
  }

  public function add_contact()
  {
    if ($this->input->post()) {
      if ($this->directory_model->add($this->input->post())) {
        set_alert('success', _l('added_successfully', 'Contact'));
      } else {
        set_alert('error', 'Could not add Contact');
      }
      $data['title'] = "Add Contact";
      // $this->load->view('admin/directory/contact', $data);
      redirect(admin_url('the_directory/add_contact'));
    } else {
      $data['title']           = "Add Contact";
      $data['customer_groups'] = $this->clients_model->get_groups();
      $this->load->view('admin/directory/contact', $data);
    }
  }
  public function call_contact($status = '', $id = '')
  {
    $data['title'] = "Call Center";
    if ($status == '') {
        die ("Error loading page: Error Number 3306");
    } else {
      $data['statuses'] = $this->statuses;
      $staff            = $this->staff_model->get();
      foreach ($staff as $employee) {
        $dstaff[$employee['staffid']] = $employee['firstname'] . " " . $employee['lastname'];
      }
      $data['staff'] = $dstaff;
      $data['call_number'] = $this->directory_model->list_one_by_filter(['status'=>$status]);
      $this->load->view('admin/directory/call', $data);
    }
  }

}
