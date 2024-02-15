<?php

$servername = "localhost";
$username   = "bbcap23_10";
$password   = "LBWnL1aI";
$dbname     = "wp_bbcap23_10";

//create database connection

$conn = new mysqli($servername, $username, $password, $dbname);

//check connection

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>