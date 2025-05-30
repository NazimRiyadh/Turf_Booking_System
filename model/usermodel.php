<?php

    function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'turf');
        return $con;
    }

    function login($email, $password){
        $con = getConnection();
        $sql = "select * from users where email='{$email}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count ==1){
            return true;
        }else{
            return false;
        }
        
    }

   function addUser($fname, $lname, $gender, $phone, $address, $dob, $email, $password, $location) {
    $conn = getConnection();
    $sql = "INSERT INTO users (fname, lname, gender, phone, address, dob, email, password, location)
            VALUES ('$fname', '$lname', '$gender', '$phone', '$address', '$dob', '$email', '$password', '$location')";
    
        $result = mysqli_query($conn, $sql);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }
    function isEmailExists($email) {
    $conn = getConnection();
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    return mysqli_num_rows($result) > 0;
    }

    
    function getUserByEmail($email) {
        $con = getConnection();
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($con, $sql);
        return mysqli_fetch_assoc($result);
    }
    function updateUser($email, $fname, $lname, $gender, $phone,$password, $address, $dob, $location) {
        $con = getConnection();
        $sql = "UPDATE users SET fname='$fname', lname='$lname' , gender='$gender',password='$password', 
                phone='$phone', address='$address', dob='$dob', location='$location' WHERE email='$email'";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function deleteUser($email) {
    $conn = getConnection();
    $sql = "DELETE FROM users WHERE email='$email'";
    return mysqli_query($conn, $sql);
}

?>