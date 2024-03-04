<?php
$title = 'Admin - Career';
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    header("location: admin.php");
    exit;
}

if (isset($_SESSION['addedCareer']) && $_SESSION['addedCareer'] == true) {
    echo "<script>alert('Successfully added data to the database!')</script>";
    unset($_SESSION['addedCareer']);
} else if (isset($_SESSION['addedCareer'])){
    $error = $_SESSION['addedCareerError'];
    echo "<script>alert('Couldn\'t add data to the database! {$error}')</script>";
    unset($_SESSION['addedCareer']);
    unset($_SESSION['addedCareerError']);
}
include 'adminHeader.php';
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
        <div class="container ">
            <div class="col-sm-11" style="margin:0 auto">
                <form name="form1" method="post" action="careerprocess.php">
                    <div class="form-group">
                        <div class="row">
                            <label for="fname">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="row">
                            <label for="lname">Description</label>
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                        <div class="row">
                            <label for="lname">Hourly wage</label>
                            <input type="text" class="form-control" id="salary"
                                   placeholder="Please enter a whole number" name="salary" required>
                        </div>
                        <div class="row">
                            <label for="lname">Person of contact</label>
                            <input type="text" class="form-control" id="contactinfo" name="contactinfo" required>
                        </div>
                        <div class="col">
                            <label for="groupid">Employment type</label>
                            <select class="form-control" id="employment" name="employment">
                                <option value="Full-time">Full-time</option>
                                <option value="Part-time">Part-time</option>
                                <option value="Part-time or Full-time">Part-time or Full-time</option>
                            </select>
                        </div>
                        <div class="row">
                            <label for="lname">Starting date:</label>
                            <input type="text" class="form-control" id="starting_date" placeholder="dd-mm-yyyy or ASAP"
                                   name="starting_date" required>
                        </div>
                        <div class="row">
                            <label for="lname">Location</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                        </div>

                    </div>
                    <button type="submit" id="careersubmitbutton" class="btn btn-primary" name="submit">Upload</button>
                </form>
            </div>
        </div>
    </div>

<?php include 'adminFooter.php'; ?>