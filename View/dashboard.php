<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

require_once('../model/usermodel.php');
$email = $_SESSION['email'];
$user = getUserByEmail($email); 

if (!$user) {
    echo "User not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <h2>Welcome, <?php echo $user['fname'] . ' ' . $user['lname']; ?>!</h2>

    <fieldset>
        <legend><h3>Your Profile Information</h3></legend>
        <p>Full Name: <?php echo $user['fname'] . ' ' . $user['lname']; ?></p>
        <p>Gender: <?php echo $user['gender']; ?></p>
        <p>Phone: <?php echo $user['phone']; ?></p>
        <p>Address: <?php echo $user['address']; ?></p>
        <p>Date of Birth: <?php echo $user['dob']; ?></p>
        <p>Email: <?php echo $user['email']; ?></p>
        <p>Location: <?php echo $user['location']; ?></p>
    </fieldset>

    <br>
    <a href="update_profile.php"><button>Update Profile</button></a>
    <a href="../Controller/logout.php"><button>Logout</button></a>
    <a href="../Controller/delete.php"><button>Delete Account</button></a>
</body>
</html>
