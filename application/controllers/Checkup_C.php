<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkup_C extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('utils');
        $this->load->model("Checkup_M");
    }

//    public function checkup_v(){
//        $checkup = $this->Checkup_M->getCheckupByIds("28");
//
//        $data = array(
//            'checkupList' => $checkup,
//        );
//        $this->load->view("checkup_v", $data);
//    }
//
//    public function submit(){
//        $decodeToken = validateToken($this->input->request_headers());
//
//        $checkup = $this->Checkup_M->createCheckup(array(
//            "date_submitted" => $this->input->post("date_submitted"),
//            "description" => $this->input->post("description")
//        ));
//
//        httpResponse(true, checkup, "" , 200);
//    }
//
//    public function deleteCheckupByIds($id){
//        $decodeToken = validateToken($this->input->request_headers());
//
//        $results = $this->Checkup_M->deleteCheckupByIds($id);
//
//        httpResponse(true, $result, "" , 200);
//    }


    public function getCheckups(){
        $decodeToken = validateToken($this->input->request_headers());
        $results = $this->Checkup_M->getCheckups($decodeToken->uid);
        httpResponse(true, $results, "" , 200);
    }

    public function deleteById($id){
        $decodeToken = validateToken($this->input->request_headers());
        $this->Checkup_M->deleteById($decodeToken->uid, $id);
        httpResponse(true, array(
            "id" => $id
        ), "" , 200);
    }

    public function submit(){
        $decodeToken = validateToken($this->input->request_headers());

        $checkup = array(
            "userId" => $decodeToken->uid,
            "dateSubmitted" => $this->input->post("dateSubmitted"),
            "description" => $this->input->post("description")
        );

        $checkupId = $this->Checkup_M->createCheckup($checkup);

        httpResponse(true, array(
            "id" => $checkupId
        ), "" , 200);
    }

    public function checkup_v(){
        $this->load->view("checkup_v");
    }

    public function results_v(){
        $this->load->view("checkupResults_v");
    }
}
