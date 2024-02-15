<?php
session_start();
include "adminDb.php";
$id = $_GET['id'];
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
// sql to delete a record
$sql = "DELETE FROM career WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    $_SESSION['deletedCareer'] = true;

} else {
    $_SESSION['deletedCareer'] = false;
    $_SESSION['deletedCareerError'] = $conn -> error;
}

header('Location: careerread.php');
mysqli_close($conn);

?>