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
  <h1>Volleyball Website Gallery</h1>
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
  <p>&copy; 2024 Volleyball Website. All rights reserved.</p>
</footer>

</body>
</html>
