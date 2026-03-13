
<?php
// config.php - Database configuration and utility functions
function connectDB() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "venessa";
    $port = 3307;  // Since you're using port 3307

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}
?>