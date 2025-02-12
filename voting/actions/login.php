<?php
// Start the session
session_start();

include("connect.php");

// Retrieve form data
$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$std = $_POST['std'];

// Prepare the SQL query to prevent SQL injection
$stmt = $con->prepare("SELECT * FROM userdata WHERE username = ? AND mobile = ? AND password = ? AND standard = ?");
$stmt->bind_param("ssss", $username, $mobile, $password, $std);

// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch all group data
    $sql = "SELECT username, photo, votes, id FROM userdata WHERE standard='group'";
    $resultgroup = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($resultgroup) > 0) {
        $groups = mysqli_fetch_all($resultgroup, MYSQLI_ASSOC);
        $_SESSION['groups'] = $groups;
    }

    // Fetch the user's data
    $data = $result->fetch_assoc();
    $_SESSION['id'] = $data['id'];
    $_SESSION['status'] = $data['status'];
    $_SESSION['data'] = $data;

    echo '<script>
        window.location="../partials/dashboard.php";
    </script>';
} else {
    echo '<script>
        alert("Invalid credentials");
        window.location="../";
    </script>';
}

// Close the statement
$stmt->close();
?>
