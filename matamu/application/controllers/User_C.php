<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_C extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('utils');
        $this->load->model("User_M");
    }

    public function createUser($user){
        $this->User_M->createUser($user);
    }

    public function getUserByEmail($email){
        return $this->User_M->getUserByEmail($email);
    }

    public function getUserByID($ID){

    }
}
