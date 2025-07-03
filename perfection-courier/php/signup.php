<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Basic validation
    if (empty($username) || empty($password)) {
        echo "<script>alert('Please fill in all fields.'); window.location.href = '../signup.html';</script>";
        exit();
    }

    // Check if user already exists
    $check = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "<script>alert('Username already taken.'); window.location.href = '../signup.html';</script>";
        exit();
    }

    // Insert new user with hashed password
    $hashed = hash('sha256', $password);
    $insert = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $insert->bind_param("ss", $username, $hashed);

    if ($insert->execute()) {
        echo "<script>alert('✅ Account created! Please login.'); window.location.href = '../login.html';</script>";
    } else {
        echo "<script>alert('Something went wrong.'); window.location.href = '../signup.html';</script>";
    }

    $check->close();
    $insert->close();
    $conn->close();
}
?>
