<?php
session_start();
include 'adminDb.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM reservation where id='$id'");
if ($query) {
    $_SESSION['deletedReservation'] = true;

} else {
    $_SESSION['deletedReservation'] = true;
}

header("location: adminReservations.php");
$conn->close();
?>
