<?php
session_start();
$conn = new mysqli("localhost", "root", "", "mess_db");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = $conn->query($sql);
  if ($result->num_rows == 1) {
    $_SESSION["email"] = $email;
    header("Location: dashboard.php");
  } else {
    $error = "Invalid credentials!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Mess Manager</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #00b4db, #0083b0);
      margin: 0;
      padding: 0;
    }
    .login-container {
      max-width: 400px;
      margin: 80px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #0077cc;
    }
    .login-container input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .login-container button {
      width: 100%;
      padding: 12px;
      background-color: #0077cc;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
    .login-container button:hover {
      background-color: #005fa3;
    }
    .back-link, .register-link {
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
  <div class="login-container">
    <h2>Student Login</h2>
    <?php if (!empty($error)) echo "<div class='error-message'>$error</div>"; ?>
    <form method="post">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <a class="register-link" href="register.php">Don't have an account? Register</a>
    <a class="back-link" href="index.html">← Back to Home</a>
  </div>
</body>
</html>
