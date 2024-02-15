<?php 
$title = 'Admin - Menu';
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
    header("location: admin.php");
    exit;
}
include 'adminHeader.php';
//connecting to database
include "adminDb.php";
// SQL query to retrieve data from the 'career' table
$sql = "SELECT * FROM menu ORDER BY 'category'";
// Execute the SQL query and store the result
$result = $conn->query($sql);
// Check if there are any results
?>
<!-- Submenu -->
<div class="row" id="navigation" style="background-color: #58abfd">
            <div class="col-5"></div>
            <div class="col-7">
                <nav class="navbar navbar-expand-lg transparent-bg">
                    <div class="container-fluid">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link <?php if ($pageName == 'menuread.php') {echo 'active';}?>" aria-current="page" href="menuread.php">View and manage items</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($pageName == 'menuform.php') {echo 'active';}?>" href="menuform.php">Add new menu item</a>
                            </li>
                    </div>
                </nav>
            </div>
        </div>
<br>
<!-- Content -->
<?php
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Menu item</th>
                    <th>Ingredients</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['menu_item']}</td>
                <td>{$row['ingredient']}</td>
                <td>{$row['category']}</td>
                <td>{$row['price']}</td>
                <td><a href='menudelete.php?id=".$row['id']."'>Delete</a></td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();

include 'adminFooter.php'; ?>