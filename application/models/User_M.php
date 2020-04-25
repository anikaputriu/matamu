<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_M extends CI_Model {

    public function createUser($user)
    {
        $this->db->insert('users', $user);
    }

    public function getUserByEmail($email)
    {
        $this->db->where('email', $email);
        $this->db->limit(1);
        return $this->db->get("users")->result_array();
    }
}
