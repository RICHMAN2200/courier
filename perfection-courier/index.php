<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Perfection Courier - Home</title>
  <link rel="stylesheet" href="css/styles.css" />
  <!-- Swiper.js CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>
  <!-- Navigation -->
  <?php session_start(); ?>
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
    <?php if (isset($_SESSION['username'])): ?>
      <span class="welcome-text">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
      <a href="php/logout.php" class="btn-white">Logout</a>
    <?php else: ?>
      <a href="login.html" class="btn-white">Sign In</a>
      <a href="signup.html" class="btn-white">Sign Up</a>
    <?php endif; ?>
  </div>
</nav>

  <!-- Hero Section -->
<header class="hero-full">
  <div class="hero-content">
    <h1><span class="highlight">Fast</span>, <span class="highlight">Secure</span> & <span class="highlight">Reliable</span></h1>
    <p>Delivering your packages with precision and care.</p>
    
    <?php if (isset($_SESSION['username'])): ?>
      <a href="services.php" class="btn">Book a Delivery</a>
    <?php else: ?>
      <a href="login.html" class="btn">Sign In to Book</a>
    <?php endif; ?>

    <div class="features">
      <div class="feature-card">🚚 Same-Day Delivery</div>
      <div class="feature-card">📦 Package Tracking</div>
      <div class="feature-card">💼 Corporate Accounts</div>
    </div>

    <div class="scroll-down">
      <?php if (isset($_SESSION['username'])): ?>
        <a href="services.php">↓</a>
      <?php else: ?>
        <a href="login.html" title="Login to continue">↓</a>
      <?php endif; ?>
    </div>
    <!-- ✅ Debug Status Below the Arrow -->
<p style="color: white; margin-top: 10px;">
  <?php echo isset($_SESSION['username']) ? '✅ Logged in as ' . $_SESSION['username'] : '⚠️ Not logged in'; ?>
</p>
  </div>
</header>
 <!-- Why Choose Us -->
<section class="why-us">
  <h2>Why Choose Perfection Courier?</h2>
  <div class="reasons">
    <div class="reason-card">
      <h3>🚀 Fast Delivery</h3>
      <p>We ensure your package gets there on time — every time.</p>
    </div>
    <div class="reason-card">
      <h3>🔒 Secure Handling</h3>
      <p>Your items are safe with us. We treat every delivery with care.</p>
    </div>
    <div class="reason-card">
      <h3>📍 Real-Time Tracking</h3>
      <p>Know where your package is, whenever you want.</p>
    </div>
  </div>
</section>

<!-- How It Works -->
<section class="how-it-works">
  <h2>How It Works</h2>
  <ol>
    <li>📦 Book a delivery</li>
    <li>🚚 We pick it up</li>
    <li>🏁 We deliver to the destination</li>
  </ol>
</section>

<!-- Testimonials -->
<section class="testimonials">
  <h2>What Our Clients Say</h2>
  
  <div class="swiper testimonials-swiper">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide testimonial-card">
        <p>"Super reliable service. I use them for my business deliveries daily!"</p>
        <div class="stars">⭐⭐⭐⭐⭐</div>
        <span>- Sarah, Nairobi</span>
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide testimonial-card">
        <p>"Fast, professional, and secure. The best courier company around."</p>
        <div class="stars">⭐⭐⭐⭐</div>
        <span>- Kevin, Mombasa</span>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide testimonial-card">
        <p>"Excellent tracking and support. 10/10 experience every time."</p>
        <div class="stars">⭐⭐⭐⭐⭐</div>
        <span>- Anita, Kisumu</span>
      </div>
    </div>

    <!-- Navigation Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <!-- Pagination Dots -->
    <div class="swiper-pagination"></div>
  </div>
</section>

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

<script>
  const swiper = new Swiper('.testimonials-swiper', {
    loop: true,
    autoplay: {
      delay: 4500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      640: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    }
  });
</script>
</body>
</html>

