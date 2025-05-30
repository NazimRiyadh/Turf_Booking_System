<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include "../model/mydb.php";

if (!isset($_SESSION['seller_id'])) {
    header("Location: ../view/customer_login.php");
    exit();
}

$conn = getDBConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $seller_id = $_SESSION['seller_id'];

    // ✅ Get updated data from form
    $data = [
        'turf_name'   => $_POST['turf_name'],
        'phone'       => $_POST['phone'],
        'email'       => $_POST['email'],
        'address'     => $_POST['address'],
        'sports'      => $_POST['sports'],
        'other_sport' => $_POST['other_sport'],
        'owner_name'  => $_POST['owner_name'],
        'owner_phone' => $_POST['owner_phone'],
        'owner_email' => $_POST['owner_email'],
        'owner_nid'   => $_POST['owner_nid']
    ];

    if (updateTurfProfile($conn, $seller_id, $data)) {
        header("Location: ../view/seller_profile.php");
        exit();
    } else {
        header("Location: ../view/edit_profile.php?error=1");
        exit();
    }
}
?>
