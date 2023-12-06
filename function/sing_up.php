<?php
include  "../config/db_connexion.php";

function register($connexion,$error){
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
       
        if (empty($username) || empty($email) || empty($password) || empty($c_password)) {
            $error= " user name and Email and password are required";
        }else{
        $user_exists_query = "SELECT * FROM `user` WHERE `name`='$username' OR `email`='$email'";
        $result = mysqli_query($connexion , $user_exists_query);
    
        if (!$result) {
           
            echo "Error: " . mysqli_error($connexion );
        } else {
            if (mysqli_num_rows($result) > 0) {
                $error= "Username or email has already been taken";
            } else {
                if ($password == $c_password) {
                    // Hash the password before storing it in the database
                    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    
                    $insert_query = "INSERT INTO `user`(`id`, `name`, `email`, `password`) VALUES('', '$username', '$email', '$hashed_password')";
                    $insert_result = mysqli_query($connexion , $insert_query);
    
                    if ($insert_result) {
                       header('location: login.php');
                    } else {
                        echo "Error: " . mysqli_error($connexion );
                    }
                } else {
                    $error= "Password does not match";
                }
            }
        }
    }}
}

?>