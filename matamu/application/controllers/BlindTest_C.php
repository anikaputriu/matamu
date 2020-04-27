<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlindTest_C extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('utils');
        $this->load->model("BlindTest_M");
    }

    public function getTest(){
        //TODO middleware validate token

        $limit = 10;

        try{
            $blindTests = $this->BlindTest_M->GetBlindTestRand($limit);
        }
        catch (\Exception $e){
            httpResponse(false, "", $e, 500);
        }

        //remove answer from test
        $construct = array();
        foreach ($blindTests as $value) {
            $data = array(
                "id" => $value["id"],
                "filePath" => $value["filePath"]
            );

            array_push($construct, $data);
        }

        httpResponse(true, $construct, "", 200);
    }

    public function submit(){
        //TODO middleware validate token

//        $userId = $this->input->post("userId");
        $answers = $this->input->post("answers");

        //create array ids, from user answers
        $ids = array();
        foreach ($answers as $value){
            array_push($ids, $value["id"]);
        }

        try{
            $blindTests = $this->BlindTest_M->GetBlindTestByIds($ids);
        }
        catch (\Exception $e){
            httpResponse(false, "", $e, 500);
        }

        //get results true or false from user answer
        $results = array();
        foreach ($answers as $value){

            $id = $value["id"];
            $answer = $value["answer"];
            $isTrue = false;

            foreach ($blindTests as $v){
                if($id === $v["id"] && $answer === $v["answer"]){
                    $isTrue = true;
                    break;
                }
            }

            $result = array(
                "id" => $id,
                "answer" => $answer,
                "isTrue" => $isTrue
            );

            array_push($results, $result);
        }

        httpResponse(true, $results, "", 200);
    }

    public function blindTest_v(){
        $this->load->view("blindTest_v");
    }

    public function result_v(){
        $this->load->view("blindTestResult_v");
    }
}
