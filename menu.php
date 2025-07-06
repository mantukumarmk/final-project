<?php
$conn = new mysqli("localhost", "root", "", "mess_db");
$result = $conn->query("SELECT * FROM menu ORDER BY date DESC LIMIT 7");
echo "<h2>This Week's Menu</h2><table border='1'><tr><th>Date</th><th>Breakfast</th><th>Lunch</th><th>Dinner</th></tr>";
while($row = $result->fetch_assoc()) {
  echo "<tr><td>{$row['date']}</td><td>{$row['breakfast']}</td><td>{$row['lunch']}</td><td>{$row['dinner']}</td></tr>";
}
echo "</table>";
?>