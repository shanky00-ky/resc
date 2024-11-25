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
    background-color: white; 
    color: #ccc; 
  }

  h1, h2, h3 {
    color: black; 
    text-align: center;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 10px;
  }

  header {
    background: linear-gradient(to right, #1e3a8a, #1e90ff); 
    color: white;
    padding: 20px;
    text-align: center;
    position: relative; 
  }

  header h1 {
    font-size: 36px;
    margin: 0;
  }

  .home-button {
    position: absolute;
    top: 20px;
    left: 20px;
    padding: 10px 20px;
    background-color: #1e90ff;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    font-size: 16px;
    font-weight: bold;
    display: inline-block; 
    transition: background-color 0.3s ease, transform 0.3s ease;
    z-index: 10; 
  }

  .home-button:hover {
    background-color: #1e3a8a;
    transform: translateY(-2px); 
  }

  .home-button:active {
    transform: translateY(0);
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
    background: #1c1c1c;
    padding: 20px;
    color: #cccccc;
    text-align: center;
  }
</style>

</head>
<body>

<header>
  <h1>Our Volleyball Services</h1>
  
<header>
  <class="navbar">
    <h2>Volleyball League</h2>
    <?php
    $sql = 'SELECT * FROM m11_loginpage WHERE m11_status = 1;';
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['m11_name'] == 'Logo') {
    ?>
      <div class="logo">
        <img src="images\<?= $row['m11_url']; ?>" alt="<?= $row['m11_name']; ?>">
        
      </div>
    <?php
    }
    ?>
    <nav class="nav-links">
      <?php
      $sql = "SELECT * FROM `m11_loginpage`;";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        if ($row['m11_name'] == "Home") {
        ?>
          <button onclick="window.location.href='<?= $BASE_URL . $row['m11_url']; ?>'" class="cta-btn">
            <?= isset($row['m11_url']) ? $row['m11_name'] : 'Home'; ?>
          </button>
        <?php
        }
        ?>
      <?php
      }
    }
      ?>
    </nav>
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
  <?php 
  $sql = 'SELECT * FROM m08_footer WHERE m08_status = 1 ;';
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    if ($row['m08_name'] == 'Logo') {
      ?>
      <div class="footer-logo">
        <img src="images/<?= $row['m08_url']?>" alt="<?= $row['m08_name']?>" class="logo">
      </div>
      <?php }
      ?>
  <div class="footer-container">
    <?php
      if ($row['m08_name'] == 'content'){
        ?>
    <div class="footer-content">
      <p><?= $row['m08_disc']?></p>
      <?php }
      if (in_array($row['m08_name'],['Facebook','Twitter','Instagram'])){
      ?>
        <div class ="footer-social">
        <a href="<?= $row['m08_url']; ?>"><?= $row['m08_name']?></a>
        <!-- <a href="#">Twitter</a>
        <a href="#">Instagram</a> -->
      </div>
      <?php}
      if (in_array($row['m08_name'] ,['Contactus','Phoneno'])){
        ?>
      <div class="additional-info">
        <p><?= $row['m08_name']?>: <?= $row['m08_disc']?></p>
        <!-- <p>Phone: 548454874774</p> -->
      </div>
    </div>
    <?php }
    if ($row['m08_name'] == 'location'){
      ?>
    <div class="footer-map">
      <iframe 
        src="<?= $row['m08_url'];?>" 
        width="700" 
        height="290" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
    <?php }
  }
  ?>
  </div>
</footer>

</body>
</html>
