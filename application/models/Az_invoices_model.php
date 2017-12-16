<?php
//created by Azhar for custom_reports
$obj = &get_instance();
$obj->load->model('Invoices_model');
defined('BASEPATH') or exit('No direct script access allowed');
class Az_invoices_model extends Invoices_model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function get_where($where = array())
  {
    $this->db->select('*, tblcurrencies.id as currencyid, tblinvoices.id as id, tblcurrencies.name as currency_name');
    $this->db->from('tblinvoices');
    $this->db->join('tblcurrencies', 'tblcurrencies.id = tblinvoices.currency', 'left');
    $this->db->where($where);

    $this->db->order_by('number,YEAR(date)', 'desc');

    return $this->db->get()->result_array();
  }
}
