

<?php
$servername = "localhost";
$username = "root";
$password = "Carlos.6693?";
$dbName = "quizify_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


