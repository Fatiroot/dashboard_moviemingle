<?php
 include  "../../../config/db_connexion.php";    
  
 function addcategorie($connexion){
    if(isset($_POST['submit'])){
        $nom=$_POST['genre'];
        $description=$_POST['description'];
        $sql_add="INSERT INTO `categorie`(`id`,`name`,`description`) VALUES (NULL,'$nom','$description')";
        $result_add=mysqli_query($connexion ,$sql_add);
        if($result_add){
            header('location: show.php?msg=categorie add successfuly');
        }else {
           echo "Failed: ".mysqli_error($connexion );
        }
        
        }};
        

        function updatecategorie($connexion,$id){
            if(isset($_POST['submit'])){
                $nom=$_POST['genre'];
                $description=$_POST['description'];
                $sql_edit="UPDATE `categorie` SET `name`='$nom',`description`='$description' WHERE `id`='$id'";    
               $result= mysqli_query($connexion ,$sql_edit);
                if ($result) {
                 header("Location: show.php?msg=Data updated successfully");
               } else {
                 echo "Failed: " . mysqli_error($connexion );
               }
              
                } 
        };

        function deletecategorie($connexion,$id){
            $sql = "DELETE FROM `categorie` WHERE id = '$id'";
            $result = mysqli_query($connexion , $sql);

             if ($result) {
           header("Location: show.php?msg=Data deleted successfully");
             } else {
           echo "Failed: " . mysqli_error($connexion );
               }
        };










?>