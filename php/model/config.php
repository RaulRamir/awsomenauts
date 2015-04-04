<?php

require_once(__DIR__ . "/Database.php");

$array = array(
    'exp' => '',
    'exp1' => '',
    'exp2' => '',
    'exp3' => '',
    'exp4' => '',
);

$path = "/AwesomenautsRaulR/php/";

$host = "localhost";
$username = "root";
$password = "root";
$database = "awesomenauts_db";

$connection = new Database($host, $username, $password, $database);
