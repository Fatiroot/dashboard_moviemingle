<?php
  include  '../config/db_connexion.php';

  function login($connexion){
    
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error='';

    if (empty($email) || empty($password)) {
        $error= "Email and password are required";
    } else {
        // Use prepared statement 
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
                $user_role = $rowS['is_admin'];
                // Check user role :
                     if ($user_role) {
                        header('location: ../page/admin/dashboard.php');
                         exit();
                      } else {
                         header('location: ../page/user/dashboard.php');
                         exit();
                        } 
                    
                } else {
                     $error= "Wrong password";
                            }
                    } else {
                         $error= "User not registered";
                    }
     }
}
    
  }
?>