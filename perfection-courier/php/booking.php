<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sender_name = $_POST['sender_name'];
    $sender_phone = $_POST['sender_phone'];
    $receiver_name = $_POST['receiver_name'];
    $receiver_phone = $_POST['receiver_phone'];
    $package_description = $_POST['package_description'];
    $pickup_address = $_POST['pickup_address'];
    $delivery_address = $_POST['delivery_address'];

    $sql = "INSERT INTO deliveries (sender_name, sender_phone, receiver_name, receiver_phone, package_description, pickup_address, delivery_address)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $sender_name, $sender_phone, $receiver_name, $receiver_phone, $package_description, $pickup_address, $delivery_address);

    if ($stmt->execute()) {
        echo "✅ Delivery booked successfully. Your Delivery ID is: <strong>" . $stmt->insert_id . "</strong>";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
