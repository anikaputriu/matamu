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
        validateToken($this->input->request_headers());

        $limit = 10;

        try{
            $blindTests = $this->BlindTest_M->getBlindTestRand($limit);
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
        $decodeToken = validateToken($this->input->request_headers());

        $answers = $this->input->post("answers");
        $answers = json_decode($answers);

        //create array ids, from user answers
        $ids = array();
        foreach ($answers as $value){
            array_push($ids, $value->id);
        }

        try{
            $blindTests = $this->BlindTest_M->getBlindTestByIds($ids);
        }
        catch (\Exception $e){
            httpResponse(false, "", $e, 500);
        }

        //get results true or false from user answer
        $results = array();
        foreach ($answers as $value){

            $id = $value->id;
            $answer = $value->answer;
            $isTrue = false;

            foreach ($blindTests as $v){
                if($id === $v["id"] && $answer === $v["answer"]){
                    $isTrue = true;
                    break;
                }
            }

            $result = array(
                "answer" => $answer,
                "isTrue" => $isTrue
            );

            array_push($results, $result);
        }

        $answersJSON = json_encode($results, true);

        $anwerId = $this->BlindTest_M->createBlindTestResult(array(
            "userId" => $decodeToken->uid,
            "answers" => $answersJSON
        ));

        httpResponse(true, array(
            "id" => $anwerId
        ), "" , 200);
    }

    public function getBlindTestResultById($id){
        $decodeToken = validateToken($this->input->request_headers());

        $results = $this->BlindTest_M->getBlindTestResultById($decodeToken->uid, $id);

        $constructResults = array();
        foreach ($results as $value){
            $result = json_decode($value["answers"]);
            array_push($constructResults, $result);
        }

        httpResponse(true, $constructResults, "" , 200);
    }

    public function getBlindTestResults(){
        $decodeToken = validateToken($this->input->request_headers());

        $results = $this->BlindTest_M->getBlindTestResults($decodeToken->uid);

        var_dump($results);
    }

    public function blindTest_v(){
        $this->load->view("blindTest_v");
    }

    public function result_v($id){
        $data = array(
            'resultId' => $id,
        );
        $this->load->view("blindTestResult_v", $data);
    }
}
