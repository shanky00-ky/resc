<?php
include(".\conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div id="header-placeholder"></div>

  <div class="contact-container">
    <div class="left-col">
      <img class="logo" src="images/volleyball-blue-logo-vector-21638307-removebg-preview.png" alt="Logo"/>
    </div>
    <div class="right-col">
      <h1>Contact Us</h1>
      <form id="contact-form" method="post">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Your Full Name" required />
  
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Your Email Address" required />
  
        <label for="message">Message</label>
        <textarea rows="6" placeholder="Your Message" id="message" name="message" required></textarea>
  
        <button type="submit" id="submit" name="submit">Send</button>
      </form>
      <div id="error"></div>
      <div id="success-msg"></div>
    </div>
  </div>

  <div id="footer-placeholder"></div>
  <script src="js/header.js"></script>
  <script src="js/footer.js"></script>
</body>
</html>
