<?php
session_start();

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

define("ENV", parse_ini_file(".env"));

$controller = "categories";

$allowed_controllers = [
    "categories", "recipes", "recipedetail", "login", "logout"
];

if(!empty($url_parts[1])) {
    $controller = $url_parts[1];
}

if(!empty($url_parts[2])) {
    $id = $url_parts[2];
}

if( !in_array($controller, $allowed_controllers) ) {
    http_response_code(404);
    die("Não encontrado");
}

require("controllers/" . $controller . ".php");
