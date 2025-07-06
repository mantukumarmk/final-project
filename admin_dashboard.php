<?php
session_start();
if (!isset($_SESSION["admin_logged_in"])) {
  header("Location: admin_login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background-color: #f4f6f9;
    }
    header {
      background-color: #0077cc;
      color: white;
      padding: 20px;
      text-align: center;
    }
    .dashboard {
      max-width: 1000px;
      margin: 30px auto;
      padding: 20px;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    h2 {
      color: #0077cc;
      margin-bottom: 15px;
    }
    .section {
      margin-bottom: 30px;
    }
    .table {
      width: 100%;
      border-collapse: collapse;
    }
    .table th, .table td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }
    .table th {
      background-color: #0077cc;
      color: white;
    }
    .btn {
      padding: 10px 15px;
      border: none;
      background-color: #0077cc;
      color: white;
      border-radius: 5px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #005fa3;
    }
    .back-link {
      display: inline-block;
      text-align: center;
      margin-top: 15px;
      text-decoration: none;
      color: #0077cc;
      font-weight: bold;
    }
    footer {
      text-align: center;
      padding: 15px;
      background-color: #0077cc;
      color: white;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Admin Dashboard</h1>
  </header>
  <div class="dashboard">
    <div class="section">
      <h2>📅 Mess Routine (Preview)</h2>
      <table class="table">
        <tr>
          <th>Day</th>
          <th>Breakfast</th>
          <th>Lunch</th>
          <th>Dinner</th>
        </tr>
        <tr><td>Monday</td><td>Idli</td><td>Rice + Curry</td><td>Chapati + Sabji</td></tr>
        <tr><td>Tuesday</td><td>Poha</td><td>Rajma Chawal</td><td>Paratha</td></tr>
        <tr><td>Wednesday</td><td>Dosa</td><td>Kadhi Chawal</td><td>Pulao</td></tr>
        <tr><td>Thursday</td><td>Upma</td><td>Veg Thali</td><td>Puri Sabji</td></tr>
        <tr><td>Friday</td><td>Paratha</td><td>Dal Fry + Rice</td><td>Noodles</td></tr>
        <tr><td>Saturday</td><td>Sandwich</td><td>Chole Rice</td><td>Khichdi</td></tr>
        <tr><td>Sunday</td><td>Pancake</td><td>Biryani</td><td>Pav Bhaji</td></tr>
      </table>
    </div>

    <div class="section">
      <h2>📋 Attendance Report</h2>
      <p>Attendance tracking feature coming soon...</p>
    </div>

    <div class="section">
      <h2>📨 Feedback Overview</h2>
      <p>Feedback saving feature coming soon...</p>
    </div>

    <div class="section" style="text-align:center;">
      <a class="back-link" href="index.html">← Back to Home</a>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Mess Management System - Admin Panel</p>
  </footer>
</body>
</html>
