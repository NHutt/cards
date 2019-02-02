
<?php
function connect_db() {
 // Create connection
 $conn = new mysqli();
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 } else {
 }
 return $conn;
}
?>

