<?php
include (".\conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #121212; 
      color: #ccc; 
    }

    h1, h2, h3 {
      color: #1e90ff; 
      text-align: center;
      margin-bottom: 20px;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    header {
      background: linear-gradient(to right, #1e3a8a, #1e90ff); 
      color: white;
      padding: 20px 0;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    header h1 {
      font-size: 36px;
      margin: 0;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #1e1e1e;
      padding: 15px 30px;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
    }

    .navbar .logo {
      display: flex;
      align-items: center;
      color: white;
      font-size: 24px;
    }

    .navbar .logo img {
      max-width: 30px;
      margin-right: 10px;
    }

    .navbar .nav-links {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .navbar .nav-links a {
      color: white;
      text-decoration: none;
      padding: 5px 10px;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    .navbar .nav-links a:hover {
      background-color: #1e90ff;
      border-radius: 5px;
    }

    .navbar .nav-links .search-bar {
      padding: 8px 12px;
      border-radius: 5px;
      border: 1px solid #ddd;
      background-color: #222;
      color: #ccc;
      width: 250px;
      margin-right: 20px;
    }

    .navbar #theme-toggle {
      background: none;
      border: none;
      color: white;
      font-size: 20px;
      cursor: pointer;
    }

    .dashboard-container {
      display: flex;
      margin-top: 80px; 
    }

    .sidebar {
      background-color: #1e1e1e;
      color: #bbb;
      padding: 20px;
      width: 250px;
      height: calc(100vh - 80px); 
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      position: fixed;
    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
    }

    .sidebar ul li {
      margin: 15px 0;
    }

    .sidebar ul li a {
      color: #bbb;
      text-decoration: none;
      font-size: 18px;
      display: block;
      padding: 10px 15px;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .sidebar ul li a:hover {
      background-color: #1e90ff;
      color: white;
    }

    .main-section {
      margin-left: 270px; /* Sidebar width */
      width: calc(100% - 270px);
      padding: 20px;
    }

    .notifications, .task-manager, .calendar, .file-upload {
      background: #1e1e1e;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      color: #ccc;
    }

    .notifications h3, .task-manager h3, .calendar h3, .file-upload h3 {
      font-size: 20px;
      color: #1e90ff;
      margin-bottom: 10px;
    }

    .notifications ul, .task-manager ul, .recent-activity ul {
      list-style: none;
      padding: 0;
    }

    .notifications li, .task-manager li, .recent-activity li {
      font-size: 16px;
      color: #bbb;
      margin-bottom: 8px;
    }

    .task-manager .status {
      color: #1e90ff;
      font-weight: bold;
    }

    .calendar #calendar-widget {
      background-color: #2e2e2e;
      height: 300px;
      border-radius: 8px;
    }

    .file-upload input[type="file"] {
      background-color: #222;
      color: #ccc;
      padding: 10px;
      border: none;
      border-radius: 5px;
      width: 100%;
      margin-bottom: 15px;
    }

    .file-upload .btn {
      background-color: #1e90ff;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .file-upload .btn:hover {
      background-color: #1e3a8a;
    }

    footer {
      background: #1e1e1e; 
      color: #bbb; 
      padding: 20px;
      text-align: center;
      margin-top: 50px;
    }

    footer a {
      color: #1e90ff;
      text-decoration: none;
      margin: 0 10px;
    }

    footer a:hover {
      color: #1e3a8a;
    }

    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        align-items: center;
      }

      .sidebar {
        width: 100%;
        position: relative;
        height: auto;
      }

      .dashboard-container {
        flex-direction: column;
        margin-top: 120px;
      }

      .main-section {
        margin-left: 0;
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="logo">
      <img src="content/images/volleyball-logo-on-the-background-of-multi-vector-9105476-removebg-preview.webp" alt="Logo">
      <span>Dashboard</span>
    </div>
    <div class="nav-links">
      <input type="text" class="search-bar" placeholder="Search...">
      <a href="#">Home</a>
      <a href="#">Settings</a>
      <a href="#">Logout</a>
      <button id="theme-toggle">🌙</button>
    </div>
  </nav>

  <div class="dashboard-container">
    <aside class="sidebar">
      <ul>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Reports</a></li>
        <li><a href="#">Notifications</a></li>
        <li><a href="#">Help</a></li>
      </ul>
    </aside>

    <section class="main-section">
      <div class="notifications">
        <h3>Notifications</h3>
        <ul>
          <li><li>
          
        </ul>
      </div>

      <div class="task-manager">
        <h3>Task Manager</h3>
        <ul>
          <li> <span class="status">Completed</span></li>
        </ul>
      </div>

      <div class="calendar">
        <h3>Upcoming Events</h3>
        <div id="calendar-widget"></div>
      </div>

      <div class="file-upload">
        <h3>File Upload</h3>
        <input type="file" id="file-upload">
        <button class="btn">Upload</button>
      </div>

      <div class="recent-activity">
        <h3>Activity Log</h3>
        <ul>
          <li></li>
        </ul>
      </div>
    </section>
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
  <script src="content/scripts/script.js"></script>
</body>
</html>
