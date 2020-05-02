<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkup_M extends CI_Model {

    public function getCheckups($userId){
        $this->db->where('userId', $userId);
        return $this->db->get("checkups")->result_array();
    }

    public function createCheckup($checkupResult){
        $this->db->insert('checkups', $checkupResult);
        return $this->db->insert_id();
    }

    public function deleteById($userId, $id){
        $this->db->where('userId', $userId);
        $this->db->where('id', $id);
        return $this->db->delete("checkups");
    }
}
