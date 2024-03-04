<?php
// Check if the 'submit' button in the form was clicked

if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $email = $_POST['email'];     // Email for the reservation
    $reservation_id = $_POST['reservationId']; // id of the reservation

    // Include the database connection file
    include 'admin_pages/adminDb.php';
    session_start();
    $result = mysqli_query($conn, "SELECT * FROM reservation WHERE id= '$reservation_id'");
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['match'] = false;
        if ($row['email'] == $email) {
            $_SESSION['match'] = true;
            $query = mysqli_query($conn, "DELETE FROM reservation where id='$reservation_id'");
            if ($query) {
                $_SESSION['cancel'] = true;
            } else {
                $_SESSION['cancel'] = false;

            }
        }
    } else {
        $_SESSION['cancel'] = false;
        $_SESSION['match'] = false;
    }

    $conn->close();
}
header("location: reservations.php");
?>