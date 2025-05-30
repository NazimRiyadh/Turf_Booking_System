<?php
session_start();
require_once('../model/usermodel.php');

if (isset($_POST["submit"])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $location = $_POST["location"];

    if(isset($_POST['gender']))
    {
        $gender=$_POST['gender'];
        if(empty($gender))
        {
            echo "Null gender";
        }
    }

    if (empty($fname)) {
        echo "First name is required.<br>";
    }

    if (empty($lname)) {
        echo "Last name is required.<br>";
    }

    if (empty($phone)) {
        echo "Phone number is required.<br>";
    }

    elseif(strlen($phone)!=11)
    {
        echo"must be 11 characters long<br>";
    }

    if (empty($address)) {
        echo "Address is required.<br>";
    }
    

    if (empty($dob)) {
        echo "Date of birth is required.<br>";
    }

    if (empty($email)) {
        echo "Email is required.<br>";
    }
    elseif (isEmailExists($email)) {
    echo "Email already registered.";
    }

    if (empty($password)) {
        echo "Password is required.<br>";
    }

    if (empty($confirm_password)) {
        echo "Confirm password is required.<br>";
    }

    elseif ($password !== $confirm_password) {
        echo "Passwords do not match.<br>";
    }

    if ($location == "-select-" || empty($location)) {
        echo "Location must be selected.<br>";
    }

    else {
        $status = addUser($fname, $lname, $gender, $phone, $address, $dob, $email, $password, $location);
        if ($status) {
            header("Location: ../view/login.php");
        } else {
            header("Location: ../view/customer.php");
        }
    }
}
?>
