
<?php
function connect_db() {
<<<<<<< HEAD
 // Create connection
 $conn = new mysqli();
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
=======
 $servername = "localhost";
 $username = "a1704562";
 $password = "raNAdj87c";
 $dbname = "a1704562";

 // Create connection
 $conn = new mysqli ($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die ("Connection failed: " . $conn->connect_error);
>>>>>>> feature/list
 } else {
 }
 return $conn;
}
?>

