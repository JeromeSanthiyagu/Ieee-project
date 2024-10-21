<?php
$servername = "localhost";  // Server name (localhost if running locally)
$username = "root";         // Database username
$password = "";             // Database password (empty if default on localhost)
$dbname = "travel_journal"; // Database name

try {
    // Create a new PDO instance for database connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Set PDO error mode to exception for better error handling
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

