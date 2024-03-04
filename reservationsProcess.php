<?php
// Check if the 'submit' button in the form was clicked

if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $reservationName = $_POST['name'];     // Reservation name
    $email = $_POST['email'];     // Email for the reservation
    $date = $_POST['date'];       // Date of the reservation
    $time = $_POST['time']; // Time of the reservation
    $numPeople = $_POST['peopleNum']; // Number of people for the reservation
    $extraInfo = $_POST['extraInfo']; // Extra comments about the reservation

    // Include the database connection file
    include 'admin_pages/adminDb.php';
    session_start();
    $query = "SELECT * FROM reservation WHERE email='$email'";
    $queryResult = $conn->query($query);
    if ($queryResult->num_rows > 0) { // check whether this mail is already in the database

        $_SESSION['emailTaken'] = true;


    } else {
        // Define an SQL query to insert data into the 'studentsinfo' table
        $sql = "INSERT INTO reservation (name, email, reservation_date, reservation_time, person_num, extra_info)
            VALUES ('$reservationName', '$email', '$date', '$time', '$numPeople', '$extraInfo')";
        $_SESSION['emailTaken'] = false;
        // Execute the SQL query using the database connection
        if ($conn->query($sql) === TRUE) {
            // If the query was successful, display a success message
            $result =mysqli_query($conn, "SELECT * FROM reservation WHERE email='$email'");
            $row= mysqli_fetch_array($result);
            $_SESSION['reservation-id'] = $row['id'];
        } else {
            // If there was an error in the query, display an error message
            echo "Error: " . $sql . "<br>" . $conn->error;


        }
    }
    // Close the database connection
    $conn->close();
}

header("location: reservations.php");
?>