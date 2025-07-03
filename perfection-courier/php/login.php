<?php
session_start();
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare query to get hashed password
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Check hashed password
        if (hash('sha256', $password) === $user['password']) {
    $_SESSION['username'] = $user['username'];

    // Redirect with a welcome popup
      echo "<script>
      alert('✅ Welcome, " . $user['username'] . "!');
      window.location.href = '../services.php';
      </script>";
    exit();
        } else {
            echo "<script>
                alert('❌ Incorrect password!');
                window.location.href = '../login.html';
            </script>";
        }
    } else {
        echo "<script>
            alert('❌ Username not found!');
            window.location.href = '../login.html';
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
