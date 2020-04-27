<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use \Firebase\JWT\JWT;
$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH."../");
$dotenv->load();

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

    function validateToken($headers){
        if(!isset($headers["Authorization"])) {
            httpResponse(false, "", "token invalid", 401);
        }

        $authorization = $headers["Authorization"];
        $split = explode(" ", $authorization);

        if (count($split) == 0){
            httpResponse(false, "", "token invalid", 401);
        }

        $token = $split[1];

        $decoded = array();
        try{
            $decoded = JWT::decode($token, $_ENV["JWT_SECRET"], array('HS256'));
        }
        catch (\Exception $e){
            httpResponse(false, "", "token invalid", 401);
        }

        return $decoded;
    }
}