<?php
    session_start();
    require_once __DIR__ . '/../vendor/autoload.php';


    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();

    $servername = $_ENV["DB_SERVERNAME"];
    $dbname    = $_ENV["DB_NAME"];
    $username   = $_ENV["DB_USERNAME"];
    $password   = $_ENV["DB_PASSWORD"];

    $connexion = new mysqli($servername, $username, $password, $dbname);

    if(isset($connexion->connect_error)){
        die('error connection here '. $connexion->connect_error);
    }
?>