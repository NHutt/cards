
<?php
function connect_db() {
 $servername = "localhost";
 $username = "a1704562";
 $password = "raNAdj87c";
 $dbname = "a1704562";

 // Create connection
 $conn = new mysqli ($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die ("Connection failed: " . $conn->connect_error);
 } else {
 }
 return $conn;
}
?>

