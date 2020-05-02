<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Firebase\JWT\JWT;
$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH."../");
$dotenv->load();

class Auth_C extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('utils');
    }

    public function signin()
    {
        loadController("User_C.php");
        $User = new User_C();

        $login = array(
            "email" => $this->input->post("email"),
            "password" => $this->input->post("password"),
        );
        if(!$this->isLoginValid($login)){
            httpResponse(false, "", "error validation", 400);
        }

        try{
            $users =  $User->getUserByEmail($login["email"]);
        }
        catch (\Exception $e){
            httpResponse(false, "", $e, 500);
        }


        if(count($users) === 0){
            //use message "email or password error" instead of "user not found" for security reason.
            httpResponse(false, "", "email or password error", 401);
        }
        $user = $users[0];

        if(!password_verify($login["password"], $user["password"])){
            httpResponse(false, "", "email or password error", 401);
        }


        $claims = array(
            "uid" => $user["id"],
            "firstName" => $user["firstName"],
            "lastName" => $user["lastName"],
        );

        try{
            $token = JWT::encode($claims, $_ENV["JWT_SECRET"]);
        }
        catch (\Exception $e){
            httpResponse(false, "", $e, 500);
        }

        $data = array(
            "token" => $token
        );

        httpResponse(true, $data, "", 200);
    }

    private function isLoginValid($login){
        if($login["email"] === null || $login["email"] === ""){
            return false;
        }
        if($login["password"] === null || $login["password"] === ""){
            return false;
        }

        return true;
    }

    public function signup()
    {
        loadController("User_C.php");
        $User = new User_C();

        $user = array(
            "firstName" => $this->input->post("firstName"),
            "lastName" => $this->input->post("lastName"),
            "phoneNumber" => $this->input->post("phoneNumber"),
            "gender" => $this->input->post("gender"),
            "email" => $this->input->post("email"),
            "password" => $this->input->post("password"),
            "address" => $this->input->post("address")
        );
        if(!$this->isUserValid($user)){
            httpResponse(false, "", "error validation", 400);
        }

        $user["password"] = password_hash($user["password"], PASSWORD_DEFAULT);

        try{
            $User->createUser($user);
        }
        catch (\Exception $e){
            httpResponse(false, "", $e, 500);
        }

        httpResponse(true, "", "", 200);
    }

    private function isUserValid($user)
    {
        //TODO validate using third party libary
        if($user["firstName"] === null || $user["firstName"] === ""){
            return false;
        }
        if($user["lastName"] === null || $user["lastName"] === ""){
            return false;
        }
        if($user["phoneNumber"] === null || $user["phoneNumber"] === ""){
            return false;
        }
        if($user["gender"] === null || $user["gender"] === ""){
            return false;
        }
        if($user["email"] === null || $user["email"] === ""){
            return false;
        }
        if($user["password"] === null || $user["password"] === ""){
            return false;
        }
        if($user["address"] === null || $user["address"] === ""){
            return false;
        }

        return true;
    }

    public function signin_v(){
        $this->load->view("signin_v");
    }

    public function signup_v(){
        $this->load->view("signup_v");
    }

}
