<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // the user is logged in
} else {
    header("location: admin.php");
    exit;
}

if (isset($_SESSION['deletedReservation']) && $_SESSION['deletedReservation'] == true) {
    echo "<script>alert('Reservation was deleted!')</script>";
    unset($_SESSION['deletedReservation']);
} else if (isset($_SESSION['deletedReservation'])) {
    echo "<script>alert('Deletion cancelled')</script>";
    unset($_SESSION['deletedReservation']);
}

$description = '';
$keywords = '';
$title = 'Admin - Example 2';
include_once 'adminHeader.php';
?>


    <div class="content">
        <?php
        include_once 'adminDb.php';
        $query = "SELECT * FROM reservation";
        $result = $conn ->query($query);


        if ($result->num_rows > 0) {
            echo '<table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Number of people</th>
                <th scope="col">Extra</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>';
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <th scope='row'>{$row['id']}</th>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['reservation_date']}</td>
                <td>{$row['reservation_time']}</td>
                <td>{$row['person_num']}</td>
                <td>{$row['extra_info']}</td>
                <td class='delete-col'><a href='deleteReservation.php?id=$row[id]' class='center-text'>✖</a></td>
            </tr>";
            }

            echo '</tbody>
        </table>';
        } else {
            echo '<h1 class="center-text"> No reservations</h1>';
        }

        ?>

    </div>
<?php
include_once 'adminFooter.php';
?>