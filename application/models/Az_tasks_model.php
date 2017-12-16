<?php
//created by Azhar for custom_reports
defined('BASEPATH') or exit('No direct script access allowed');
class Az_tasks_model extends Tasks_model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_where($where = array())
    {
        $this->db->where($where);
        $this->db->from('tblstafftasks');
        $this->db->join('tblcontracts', 'tblstafftasks.rel_id = tblcontracts.id');
        $this->db->join('tblclients', 'tblcontracts.client = tblclients.userid');
        $this->db->join('tblstafftaskassignees', 'tblstafftasks.id = tblstafftaskassignees.taskid');
        $this->db->join('tblstaff', 'tblstafftaskassignees.staffid = tblstaff.staffid');
        $this->db->join('tblstaff coordinator', 'tblcontracts.addedfrom = coordinator.staffid');
        return $this->db->get()->result_array();
    }
}
