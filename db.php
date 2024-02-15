<?php

$servername = "php24-db-1";
$username = "team_project";
$password = "editorMasta";
$dbname = "team_project";

//create database connection

$conn = new mysqli($servername, $username, $password, $dbname);

//check connection

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>