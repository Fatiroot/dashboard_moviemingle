<?php 
include  "../../config/db_connexion.php";
$_SESSION=[];
session_unset();
session_destroy();
header('location: login.php');
  
?>
