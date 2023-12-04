<?php
 include  "../../../config/db_connexion.php";    
  
 function addmovie($connexion){
    if (isset($_POST["submit"])) {
        $title= $_POST['title'];
        $year_of_release= $_POST['year_of_release'];
        $duration= $_POST['duration'];
        $country= $_POST['country'];
        $genre= $_POST['genre'];
    
        $sql = "INSERT INTO `movie`(`id`, `title`, `year_of_release`, `duration`, `country`, `categorie_id`) VALUES (NULL,'$title','$year_of_release',
        '$duration','$country','$genre')";
    
        $result = mysqli_query($connexion , $sql);
        if ($result) {
            header("Location: show.php?msg=New record created successfully");
         } else {
            echo "Failed: " . mysqli_error($connexion );
         }
    
    }};
        

        function updatemovie($connexion,$id){
         
   if (isset($_POST["submit"])) {
    $title= $_POST['title'];
    $year_of_release= $_POST['year_of_release'];
    $duration= $_POST['duration'];
    $country= $_POST['country'];
    $genre= $_POST['genre'];
   
     $sql = "UPDATE `movie` SET `title`='$title',`year_of_release`='$year_of_release',`duration`='$duration',`country`='$country',`categorie_id`='$genre' WHERE id = $id";
   
     $result = mysqli_query($connexion , $sql);
   
     if ($result) {
       header("Location: show.php?msg=Data updated successfully");
     } else {
       echo "Failed: " . mysqli_error($connexion );
     }
   }
        };

        function deletemovie($connexion,$id){
            $sql = "DELETE FROM `movie` WHERE id = $id";
            $result = mysqli_query($connexion , $sql);
            
            if ($result) {
              header("Location: show.php?msg=Data deleted successfully");
            } else {
              echo "Failed: " . mysqli_error($connexion );
            }
        };










?>