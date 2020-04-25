<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('utils')) {
    function httpResponse($isSuccess, $data, $message, $httpCode)
    {
        header('Content-Type: application/json');

        http_response_code($httpCode);

        $status = "error";
        if($isSuccess){
            $status = "success";
        }

        $response = array(
            "status" => $status,
            "message" => $message,
            "data" => $data,
        );

        echo json_encode($response);
        die;
    }

    function loadController($name){
        require_once(APPPATH.'controllers/'.$name);
    }
}