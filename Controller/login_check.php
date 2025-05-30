<?php
session_start();
require_once('../model/usermodel.php');

if (isset($_POST["login"])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        echo "Both email and password are required.";
        exit;
    } else {
        $user = login($email, $password);
        if ($user) {
           
                $_SESSION['email'] = $email;

                header('Location: ../view/dashboard.php');
            } 
            
         else {
            echo "Email not found.";
        }
    }
    }
 else {
    header('Location: ../view/login.php');
}
?>
