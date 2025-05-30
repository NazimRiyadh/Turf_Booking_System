<?php
function getDBConnection() {
    $servername = "localhost";
    $username = "root";     // your DB username
    $password = "";         // your DB password
    $dbname = "turf_booking";  // your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}


function insert_turf($conn, $data) {
    $sql = "INSERT INTO turfs 
        (username, password, turf_name, phone, email, address, sports, other_sport, image_paths, owner_name, owner_phone, owner_email, owner_nid, created_at)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        error_log("Prepare failed: " . $conn->error);
        return false;
    }

    $stmt->bind_param(
        "ssssssssssssss",
        $data['username'],
        $data['password'],
        $data['turf_name'],
        $data['phone'],
        $data['email'],
        $data['address'],
        $data['sports'],
        $data['other_sport'],
        $data['image_paths'],
        $data['owner_name'],
        $data['owner_phone'],
        $data['owner_email'],
        $data['owner_nid'],
        $data['created_at']
    );

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        error_log("Execute failed: " . $stmt->error);
        return false;
    }
}   
    

    // Function to get turf by username safely
    function getTurfByUsername($conn,$username) {
    $stmt = $conn->prepare("SELECT * FROM turfs WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    $turf = null;
    if ($result && $result->num_rows === 1) {
        $turf = $result->fetch_assoc();
    }

    $stmt->close();
    $conn->close();

    return $turf; // returns associative array or null
}   



    function getTurfById($conn, $id) {
    $stmt = $conn->prepare("SELECT * FROM turfs WHERE id = ?");
    if (!$stmt) {
        error_log("Prepare failed: " . $conn->error);
        return null;
    }
    
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    $turf = null;
    if ($result && $result->num_rows === 1) {
        $turf = $result->fetch_assoc();
    }

    $stmt->close();
    // Do NOT close connection here

    return $turf;
}

    function updateTurfProfile($conn, $seller_id, $data) {
    $sql = "UPDATE turfs SET
                turf_name = ?,
                phone = ?,
                email = ?,
                address = ?,
                sports = ?,
                other_sport = ?,
                owner_name = ?,
                owner_phone = ?,
                owner_email = ?,
                owner_nid = ?
            WHERE id = ?";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        return false;
    }

    $stmt->bind_param("ssssssssssi",
        $data['turf_name'],
        $data['phone'],
        $data['email'],
        $data['address'],
        $data['sports'],
        $data['other_sport'],
        $data['owner_name'],
        $data['owner_phone'],
        $data['owner_email'],
        $data['owner_nid'],
        $seller_id
    );

    return $stmt->execute();
}

    function deleteTurfById($conn, $seller_id) {
    $stmt = $conn->prepare("DELETE FROM turfs WHERE id = ?");
    if (!$stmt) {
        error_log("Prepare failed: " . $conn->error);
        return false;
    }

    $stmt->bind_param("i", $seller_id);

    $result = $stmt->execute();
    if (!$result) {
        error_log("Execute failed: " . $stmt->error);
    }

    $stmt->close();

    return $result;
}


?>