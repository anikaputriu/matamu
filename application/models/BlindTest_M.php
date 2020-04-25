<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlindTest_M extends CI_Model {

    public function GetBlindTestRand($limit)
    {
        $this->db->limit(10);
        $this->db->order_by("RAND()");
        return $this->db->get("blindTest")->result_array();
    }

    public function GetBlindTestByIds($ids)
    {
        $this->db->order_by("RAND()");
        $this->db->where_in('id', $ids);
        return $this->db->get("blindTest")->result_array();
    }
}
