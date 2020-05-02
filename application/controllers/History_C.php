<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Firebase\JWT\JWT;
$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH."../");
$dotenv->load();

class History_C extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('utils');
        $this->load->model("BlindTest_M");
        echo $this->uri->segment('3');
    }

    public function history_v(){
        // $idu = $this->uri->segment('3');
        // $results = $this->BlindTest_M->getBlindTestResults("SELECT * FROM users where id = $idu");
        $results = $this->BlindTest_M->getBlindTestResults("28");
        $jawabanBenarList = array();
        $jawabanSalahList = array();

        $tempBenar = 0;
        $tempSalah = 0;

        foreach ($results as $key => $value) {
        	$answer = json_decode($value['answers']);

        	foreach ($answer as $keyy => $valuee) {
        		if ($valuee->isTrue) {
        			$tempBenar += 1;
        		} else {
        			$tempSalah += 1;
        		}
        	}
        	array_push($jawabanBenarList, $tempBenar);
        	array_push($jawabanSalahList, $tempSalah);

        	$tempBenar = 0;
        	$tempSalah = 0;
        }

        $data = array(
            'jawabanBenarList' => $jawabanBenarList,
            'jawabanSalahList' => $jawabanSalahList
        );
        $this->load->view("history_v", $data);
    }

}
