<?php
function connect_db() {$servername = "localhost";$username = "a1702686";$password = "laTU4E23h";$dbname = "a1702686";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);} else {}return $conn;
}
?>

