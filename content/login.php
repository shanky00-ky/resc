<?php 
include("../conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Volleyball</title>
  <style>
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #101820;
  color: white;
}

header {
  background-color: #000000;
  padding: 20px;
  text-align: center;
}

header h1 {
  margin: 0;
  color: #fff;
}

.navbar .cta-btn {
  width: 250px;
  padding: 15px;
  background-color: #00bcd4;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 18px;
  cursor: pointer;
  text-align: center;
}

.navbar .cta-btn:hover {
  background-color: #00796b;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  padding: 20px;
}

.login-form {
  background: #1a1a1a;
  padding: 30px;
  border-radius: 8px;
  width: 400px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

.login-form h2 {
  text-align: center;
  color: #00bcd4;
}

input {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 4px;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #00bcd4;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #00796b;
}

footer {
  background: #101820;
  color: #ccc;
  padding: 20px 0;
}

.footer-container {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-wrap: wrap;
}

.footer-logo img {
  width: 100px;
  height: auto;
  margin-bottom: 10px;
}

.footer-social a {
  color: #00bcd4;
  margin: 0 15px;
  text-decoration: none;
  font-size: 16px;
}

.footer-social a:hover {
  text-decoration: underline;
}

.footer-content {
  margin: 20px 0;
  text-align: center;
}

.footer-content p {
  font-size: 14px;
}

.additional-info p {
  margin: 5px 0;
}

.footer-map iframe {
  border: 0;
  border-radius: 8px;
}

p a {
  color: #00bcd4;
  text-decoration: none;
}

p a:hover {
  text-decoration: underline;
}

  </style>
</head>
<body>

<header>
  <header class="navbar">
    <?php
    $sql = 'SELECT * FROM m11_loginpage WHERE m11_status = 1;';
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['m11_name'] == 'Logo') {
    ?>
      <div class="logo">
        <img src="images/<?= $row['m11_url']; ?>" alt="<?= $row['m11_name']; ?>">
        <span>Volleyball League</span>
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
<form method="POST" action="process_login.php">
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="submit" name="login" value="Login">
</form>
</div>

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
</body>
</html>
