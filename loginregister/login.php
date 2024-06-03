<?php
require 'connect.php';
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM users 
            WHERE Username = '$username'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    // User found, verify password
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row['Password'];
    if (password_verify($password, $hashed_password)) {
        // Password matches, start session and redirect
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['userID'] = $row['UserID'];
        header("Location: final/index.php");
        exit();
    } else {
        // Password does not match
        echo "<script>alert('Username or password is incorrect. Please try again.'); window.location.href = 'index.html';</script>";
    }
} else {
    // User not found
    echo "<script>alert('Username or password is incorrect. Please try again.'); window.location.href = 'index.html';</script>";
}
?>
