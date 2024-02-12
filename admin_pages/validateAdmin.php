<?php

include_once('adminDb.php');

function test_input($data)
{

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $query = "SELECT * FROM login WHERE username='$username' OR password='$password'";
    $result = $conn->query($query);
    $passed = false;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            if ($row['username'] == $username && $row['password'] == $password) {
                $passed = true;
            }
        }


        if ($passed) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: adminHome.php");
        } else {
            header("location: admin.php"); // redirect the person back to the login page if something is wrong
        }
    }
}

?>