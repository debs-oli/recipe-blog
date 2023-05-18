<?php

use ReallySimpleJWT\Token;
require("vendor/autoload.php");

class Base
{
    public $db;
    public $authUser;

    public function __construct() {
        $this->db = new PDO(
            "mysql:host=" .ENV["DB_HOST"]. ";dbname=" .ENV["DB_NAME"]. ";charset=utf8mb4",
            ENV["DB_USER"],
            ENV["DB_PASSWORD"],
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );

        if($this->requiresAuth){
            $token = "";

            $headers = getallheaders();
            foreach($headers as $header_name => $header_value) {
                if(strtolower($header_name) === "authorization") {
                    $token = str_ireplace("Bearer ", "", $header_value);
                }
            }

            $isValid = Token::validate($token, ENV["JWT_SECRET_KEY"]);

            if($isValid){
                $this->authUser = Token::getPayload($token, ENV["JWT_SECRET_KEY"]);
            }

            if(empty($this->authUser)){
                http_response_code(401);
                die('{"message":"Not Authorized, check if your Authorization token is valid"}');
            }
        }
    }

    public function sanitizer($data){
        foreach($data as $key => $value){
            if(is_array($value)){
                $data[$key] = $this->sanitizer($value);
            }
            else{
                $data[$key] = htmlspecialchars(strip_tags(trim($value)));
            }
        }
        return $data;
    }
}