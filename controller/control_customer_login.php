<?php
session_start();
require_once __DIR__ . '/../model/mydb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    $conn = getDBConnection();
    $seller = getTurfByUsername($conn, $username);

    if ($seller !== null && $password === $seller['password']) {
        $_SESSION['seller_id'] = $seller['id'];
        $_SESSION['seller_username'] = $seller['username'];
        header("Location: ../view/seller_profile.php");
        exit();
    }

    header("Location: ../view/customer_login.php?error=1");
    exit();
} else {
    header("Location: ../view/customer_login.php");
    exit();
}
