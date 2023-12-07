<?php
  // include  '../config/db_connexion.php';
  include(__DIR__ . '/../config/db_connexion.php');


  function login($connexion){
    
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = ''; 
    $_SESSION['error'] = ''; 

    if (empty($email) || empty($password)) {
      $_SESSION['error'] = "Email and password are required";
    } else {
        $query = "SELECT * FROM `user` WHERE `email`= ?";
        $stmt = mysqli_prepare($connexion , $query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $rowS = mysqli_fetch_assoc($result);
            if (password_verify($password ,$rowS['password'])) {
                // $_SESSION['login'] = true;
                $_SESSION['id'] = $rowS['id'];
                $_SESSION['role'] = $rowS['is_admin'];
                // Check user role :
                     if ( $_SESSION['role']=='admin') {
                        header('location: ../admin/dashboard.php');
                         exit();
                      } else {
                         header('location: ../user/dashboarduser.php');
                         exit();
                        } 
                    
                } else {
                  $_SESSION['error'] = "Wrong password";
                            }
                    } else {
                      $_SESSION['error'] = "User not registered";
                    }
     }
}
    
  }
?>