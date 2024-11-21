<?php
include ("..\conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #000; 
      color: #ccc; 
    }

    h1, h2, h3 {
      color: #1e90ff; 
      text-align: center;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

 
    header {
      background: linear-gradient(to right, #1e3a8a, #1e90ff); 
      color: white;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      font-size: 36px;
      margin: 0;
    }

    
    .services-section {
      padding: 50px 20px;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      margin-top: 30px;
    }

    .service-item {
      background: #1e1e1e;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(30, 144, 255, 0.5);
      padding: 20px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .service-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(30, 144, 255, 0.7); 
    }

    .service-item h3 {
      margin-bottom: 15px;
      font-size: 24px;
      color: #1e90ff; 
    }

    .service-item p {
      font-size: 16px;
      color: #bbb; 
    }

    .service-item .learn-more {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #1e90ff; 
      color: white;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    .service-item .learn-more:hover {
      background-color: #1e3a8a; 
    }

    
    footer {
      background: #1e1e1e; 
      color: #bbb; 
      padding: 20px;
      text-align: center;
    }

    footer a {
      color: #1e90ff; 
      text-decoration: none;
      margin: 0 10px;
    }

    footer a:hover {
      color: #1e3a8a; 
    }

    .footer-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 20px;
    }

    .footer-logo img {
      max-width: 100%;
      width: 200px;
      border-radius: 8px;
    }

    .footer-map iframe {
      border: 2px solid #1e90ff; 
      border-radius: 8px;
    }

    
    @media (max-width: 768px) {
      header h1 {
        font-size: 28px;
      }

      .services-section {
        padding: 30px 10px;
      }

      .footer-container {
        flex-direction: column;
        align-items: center;
      }

      .footer-map iframe {
        width: 100%;
        height: 200px;
      }
    }
  </style>
</head>
<body>

<header>
  <h1>Our Volleyball Services</h1>
</header>

<section class="services-section">
  <h2>What We Offer</h2>
  <p>Discover the wide range of services we provide to improve your volleyball experience.</p>
  <div class="services-grid">
    <?php 
    $sql = 'SELECT * FROM m06_services where m06_status = 1;';
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      ?>
    <div class="service-item">
      <h3><?php echo $row['m06_name']; ?></h3>
      <p><?php echo $row['m06_para']; ?></p>
      <a href="<?php echo $row['m06_url']?>" class="learn-more"><?php echo $row['m06_h']; ?></a>
    </div>
    <?php
    }
    ?>
  </div>
</section>
<!-- <div class="service-item">
  <h3>League Management</h3>
  <p>Organize and participate in competitive leagues for all skill levels.</p>
  <a href="leaguemanagment.html" class="learn-more">Learn More</a>
</div>
<div class="service-item">
  <h3>Event Planning</h3>
  <p>We help you host exciting volleyball tournaments and events.</p>
  <a href="eventmang.html" class="learn-more">Learn More</a>
</div>
<div class="service-item">
  <h3>Gear Rental</h3>
  <p>Access top-quality volleyball gear and equipment for your games.</p>
  <a href="gearrentel.html" class="learn-more">Learn More</a>
</div> -->

<footer>
  <div class="footer-container">
    <div class="footer-content">
      <p>&copy; 2024 Volleyball. All rights reserved.</p>
      <div class="social-links">
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Instagram</a>
      </div>
      <div class="additional-info">
        <p>Contact us: contact@yourcompany.com</p>
        <p>Phone: 548454874774</p>
      </div>
    </div>
    <div class="footer-map">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.9607445827346!2d80.99324357428941!3d26.872988261798607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be2b0343872f7%3A0xd1b571418b31382e!2sPolytechnic%20Chauraha%2C%20Lucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1731917065029!5m2!1sen!2sin" 
        width="400" 
        height="300" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</footer>

</body>
</html>
