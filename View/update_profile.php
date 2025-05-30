<?php
session_start();
require_once('../model/usermodel.php');

if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit;
}

$email = $_SESSION['email'];
$user = getUserByEmail($email); 

if (!$user) {
    echo "User not found.";
    exit;
}

$updateSuccess = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $location = $_POST['location'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];

    
    if (!empty($old_password) && !empty($new_password)) {
        if ($old_password !== $user['password']) {
            echo "Old password is incorrect.";
            exit;
        }
        $user['password'] = $new_password; 
    }

    
    $conn = getConnection();
    $sql = "UPDATE users SET 
                fname='$fname',
                lname='$lname',
                gender='$gender',
                phone='$phone',
                address='$address',
                dob='$dob',
                location='$location',
                password='{$user['password']}'
            WHERE email='$email'";

    if (mysqli_query($conn, $sql)) {
        $updateSuccess = "Profile updated successfully.";
        
        $user = getUserByEmail($email);
    } else {
        echo "Error updating profile.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Profile</title>
    <link rel="stylesheet" href="update_profile.css">
</head>
<body>

<h2>Update Profile</h2>

<?php if ($updateSuccess) echo "<p style='color: green;'>$updateSuccess</p>"; ?>

<form method="POST" action="">
    <fieldset>
        <legend>Profile Information</legend>

        <label>First Name:</label>
        <input type="text" name="fname" value="<?php echo $user['fname']; ?>"><br><br>

        <label>Last Name:</label>
        <input type="text" name="lname" value="<?php echo $user['lname']; ?>"><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" <?php if ($user['gender'] == 'Male') echo 'checked'; ?>>Male
        <input type="radio" name="gender" value="Female" <?php if ($user['gender'] == 'Female') echo 'checked'; ?>>Female
        <input type="radio" name="gender" value="Other" <?php if ($user['gender'] == 'Other') echo 'checked'; ?>>Other
        <br><br>

        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo $user['phone']; ?>"><br><br>

        <label>Address:</label>
        <input type="text" name="address" value="<?php echo $user['address']; ?>"><br><br>

        <label>Date of Birth:</label>
        <input type="date" name="dob" value="<?php echo $user['dob']; ?>"><br><br>

        <label>Location:</label>
        <select name="location">
            <option <?php if ($user['location'] == 'Bashundhara') echo 'selected'; ?>>Bashundhara</option>
            <option <?php if ($user['location'] == 'Uttara') echo 'selected'; ?>>Uttara</option>
            <option <?php if ($user['location'] == 'Mirpur') echo 'selected'; ?>>Mirpur</option>
            <option <?php if ($user['location'] == 'Gulshan') echo 'selected'; ?>>Gulshan</option>
        </select><br><br>

        <label>Email (read-only):</label>
        <input type="text" value="<?php echo $user['email']; ?>" readonly><br><br>

        <label>Old Password:</label>
        <input type="password" name="old_password"><br><br>

        <label>New Password:</label>
        <input type="password" name="new_password"><br><br>

        <input type="submit" value="Update Profile">
    </fieldset>
</form>

<br>
<a href="dashboard.php"><button>Back to Dashboard</button></a>
<a href="../Controller/logout.php"><button>Logout</button></a>

</body>
</html>
