<?php
include(".\conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beginner's Program | Volleyball</title>
  <style>
    /* General Styling */
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #121212;
      color: #ffffff;
    }

    h1, h2, h3 {
      text-align: center;
      color: #0066cc;
    }

    p {
      line-height: 1.6;
      font-size: 16px;
      color: #cccccc;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    /* Header Section */
    header {
      background: linear-gradient(to right, #0066cc, #003366);
      color: white;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      font-size: 36px;
      margin: 0;
    }

    /* Program Details Section */
    .program-details {
      padding: 50px 20px;
    }

    .details-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      margin-top: 30px;
    }

    .detail-item {
      background: #1c1c1c;
      border: 1px solid #0066cc;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .detail-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 102, 204, 0.3);
    }

    .detail-item h3 {
      margin-bottom: 15px;
      font-size: 24px;
      color: #0066cc;
    }

    .detail-item p {
      font-size: 16px;
      color: #cccccc;
    }

    /* CTA Section */
    .cta-section {
      text-align: center;
      padding: 30px;
      background: #003366;
      margin-top: 50px;
    }

    .cta-section h2 {
      margin-bottom: 20px;
      color: #ffffff;
    }

    .cta-section a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #0066cc;
      color: white;
      text-decoration: none;
      border-radius: 4px;
      font-size: 18px;
      transition: background-color 0.3s;
    }

    .cta-section a:hover {
      background-color: #004499;
    }

    /* Footer */
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
  <h1>Beginner's Volleyball Program</h1>
  <p>Build a strong foundation and discover the joy of volleyball.</p>
</header>

<section class="program-details container">
  <h2>Program Highlights</h2>
  <p>The Beginner's Program is designed to introduce new players to the fundamentals of volleyball in a fun and supportive environment.</p>

  <div class="details-grid">
    <div class="detail-item">
      <h3>Learn the Basics</h3>
      <p>Master the rules, techniques, and positions essential for the game.</p>
    </div>
    <div class="detail-item">
      <h3>Interactive Drills</h3>
      <p>Engage in fun and interactive drills to build your skills step by step.</p>
    </div>
    <div class="detail-item">
      <h3>Teamwork Focus</h3>
      <p>Develop communication and collaboration skills with your teammates.</p>
    </div>
    <div class="detail-item">
      <h3>Qualified Coaches</h3>
      <p>Learn from experienced and passionate volleyball coaches.</p>
    </div>
  </div>
</section>

<section class="cta-section">
  <h2>Ready to Get Started?</h2>
  <a href="#">Enroll in the Beginner's Program Now</a>
</section>

<footer>
  <p>&copy; 2024 Volleyball Training. All rights reserved.</p>
</footer>

</body>
</html>
