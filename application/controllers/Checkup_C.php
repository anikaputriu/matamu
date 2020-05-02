<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkup_C extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('utils');
        $this->load->model("Checkup_M");
    }

    public function checkup_v(){
        $checkup = $this->Checkup_M->getCheckupByIds("28");
        
        $data = array(
            'checkupList' => $checkup,
        );
        $this->load->view("checkup_v", $data);
    }

    public function submit(){
        $decodeToken = validateToken($this->input->request_headers());

        $checkup = $this->Checkup_M->createCheckup(array(
            "date_submitted" => $this->input->post("date_submitted"),
            "description" => $this->input->post("description")
        ));

        httpResponse(true, checkup, "" , 200);
    }

    public function deleteCheckupByIds($id){
        $decodeToken = validateToken($this->input->request_headers());

        $results = $this->Checkup_M->deleteCheckupByIds($id);

        httpResponse(true, $result, "" , 200);
    }

    public function checkup_sv(){
        $this->load->view("checkup_sv");
    }
}
