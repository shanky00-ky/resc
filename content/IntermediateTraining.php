<?php
include('.\conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intermediate Training | Volleyball</title>
  <style>

    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #101820;
      color: #f2f2f2;
    }

    h1, h2, h3 {
      text-align: center;
      color: #00bcd4;
    }

    p {
      line-height: 1.6;
      font-size: 16px;
      color: #dddddd;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    header {
      background: linear-gradient(to right, #00bcd4, #004d40);
      color: white;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      font-size: 36px;
      margin: 0;
    }
    .training-highlights {
      padding: 50px 20px;
    }

    .highlights-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      margin-top: 30px;
    }

    .highlight-item {
      background: #1a1a1a;
      border: 1px solid #00bcd4;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .highlight-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 188, 212, 0.3);
    }

    .highlight-item h3 {
      margin-bottom: 15px;
      font-size: 24px;
      color: #00bcd4;
    }

    .highlight-item p {
      font-size: 16px;
      color: #cccccc;
    }

    .testimonials {
      background: #0d1117;
      padding: 50px 20px;
      margin-top: 50px;
    }

    .testimonials h2 {
      margin-bottom: 30px;
      color: #00bcd4;
    }

    .testimonial-item {
      background: #1a1a1a;
      border-radius: 8px;
      padding: 20px;
      margin: 10px 0;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .testimonial-item p {
      font-style: italic;
      color: #cccccc;
    }

    .testimonial-item span {
      display: block;
      text-align: right;
      color: #00bcd4;
      margin-top: 10px;
    }
    .cta-section {
      text-align: center;
      padding: 30px;
      background: #004d40;
      margin-top: 50px;
    }

    .cta-section h2 {
      margin-bottom: 20px;
      color: #ffffff;
    }

    .cta-section a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #00bcd4;
      color: white;
      text-decoration: none;
      border-radius: 4px;
      font-size: 18px;
      transition: background-color 0.3s;
    }

    .cta-section a:hover {
      background-color: #00796b;
    }

    /* Footer */
    footer {
      background: #1a1a1a;
      padding: 20px;
      color: #cccccc;
      text-align: center;
    }
  </style>
</head>
<body>

<header>
  <h1>Intermediate Volleyball Training</h1>
  <p>Take your skills to the next level and dominate the court.</p>
</header>

<section class="training-highlights container">
  <h2>Program Highlights</h2>
  <p>The Intermediate Training Program is perfect for players who want to refine their techniques and develop advanced strategies.</p>

  <div class="highlights-grid">
    <div class="highlight-item">
      <h3>Advanced Techniques</h3>
      <p>Master spikes, blocks, and dives with our expert drills.</p>
    </div>
    <div class="highlight-item">
      <h3>Game Strategies</h3>
      <p>Learn tactical positioning and play styles to outsmart opponents.</p>
    </div>
    <div class="highlight-item">
      <h3>Team Dynamics</h3>
      <p>Enhance your communication and leadership within a team setting.</p>
    </div>
    <div class="highlight-item">
      <h3>Personal Feedback</h3>
      <p>Receive one-on-one coaching to address your specific needs.</p>
    </div>
  </div>
</section>

<section class="testimonials">
  <div class="container">
    <h2>What Our Participants Say</h2>
    <div class="testimonial-item">
      <p>"The Intermediate Program helped me improve my spikes and build confidence during matches."</p>
      <span>- Alex</span>
    </div>
    <div class="testimonial-item">
      <p>"I loved the focus on team dynamics and strategies. It made me a better player overall."</p>
      <span>- Maria</span>
    </div>
  </div>
</section>

<section class="cta-section">
  <h2>Ready to Elevate Your Game?</h2>
  <a href="#">Join the Intermediate Program Now</a>
</section>

<footer>
  <p>&copy; 2024 Volleyball Training. All rights reserved.</p>
</footer>

</body>
</html>
