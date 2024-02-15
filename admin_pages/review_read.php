<?php
$title = 'Admin - Review';
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
    header("location: admin.php");
    exit;
}

if (isset($_SESSION['reviewDeleted']) && $_SESSION['reviewDeleted'] == true) {
    echo "<script>alert('Successfully deleted data from the database!')</script>";
    unset($_SESSION['reviewDeleted']);
} else if (isset($_SESSION['reviewDeleted'])) {
    $error = $_SESSION['reviewDeletedError'];
    echo "<script>alert('Couldn\'t delete data from the database! {$error}')</script>";
    unset($_SESSION['reviewDeleted']);
    unset($_SESSION['reviewDeletedError']);
}

include 'adminHeader.php';
//connecting to database
include "adminDb.php";
// SQL query to retrieve data from the 'career' table
$sql = "SELECT * FROM review";
// Execute the SQL query and store the result
$result = $conn->query($sql);
// Check if there are any results
?>

    <!-- Content -->
    <div class="content">
        <?php
        if ($result->num_rows > 0) {
            echo "<table class='table'>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Rating</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th>Favorite Pasta</th>
                    <th>Favorite Pizza</th>
                </tr>
            </thead>
            <tbody>";

            // Loop through the result set and display data in rows
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['rating']}</td>
                <td>{$row['email']}</td>
                <td>{$row['comment']}</td>
                <td>{$row['fav_pasta']}</td>
                <td>{$row['fav_pizza']}</td>
                <td><a href='review_delete.php?id=" . $row['id'] . "'>Delete</a></td>
              </tr>";
            }

            echo "</tbody></table>";
        } else {
            // Display a message if no results are found
            echo '<h1 class="center-text"> No results</h1>';
        }
        // close the connection when done
        $conn->close();
        ?>
    </div>
<?php
include 'adminFooter.php'; ?>