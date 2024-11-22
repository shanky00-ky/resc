<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Enhanced User Dashboard</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">
      <img src="logo.png" alt="Logo">
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

  <!-- Main Content -->
  <div class="dashboard-container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <ul>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Reports</a></li>
        <li><a href="#">Tasks</a></li>
        <li><a href="#">Notifications</a></li>
        <li><a href="#">Calendar</a></li>
        <li><a href="#">Help</a></li>
      </ul>
    </aside>

    <!-- Main Section -->
    <section class="main-section">
      <!-- Notifications -->
      <div class="notifications">
        <h3>Notifications</h3>
        <ul>
          <li>New report available for download.</li>
          <li>Your password will expire soon.</li>
          <li>Meeting scheduled for 22nd Nov.</li>
        </ul>
      </div>

      <!-- Task Manager -->
      <div class="task-manager">
        <h3>Task Manager</h3>
        <ul>
          <li>Complete the profile update <span class="status">In Progress</span></li>
          <li>Submit monthly report <span class="status">Pending</span></li>
          <li>Attend team meeting <span class="status">Completed</span></li>
        </ul>
      </div>

      <!-- Calendar -->
      <div class="calendar">
        <h3>Upcoming Events</h3>
        <div id="calendar-widget"></div>
      </div>

      <!-- File Upload -->
      <div class="file-upload">
        <h3>File Upload</h3>
        <input type="file" id="file-upload">
        <button class="btn">Upload</button>
      </div>

      <!-- Recent Activity -->
      <div class="recent-activity">
        <h3>Activity Log</h3>
        <ul>
          <li>Logged in on 22nd Nov at 10:00 AM</li>
          <li>Downloaded report on 21st Nov</li>
          <li>Updated profile on 20th Nov</li>
        </ul>
      </div>
    </section>
  </div>

  <script src="scripts.js"></script>
</body>
</html>