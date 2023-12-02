
<?php
    session_start();
    include DIR . '/../vendor/autoload.php';


    $dotenv = \Dotenv\Dotenv::createImmutable(DIR . '/../');
    $dotenv->load();

    $serverName = $_ENV["DB_SERVERNAME"];
    $name       = $_ENV["DB_NAME"];
    $userName   = $_ENV["DB_USERNAME"];
    $password   = $_ENV["DB_PASSWORD"];

    $connexion = new mysqli($servername, $username, $password, $dbname);

    if(isset($connexion->connect_error)){
        die('error connection here '. $connexion->connect_error);
    }
?>