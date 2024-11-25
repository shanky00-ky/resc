<?php
include("..\conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery | Volleyball</title>
  <style>
    
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #101820;
      color: white;
    }
    header {
      background-color: #00bcd4;
      padding: 20px;
      text-align: center;
    }
    header h1 {
      margin: 0;
      font-size: 2em;
    }
    footer {
      background: #101820;
      color: #ccc;
      text-align: center;
      padding: 10px;
    }

    .container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 15px;
      padding: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      background-color: #1a1a1a;
      transition: transform 0.3s ease-in-out;
    }

    .gallery-item img,
    .gallery-item video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease-in-out;
    }

 
    .gallery-item:hover {
      transform: scale(1.05);
    }
    .gallery-item:hover img,
    .gallery-item:hover video {
      transform: scale(1.1);
    }

    .video-container {
      position: relative;
      border-radius: 8px;
      background-color: #1a1a1a;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }
    .video-container iframe {
      width: 100%;
      height: 100%;
      border: none;
    }
  </style>
</head>
<body>

<header>
  <header class="navbar">
    <h2>Volleyball League Gallery</h2>
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
</header>

<div class="container">
  <?php
  $sql ='SELECT * FROM m10_gallerypage WHERE m10_status = 1;';
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result)){
    ?>
  <div class="gallery-item">
    <img src="images/<?php echo $row['m10_url'];?>" alt="<?php echo $row['m10_name'];?>">
  </div>
  <?php if($row['m10_name'] == 'video'){
    ?>
  <div class="gallery-item video-container">
    <iframe src="<?= $row ['m10_url']?>" title="Volleyball Highlight Video" allowfullscreen></iframe>
  </div>
  <?php }
  }
  ?>
</div>
<!-- <div class="gallery-item">
  <img src="images/event3.jpg" alt="Volleyball Action 2">
</div>
<div class="gallery-item">
  <img src="images/event4.jpg" alt="Volleyball Action 3">
</div>
<div class="gallery-item">
  <img src="images/event5.jpg" alt="Volleyball Action 4">
</div>
<div class="gallery-item">
  <img src="images/event7.jpg" alt="Volleyball Action 5">
</div>
<div class="gallery-item">
  <img src="images/event8.jpg" alt="Volleyball Action 6">
</div>
<div class="gallery-item">
  <img src="images/event9.jpg" alt="Volleyball Action 7">
</div>
<div class="gallery-item">
  <img src="images/event10.jpg" alt="Volleyball Action 8">
</div>
<div class="gallery-item">
  <img src="images/event12.jpg" alt="Volleyball Action 9">
</div> -->
<!-- <div class="gallery-item video-container">
  <iframe src="https://youtu.be/cHLfjh7alXc" title="Volleyball Training Video" allowfullscreen></iframe>
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
        height="350" 
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
