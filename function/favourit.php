<?php
 include  "../../../config/db_connexion.php";    
  
 function addfavourit($connexion ,$id){
if (isset($_GET['id'])) {
   $movie_id = $_GET['id'];

   if (isset($_SESSION['id'])) {
       $user_id = $_SESSION['id'];

       $sql_favorite = "INSERT INTO `favoris` (user_id, movie_id) VALUES (?,?)";
       $stmt_favorite = mysqli_prepare($connexion, $sql_favorite);       
        mysqli_stmt_bind_param($stmt_favorite, "ii", $user_id, $movie_id);
       $result_favorite = mysqli_stmt_execute($stmt_favorite);
           if ($result_favorite) {
              header("Location: show_movies.php");
               exit();
           } else {
               echo "Error adding to favorites: " . mysqli_error($connexion);
           }
        //   mysqli_stmt_close($stmt_favorite);
   
   } 
} };
     

        function deletefavourit($connexion,$id){
            $sql = "DELETE FROM `favoris` WHERE id = '$id'";
            $result = mysqli_query($connexion , $sql);

             if ($result) {
           header("Location: show_favoris.php?msg=Data deleted successfully");
             } else {
           echo "Failed: " . mysqli_error($connexion );
               }
        };
 
        function addtowatch($connexion ,$id){
            if (isset($_GET['id'])) {
               $movie_id = $_GET['id'];
            
               if (isset($_SESSION['id'])) {
                   $user_id = $_SESSION['id'];
            
                   $sql_to_watch = "INSERT INTO `to_watch` (user_id, movie_id) VALUES (?,?)";
                   $stmt_to_watch = mysqli_prepare($connexion, $sql_to_watch);          
                    mysqli_stmt_bind_param($stmt_to_watch, "ii", $user_id, $movie_id);
                   $result_to_watch = mysqli_stmt_execute($stmt_to_watch);
                       if ($result_to_watch) {
                          header("Location: show_movies.php");
                           exit();
                       } else {
                           echo "Error adding to to watch: " . mysqli_error($connexion);
                       }
            
                    //    mysqli_stmt_close($stmt_favorite);
               
               } 
            } };
                 
        
                function deletetowatch($connexion,$id){
                    $sql = "DELETE FROM `to_watch` WHERE id = '$id'";
                    $result = mysqli_query($connexion , $sql);
        
                        if ($result) {
                    header("Location: show_to-watch.php");
                        } else {
                    echo "Failed: " . mysqli_error($connexion );
                        }
                };









?>