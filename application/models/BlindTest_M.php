<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlindTest_M extends CI_Model {

    public function getBlindTestRand($limit)
    {
        $this->db->limit($limit);
        $this->db->order_by("RAND()");
        return $this->db->get("blindTests")->result_array();
    }

    public function getBlindTestByIds($ids)
    {
        $this->db->order_by("RAND()");
        $this->db->where_in('id', $ids);
        return $this->db->get("blindTests")->result_array();
    }

    public function createBlindTestResult($blindTestResult){
        $this->db->insert('blindTestResults', $blindTestResult);
        return $this->db->insert_id();
    }

    public function getBlindTestResults($userId){
        $this->db->where('userId', $userId);
        return $this->db->get("blindTestResults")->result_array();
    }

    public function getBlindTestResultById($userId, $id){
        $this->db->where('userId', $userId);
        $this->db->where('id', $id);
        return $this->db->get("blindTestResults")->result_array();
    }
}
