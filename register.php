<?php
$conn = new mysqli("localhost", "root", "", "mess_db");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
  if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
  } else {
    $error = "Registration failed. Email may already exist.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register - Mess Manager</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #00b4db, #0083b0);
      margin: 0;
      padding: 0;
    }
    .register-container {
      max-width: 400px;
      margin: 80px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .register-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #0077cc;
    }
    .register-container input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .register-container button {
      width: 100%;
      padding: 12px;
      background-color: #0077cc;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
    .register-container button:hover {
      background-color: #005fa3;
    }
    .back-link {
      display: block;
      text-align: center;
      margin-top: 15px;
      text-decoration: none;
      color: #0077cc;
      font-weight: bold;
    }
    .error-message {
      color: red;
      text-align: center;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h2>Create New Account</h2>
    <?php if (!empty($error)) echo "<div class='error-message'>$error</div>"; ?>
    <form method="post">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Register</button>
    </form>
    <a class="back-link" href="login.php">← Back to Login</a>
  </div>
</body>
</html>
