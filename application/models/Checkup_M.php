<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkup_M extends CI_Model {

    public function getCheckup($limit)
    {
        $this->db->limit($limit);
        $this->db->order_by("RAND()");
        return $this->db->get("checkups")->result_array();
    }

    public function getCheckupByIds($ids)
    {
        $this->db->order_by("RAND()");
        $this->db->where_in('userid', $ids);
        return $this->db->get("checkups")->result_array();
    }

    public function createCheckup($checkupResult){
        $this->db->insert('checkups', $checkupResult);
        return $this->db->insert_id();
    }

    public function deleteCheckupByIds($ids){
        $this->db->where('id', $ids);
        return $this->db->delete("checkups");
    }
}
