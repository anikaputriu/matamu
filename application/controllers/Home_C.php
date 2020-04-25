<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Firebase\JWT\JWT;
$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH."../");
$dotenv->load();

class Home_C extends CI_Controller {

    public function home_v(){
        $this->load->view("home_v");
    }

}
