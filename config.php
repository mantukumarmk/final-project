<?php
$servername = "sql208.infinityfree.com";
$username = "if0_39405452";
$password = "Mantu987";
$dbname = "if0_39405452_mess_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
