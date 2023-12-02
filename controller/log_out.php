<?php 
include "../config/db_connexion.php";
$_SESSION=[];
session_start();
session_destroy();
header('location: ./login.php');
  
?>
