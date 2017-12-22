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
        $this->db->select(['me.firstname me_firstname','me.lastname me_lastname', 'boss.firstname boss_firstname', 'boss.lastname boss_lastname', 'datestart dop', 'company customer_name', 'tblclients.address', 'tblclients.city', 'tblclients.phonenumber', 'tblstafftasks.startdate']);
        $this->db->from('tblstafftasks');
        $this->db->join('tblcontracts', 'tblstafftasks.rel_id = tblcontracts.id','left');
        $this->db->join('tblclients', 'tblcontracts.client = tblclients.userid');
        $this->db->join('tblstafftaskassignees', 'tblstafftasks.id = tblstafftaskassignees.taskid');
        $this->db->join('tblstaff me', 'tblstafftaskassignees.staffid = me.staffid');
        $this->db->join('tblstaff boss', 'tblcontracts.addedfrom = boss.staffid');
        return $this->db->get()->result_array();
    }
}
