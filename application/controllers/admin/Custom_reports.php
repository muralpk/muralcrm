<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Custom_reports extends Admin_controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('staff_model');
    $this->load->model('clients_model');
    $this->load->model('az_tasks_model');
    $this->load->model('az_invoices_model');
    if (!is_admin()) {
      access_denied('Directory');
    }

  }

  public function index()
  {
    echo 'Custom Reports';
  }

  public function dss()
  {
    $data['logo'] = $this->config->item('base_url') . 'uploads/company/' . get_option('company_logo');
    if ($this->input->post()) {
      $data['employee'] = $this->staff_model->get($this->input->post('staffid'));
      $data['date']     = $this->input->post('date');
      $where            = array('tblstafftaskassignees.staffid' => $this->input->post('staffid'), 'startdate' => $this->input->post('date'));
      $data['tasks']    = $this->az_tasks_model->get_where($where);
      $data['qry']      = $this->db->last_query();
      $this->load->view('admin/custom_reports/dss', $data);
    } else {
      $data['staff']  = $this->staff_model->get();
      $data['groups'] = $this->clients_model->get_groups();
      $data['title']  = 'Daily Service Sheet';
      $this->load->view('admin/custom_reports/dss_filter', $data);
    }
  }

  public function delivery_note($id)
  {
    $this->load->view('admin/custom_reports/delivery_note', $data);
  }

  public function item_sale()
  {
    $data['logo'] = $this->config->item('base_url') . 'uploads/company/' . get_option('company_logo');
    if ($this->input->post()) {
      $invoices = $this->az_invoices_model->get_where(['sale_agent' => $this->input->post('staffid')]);
      foreach ($invoices as $key => $invoice) {
        $items                   = $this->az_invoices_model->get_invoice_items($invoice['id']);
        $invoices[$key]['items'] = $items;
        // var_dump($invoice);
      }
      // var_dump($invoices);
      $data['invoices'] = $invoices;
      $this->load->view('admin/custom_reports/item_sale', $data);
    } else {
      $data['staff'] = $this->staff_model->get();
      $data['title'] = "Item Sale Report";
      $this->load->view('admin/custom_reports/item_sale_filter', $data);
    }

  }

}
