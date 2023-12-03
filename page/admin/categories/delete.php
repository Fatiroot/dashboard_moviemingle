<?php
 include "../../../config/db_connexion.php";    
 $id = $_GET["id"];
$sql = "DELETE FROM `categorie` WHERE id = '$id'";
$result = mysqli_query($db, $sql);

if ($result) {
  header("Location: show.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($db);
}