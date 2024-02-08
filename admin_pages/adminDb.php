<?php

// local server
$servername = "php24-db-1";
$username = "team_project";
$password = "editorMasta";
$dbname = "team_project";


// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>