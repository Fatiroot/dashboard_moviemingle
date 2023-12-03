<?php
 session_start();
$db = mysqli_connect("localhost","root","","minglemovie");

if(!$db){
    echo ('connection failed'.mysqli_connect_error());
}
else{
    echo 'connected successfully';
}
?>
<!-- 
    session_start();
    require_once __DIR__ . '/../vendor/autoload.php';


    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();

    $serverName = $_ENV["DB_SERVERNAME"];
    $name       = $_ENV["DB_NAME"];
    $userName   = $_ENV["DB_USERNAME"];
    $password   = $_ENV["DB_PASSWORD"];

    $connexion = new mysqli($servername, $username, $password, $dbname);

    if(isset($connexion->connect_error)){
        die('error connection here '. $connexion->connect_error);
    } -->