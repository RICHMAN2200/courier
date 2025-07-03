<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Services - Perfection Courier</title>
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
  <!-- Navbar -->
  <nav>
    <div class="logo">Perfection Courier</div>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="track.html">Track</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>

    <div class="auth-buttons">
      <span class="welcome-text">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
      <a href="php/logout.php" class="btn-white">Logout</a>
    </div>
  </nav>

  <!-- Hero -->
  <header class="hero-small">
    <h1>Book a Delivery</h1>
    <p>Fill in the details below and we’ll take care of the rest!</p>
  </header>

  <!-- Form Section -->
  <section class="form-wrapper">
    <form action="php/booking.php" method="POST" class="styled-form">
      <input type="text" name="sender_name" placeholder="📦 Sender Name" required />
      <input type="text" name="sender_phone" placeholder="📞 Sender Phone" required />
      <input type="text" name="receiver_name" placeholder="👤 Receiver Name" required />
      <input type="text" name="receiver_phone" placeholder="📱 Receiver Phone" required />
      <textarea name="package_description" placeholder="📝 Package Description" required></textarea>
      <textarea name="pickup_address" placeholder="📍 Pickup Address" required></textarea>
      <textarea name="delivery_address" placeholder="🎯 Delivery Address" required></textarea>
      <button type="submit">Submit Booking</button>
    </form>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <div>
        <h4>Perfection Courier</h4>
        <p>Reliable delivery services across Kenya.</p>
      </div>
      <div>
        <h4>Quick Links</h4>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="track.html">Track</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <div>
        <h4>Contact</h4>
        <p>Email: support@perfectioncourier.com</p>
        <p>Phone: +254 712 345 678</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?php echo date("Y"); ?> Perfection Courier. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
