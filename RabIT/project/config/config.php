<?php

function createConnection() {
    // Database configuration
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = 'root';
    $db_name = 'database';
  
    // Create a new database connection
    
    
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  
    // Check the connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

  
    // Set the character set to UTF-8
    mysqli_set_charset($conn, 'utf8mb4');
  
    // Return the connection object
    return $conn;
  }
  function closeConnection($conn) {
    mysqli_close($conn);
  }

?>