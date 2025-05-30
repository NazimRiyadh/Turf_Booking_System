<?php
 session_start();
 include ('../model/usermodel.php');
 if (!isset(($_SESSION['email'])))
 {
    header("location:../view/login.php");
 }
 $email = $_SESSION['email'];

if (deleteUser($email)) {
    session_unset();
    session_destroy();
    header("Location: ../view/login.php");
} else {
    echo "Failed to delete account.";
}
?>