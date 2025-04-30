<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$success = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST["name"] ?? ""));
    $email   = htmlspecialchars(trim($_POST["email"] ?? ""));
    $message = htmlspecialchars(trim($_POST["message"] ?? ""));

    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'keertigundanoor@gmail.com'; // ✅ your Gmail
        $mail->Password = 'pnkaiqaexdzdraes'; // ✅ your Gmail App password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('keertigundanoor@gmail.com', 'Contact Form');
        $mail->addAddress('keertigundanoor@gmail.com'); // ✅ where you want to receive

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "
            <strong>Name:</strong> $name<br>
            <strong>Email:</strong> $email<br>
            <strong>Message:</strong><br>$message
        ";

        if ($mail->send()) {
            $success = "Message sent successfully!";
        } else {
            $error = "Mailer Error: " . $mail->ErrorInfo;
        }

    } else {
        $error = "Please fill all fields correctly.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - Oceanic</title>
  <link rel="stylesheet" href="style/style.css" />
  <link rel="icon" href="images/oceanic-logo.png" type="image/png" />
  <meta name="description" content="Contact Oceanic - sustainable turbine and energy solutions." />
  <script type="text/javascript" src="//use.typekit.net/xbw5pru.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body>

  <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
  <?php if (!empty($success)) echo "<p class='success'>$success</p>"; ?>

  <header>
    <main>
      <nav>
        <div class="nav-container">
          <a href="#" class="logo">Oceanic</a>
          <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="about.php">About US</a>
            <a href="turbine.php">Turbines</a>
            <a href="collections.php">Collections</a>
            <a href="contact.php">Contact</a>
          </div>
        </div>
      </nav>
  </header>

  <section class="hero">
    <div class="hero-content">
      <div class="hero-text">
        <h1>Contact</h1>
      </div>
      <div class="hero-image">
        <div class="image-slider">
          <div class="slider-container">
            <img src="https://assets.codepen.io/406785/header1.webp" alt="Turbine" class="slide active" />
            <img src="https://assets.codepen.io/406785/header2.webp" alt="Ocean turbine" class="slide" />
            <img src="https://assets.codepen.io/406785/header3.webp" alt="Sustainable energy" class="slide" />
          </div>
          <div class="slider-controls">
            <button class="prev-btn">&#10094;</button>
            <div class="slider-dots">
              <span class="dot active" data-slide="0"></span>
              <span class="dot" data-slide="1"></span>
              <span class="dot" data-slide="2"></span>
            </div>
            <button class="next-btn">&#10095;</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <container>
    <m1>Get In<strong>Touch</strong>.</m1><br>
    <m3>We reply to all your queries within 24 hours </m3><br>

    <form action="contact.php" method="POST" class="formholder">
      <ul>
        <li>
          <label for="name">Name</label><br>
          <input type="text" name="name" id="name" required>
        </li>
        <br>
        <li>
          <label for="email">Email</label><br>
          <input type="email" name="email" id="email" required>
        </li>
        <br>
        <li>
          <label for="message">Message</label><br>
          <textarea name="message" id="message" required></textarea>
        </li>
        <br>
        <li>
          <button type="submit" id="button">Send</button>
        </li>
      </ul>
    </form>
  </container>

  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-about">
          <a href="#" class="footer-logo">Oceanic</a>
          <p>Premium Australian skincare inspired by the ocean. Our mission is to create effective, sustainable products that nurture your skin and protect our oceans.</p>
          <div class="social-icons">
            <!-- social icons SVGs (as in original code) -->
          </div>
        </div>
        <div class="footer-links">
          <h3>Shop</h3>
          <ul>
            <li><a href="#">All Products</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="#">Best Sellers</a></li>
            <li><a href="#">Gift Sets</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h3>About</h3>
          <ul>
            <li><a href="#">Our Story</a></li>
            <li><a href="#">Sustainability</a></li>
            <li><a href="#">Ingredients</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h3>Help</h3>
          <ul>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Shipping & Returns</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Track Order</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2025 Oceanic Skincare. All rights reserved. | Designed by Magnus Copo</p>
      </div>
    </div>
  </footer>
</main>

<script src="script/main.js"></script>
</body>
</html>
