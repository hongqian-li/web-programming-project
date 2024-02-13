<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
    header("location: admin.php");
    exit;
}
$description = '';
$keywords = '';
$title = 'Admin - Example 2';
include_once 'adminHeader.php';
?>
    <div class="content">
        <p>Page 2</p>
    </div>
<?php
include_once 'adminFooter.php';
?>