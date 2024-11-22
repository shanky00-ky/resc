<?php
include("./conn.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Volleyball Tournament 2024</title>
        <meta name="description" content="Join the 2024 Volleyball Tournament and experience the excitement. Register now for an action-packed event.">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
        <noscript>
          <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        </noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
        <link rel="stylesheet" href="content/css/styles.css">  
        <meta property="og:title" content="Volleyball Tournament 2024">
        <meta property="og:description" content="Join the 2024 Volleyball Tournament and experience the excitement. Register now for an action-packed event.">
        <meta property="og:image" content="path_to_your_image/image.jpg">
        <meta property="og:url" content="https://your-website-url.com">
        <meta property="og:type" content="website">
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    </head>
    
<body>
<header class="navbar">
  <?php
  $sql = "SELECT * FROM `02_media` WHERE `02_imgname` = 'logo';";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <div class="logo">
      <img src="<?= $row['02_imgpath']; ?>" alt="Volleyball Logo">
      <span>Volleyball League</span>
    </div>
  <?php
  }
  ?>
  <nav class="nav-links">
    <?php
    $sql = "SELECT * FROM `01_menu`;";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <a href="<?= $row['01_url']; ?>"><?= $row['01_name']; ?></a>
      
      <?php
      if ($row['01_name'] == "Register") {
      ?>
        <button onclick="window.location.href='<?= $BASE_URL . $row['01_url']; ?>'" class="cta-btn">
          <?= isset($row['01_name']) ? $row['01_name'] : 'Register now'; ?>
        </button>
      <?php
      }
      ?>
    <?php
    }
    ?>
  </nav>
</header>

<!-- Carousel Section -->
<section id="carouselSection" class="carousel-container">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="volleyball2"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="volleyball 3"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="volleyball 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="content/images/aboutus.webp" class="d-block w-100" alt="Volleyball Event 1">
          <div class="carousel-caption d-none d-md-block">
            <h5>Join the Fun</h5>
            <p>Experience the thrill of volleyball and be part of the action.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="content/images/2.webp" class="d-block w-100" alt="Volleyball Event 2">
          <div class="carousel-caption d-none d-md-block">
            <h5>Get Involved</h5>
            <p>Become part of a community that celebrates teamwork and sportsmanship.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="content/images/3.webp" class="d-block w-100" alt="Volleyball Event 3">
          <div class="carousel-caption d-none d-md-block">
            <h5>Compete </h5>
            <p>Push your limits and grow through friendly competition.</p>
          </div>
        </div>
        <div class="carousel-item">
            <img src="content/images/1.webp" class="d-block w-100" alt="Volleyball Event 3">
            <div class="carousel-caption d-none d-md-block">
              <h5>Grow</h5>
              <p>achive the goal</p>
            </div>
          </div>
      </div>
<button class="carousel-control-prev custom-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next custom-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
    </div>
  </section>

<section id="about-us" class="about-us-section">
    <div class="responsive-container-block bigContainer">
      <div class="responsive-container-block Container bottomContainer">
        <?php
        $sql = 'SELECT * FROM m02_aboutus where m02_status = 1 ;';
        $result = mysqli_query($conn,$sql);
        while ($row = $result->fetch_assoc()) {
            if ($row['m02_name'] == 'About') {
                ?>
                <div class="ultimateImg">
                    <img class="mainImg" src="<?= $row['m02_img']; ?>" alt="About Us">
                    <div class="purpleBox">
                        <p class="purpleText">
                            <?= $row['m02_para']; ?>
                        </p>
                    </div>
                </div>
                <?php
            if ($row['m02_name'] == '2img about') {
                ?>
                <div class="stars-container">
                    <img class="stars" src="<?= $row['m02_img']; ?>" alt="Stars">
                </div>
                <?php
            }
        }
            if ($row['m02_name'] == 'About us') {
                ?>
                <div class="allText bottomText">
                    <p class="text-blk headingText">
                        <?= $row['m02_name']; ?>
                    </p>
                    <p class="text-blk subHeadingText">
                        <?= $row['m02_t']; ?>
                    </p>
                    <p class="text-blk description">
                        <?= $row['m02_para']; ?>
                    </p>
                    <a href="<?= $row['m02_url']; ?>" class="explore">
                        View Services
                    </a>
                </div>
                <?php
            }
        }
        ?>
      </div>
    </div>
</section>


<section class="counter-section">
    <h2>Volleyball Stats</h2>
    <div class="counter-container">
        <?php
        $sql ='SELECT * from m03_counter where m03_status = 1;';
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>

      <div class="counter-box">
        <div class="counter" data-count="320"><?= $row['m03_count']; ?></div>
        <h3><?= $row['m03_name']; ?></h3>
        <p><?= $row['m03_para']; ?></p>
      </div>
      <?php
        }
        ?>
    </div>
</section>
<!-- <div class="counter-box">
  <div class="counter" data-count="200">0</div>
  <h3>Players</h3>
  <p>More than 200 passionate players have participated.</p>
</div>

<div class="counter-box">
  <div class="counter" data-count="12">0</div>
  <h3>Championships Won</h3>
  <p>Our teams have won 12 prestigious championships!</p>
</div>

<div class="counter-box">
  <div class="counter" data-count="1500">0</div>
  <h3>Fans</h3>
  <p>Over 1500 fans support our teams every season!</p>
</div> -->
  <section>
  <div class="owl-carousel">
    <?php
    $sql = 'SELECT * FROM m04_owlcarousel WHERE m04_status = 1 ;';
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
    <div class="item">
      <img src="<?= $row['m04_img']?>" alt="<?php echo $row['m04_name']; ?>">
    </div>
    <?php
    }
    ?>
</div>
<h1>Live Updates</h1>
<div class="live-score">
  <p>Match: Team A vs Team B</p>
  <p>Score: 2 - 1</p>
</div>

<h1>Membership</h1>
<p>Join the exclusive fan club for behind-the-scenes content and early ticket access!</p>
<a href="signup.html" class="button">Sign Up</a>


<h1>Discussion Boards</h1>
<p>Join the conversation:</p>
<ul>
  <li><a href="topic1.html">Match Discussions</a></li>
  <li><a href="topic2.html">Training Tips</a></li>
</ul>
<div class="contact-container">
    <div class="left-col">
      <img class="logo" src="content/images/volleyball-blue-logo-vector-21638307-removebg-preview.png" alt="Logo"/>
    </div>
    <div class="right-col">
      <h1>Contact Us</h1>
      <form id="contact-form" method="post" action="resc-main\content\process_contactus.php">
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
 <h1>Team Statistics</h1>
<table>
  <thead>
    <tr>
      <th>Season</th>
      <th>Wins</th>
      <th>Losses</th>
      <th>Top Scorer</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2023</td>
      <td>25</td>
      <td>5</td>
      <td>John Doe</td>
    </tr>
  </tbody>
</table>
<section class="video-section">
  <div class="video-container">
    <h2>Our Story</h2>
    <p>Watch this short video to learn more about us.</p>
    <?php 
    $sql = 'SELECT * FROM m07_video WHERE m07_status = 1 ;';
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
    <div class="video-wrapper">
      <iframe 
        width="100%" 
        height="450" 
        src="<?= $row['m07_videourl']?>" 
        title="YouTube video player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
      </iframe>
    </div>
    <?php }
    ?>
  </div>
</section>
<footer>
<div class="footer-container">
  <?php 
  $sql = 'SELECT * FROM m08_footer WHERE m08_status = 1 ;';
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    if ($row['m08_name'] == 'Logo') {
      ?>
      <div class="footer-logo">
        <img src="<?= $row['m08_url']?>" alt="<?= $row['m08_name']?>" class="logo">
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
        width="350" 
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

<script src="content/scripts/script.js"></script>
<script src="content/scripts/carousel.js"></script>
</body>
</html>
