<?php 
session_start();
include "adminDb.php";
$id = $_GET['id'];
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
// sql to delete a record
$sql = "DELETE FROM menu WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    $_SESSION['menuDeleted'] = true;
} else {
    $_SESSION['menuDeleted'] = false;
    $_SESSION['menuDeletedError'] = $conn->error;
}

header('Location: menuread.php');
mysqli_close($conn);
?>