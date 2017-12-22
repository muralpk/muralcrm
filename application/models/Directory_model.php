<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Directory_model extends CRM_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * @param  integer ID (optional)
   * @return mixed
   * Get currency object based on passed id if not passed id return array of all currencies
   */
  public function get($id = false)
  {
    if (is_numeric($id)) {
      $this->db->where('id', $id);

      return $this->db->get('tbldirectory')->row();
    }

    return $this->db->get('tbldirectory')->result_array();
  }

  public function list_one_by_filter($filter = '')
  {
    if ($filter == '') {
      return $this->db->get('tbldirectory')->limit(1)->row();
    } else {
      $this->db->where($filter);
      $this->db->order_by('timestamp');
      $this->db->limit(1);
      return $this->db->get('tbldirectory')->row();
    }

  }

  public function count_by_filter($filter = '')
  {
    if ($filter == '') {
      return $this->db->count_all('tbldirectory');
    } else {
      $sql   = "select count(*) as total from tbldirectory where lower(status) like lower('%$filter%');";
      $dbres = $this->db->query($sql);
      $count = $dbres->row();
      return $count->total;
    }
  }

  /**
   * @param array $_POST data
   * @return boolean
   */
  public function add($data)
  {
    $data['status'] = "New";
    $this->db->insert('tbldirectory', $data);
    $insert_id = $this->db->insert_id();
    if ($insert_id) {
      logActivity('New Contact Added in Directory [ID: ' . $data['name'] . ']');

      return true;
    }

    return false;
  }

  /**
   * @param  array $_POST data
   * @return boolean
   * Update currency values
   */
  public function edit($data)
  {
    $currencyid = $data['currencyid'];
    unset($data['currencyid']);
    $data['name'] = strtoupper($data['name']);
    $this->db->where('id', $currencyid);
    $this->db->update('tblcurrencies', $data);
    if ($this->db->affected_rows() > 0) {
      logActivity('Currency Updated [' . $data['name'] . ']');

      return true;
    }

    return false;
  }

  /**
   * @param  integer ID
   * @return mixed
   * Delete currency from database, if used return array with key referenced
   */
  public function delete($id)
  {
    foreach ($this->perfex_base->get_tables_with_currency() as $tt) {
      if (is_reference_in_table($tt['field'], $tt['table'], $id)) {
        return array(
          'referenced' => true,
        );
      }
    }
    $currency = $this->get($id);
    if ($currency->isdefault == 1) {
      return array(
        'is_default' => true,
      );
    }
    $this->db->where('id', $id);
    $this->db->delete('tblcurrencies');
    if ($this->db->affected_rows() > 0) {
      logActivity('Currency Deleted [' . $id . ']');

      return true;
    }

    return false;
  }

}
