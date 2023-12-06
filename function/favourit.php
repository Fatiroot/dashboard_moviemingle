<?php
 include  "../../../config/db_connexion.php";    
  
 function addfavourit($connexion ,$id){
 

if (isset($_GET['id'])) {
   $movie_id = $_GET['id'];

   if (isset($_SESSION['id'])) {
       $user_id = $_SESSION['id'];

       $sql_favorite = "INSERT INTO favoris (user_id, movie_id) VALUES (?,?)";
       $stmt_favorite = mysqli_prepare($connexion, $sql_favorite);

       if ($stmt_favorite) {
           mysqli_stmt_bind_param($stmt_favorite, "ii", $user_id, $movie_id);
           $result_favorite = mysqli_stmt_execute($stmt_favorite);

           if ($result_favorite) {
              header("Location: show_movies.php");
              echo "Film ajouté aux favoris avec succès !";
               exit();
           } else {
               echo "Erreur lors de l'ajout aux favoris : " . mysqli_error($connexion);
           }

           mysqli_stmt_close($stmt_favorite);
       } else {
           echo "Erreur de préparation de la requête pour les favoris : " . mysqli_error($connexion);
       }
   } else {
       echo "Veuillez vous connecter pour ajouter aux favoris.";
   }
} };
     

        function deletefavourit($connexion,$id){
            $sql = "DELETE FROM `favoris` WHERE id = '$id'";
            $result = mysqli_query($connexion , $sql);

             if ($result) {
           header("Location: show.php?msg=Data deleted successfully");
             } else {
           echo "Failed: " . mysqli_error($connexion );
               }
        };










?>