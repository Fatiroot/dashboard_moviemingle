<?php
 include  "../../../config/db_connexion.php";    
  
 function addcast($connexion){
    if(isset($_POST['submit'])){
        $nom=$_POST['name'];
        $sql_add="INSERT INTO `cast`(`id`,`name`) VALUES (NULL,'$nom')";
        $result_add=mysqli_query($connexion ,$sql_add);
        if($result_add){
            header('location: show.php?msg=categorie add successfuly');
        }else {
           echo "Failed: ".mysqli_error($connexion );
        }
        
        }};
        

        function updatecast($connexion,$id){
            if(isset($_POST['submit'])){
                $nom=$_POST['name'];
                $sql_edit="UPDATE `cast` SET `name`='$nom' WHERE `id`='$id'";    
               $result= mysqli_query($connexion ,$sql_edit);
                if ($result) {
                 header("Location: show.php?msg=Data updated successfully");
               } else {
                 echo "Failed: " . mysqli_error($connexion );
               }
              
                } 
        };

        function deletecast($connexion,$id){
            $sql = "DELETE FROM `cast` WHERE id = '$id'";
            $result = mysqli_query($connexion , $sql);

             if ($result) {
           header("Location: show.php?msg=Data deleted successfully");
             } else {
           echo "Failed: " . mysqli_error($connexion );
               }
        };










?>