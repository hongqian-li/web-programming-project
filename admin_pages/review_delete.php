<?php
session_start();
include "adminDb.php";
$id = $_GET['id'];
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
// sql to delete a record
$sql = "DELETE FROM review WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    $_SESSION['reviewDeleted'] = true;
} else {
    $_SESSION['reviewDeleted'] = false;
    $_SESSION['reviewDeletedError'] = $conn->error;
}

header('Location: review_read.php');
mysqli_close($conn);
?>