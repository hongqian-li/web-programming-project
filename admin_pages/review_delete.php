<?php 
include "adminHeader.php";
include "adminDb.php";
$id = $_GET['id'];
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
// sql to delete a record
$sql = "DELETE FROM review WHERE id = $id"; 
echo $id;
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: review_read.php');
    exit;
} else {
    echo "Error deleting record";
}
include "adminFooter.php";
?>