<?php
$title = 'Admin - Career';
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
    header("location: admin.php");
    exit;
}
if (isset($_SESSION['deletedCareer']) && $_SESSION['deletedCareer'] == true) {
    echo "<script>alert('Successfully deleted data from the database!')</script>";
    unset($_SESSION['deletedCareer']);
} else if (isset($_SESSION['deletedCareer'])){
    $error = $_SESSION['deletedCareerError'];
    echo "<script>alert('Couldn\'t data from the database! {$error}')</script>";
    unset($_SESSION['deletedCareer']);
    unset($_SESSION['deletedCareerError']);
}

include 'adminHeader.php';
//connecting to database
include "adminDb.php";
// SQL query to retrieve data from the 'career' table
$sql = "SELECT * FROM career";
// Execute the SQL query and store the result
$result = $conn->query($sql);
// Get the page name
$currentPage = $_SERVER['SCRIPT_NAME'];
$pageName = basename($currentPage);
?>
    <!-- Submenu -->
    <div class="row" id="navigation" style="background-color: #58abfd">
        <div class="col-5"></div>
        <div class="col-7">
            <nav class="navbar navbar-expand-lg transparent-bg">
                <div class="container-fluid">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($pageName == 'careerread.php') {
                                echo 'active';
                            } ?>" aria-current="page" href="careerread.php">View and manage listings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($pageName == 'careerform.php') {
                                echo 'active';
                            } ?>" href="careerform.php">Add new listing</a>
                        </li>
                </div>
            </nav>
        </div>
    </div>
    <br>
    <!-- Content -->

    <div class="content">
        <?php
        if ($result->num_rows > 0) {
            echo "<table class='table'>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Salary</th>
                    <th>Person of contact</th>
                    <th>employment</th>
                    <th>Starting Date</th>
                    <th>Location</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>";

            // Loop through the result set and display data in rows
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['title']}</td>
                <td>{$row['description']}</td>
                <td>{$row['salary']}</td>
                <td>{$row['contactinfo']}</td>
                <td>{$row['employment']}</td>
                <td>{$row['starting_date']}</td>
                <td>{$row['location']}</td>
                <td><a href='careerdelete.php?id=" . $row['id'] . "'>Delete</a></td>
              </tr>";
            }

            echo "</tbody></table>";
        } else {
            // Display a message if no results are found
            echo "No results";
        }
        // close the connection when done
        $conn->close();
        ?>
    </div>
<?php
include 'adminFooter.php'; ?>