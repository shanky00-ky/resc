<?php
include(".\conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Planning | Volleyball</title>
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
    .event-planning {
      padding: 50px 20px;
      background: #0d1117;
    }

    .event-planning h2 {
      color: #00bcd4;
      font-size: 32px;
      margin-bottom: 30px;
    }

    .event-planning p {
      font-size: 18px;
      color: #cccccc;
      margin-bottom: 20px;
    }
    .event-list {
      padding: 50px 20px;
    }

    .event-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
      background-color: #1a1a1a;
    }

    .event-table th, .event-table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #333;
    }

    .event-table th {
      background-color: #00bcd4;
      color: white;
    }

    .event-table td {
      color: #cccccc;
    }

    .event-table tr:hover {
      background-color: #333;
    }
    .event-details {
      background: #0d1117;
      padding: 50px 20px;
    }

    .event-details h2 {
      color: #00bcd4;
      margin-bottom: 30px;
      text-align: center;
    }

    .event-form input, .event-form textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 4px;
    }

    .event-form button {
      padding: 10px 20px;
      background-color: #00bcd4;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    .event-form button:hover {
      background-color: #00796b;
    }
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
  <h1>Volleyball Event Planning</h1>
  <p>Organize, plan, and promote your volleyball events</p>
</header>

<section class="event-planning container">
  <h2>Welcome to the Volleyball Event Planning Page</h2>
  <p>Here, you can plan and manage upcoming volleyball events, tournaments, fundraisers, and community gatherings. Use the sections below to view and add new events.</p>
</section>

<section class="event-list container">
  <h2>Upcoming Events</h2>
  <p>Check out the upcoming volleyball events and tournaments. You can register for events, view details, or add your own event.</p>

  <table class="event-table">
    <thead>
      <tr>
        <th>Event Name</th>
        <th>Date</th>
        <th>Location</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Annual Volleyball Tournament</td>
        <td>Dec 10, 2024</td>
        <td>Volleyball Arena</td>
        <td>Registration Open</td>
      </tr>
      <tr>
        <td>Community Volleyball Fundraiser</td>
        <td>Jan 15, 2025</td>
        <td>Beach Court</td>
        <td>Registration Closed</td>
      </tr>
      <tr>
        <td>Youth Volleyball Camp</td>
        <td>Feb 5, 2025</td>
        <td>Indoor Gym</td>
        <td>Registration Open</td>
      </tr>
    </tbody>
  </table>
</section>

<section class="event-details container">
  <h2>Plan a New Event</h2>
  <p>Fill out the form below to submit details for a new volleyball event. After submission, your event will be reviewed and added to the event list.</p>

  <form class="event-form">
    <label for="event-name">Event Name</label>
    <input type="text" id="event-name" name="event-name" placeholder="Enter event name" required>

    <label for="event-date">Event Date</label>
    <input type="date" id="event-date" name="event-date" required>

    <label for="event-location">Event Location</label>
    <input type="text" id="event-location" name="event-location" placeholder="Enter event location" required>

    <label for="event-description">Event Description</label>
    <textarea id="event-description" name="event-description" placeholder="Provide a detailed description of the event" required></textarea>

    <button type="submit">Submit Event</button>
  </form>
</section>

<footer>
  <p>&copy; 2024 Volleyball Event Planning. All rights reserved.</p>
</footer>

</body>
</html>
