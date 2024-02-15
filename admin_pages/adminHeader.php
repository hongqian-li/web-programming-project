<?php
$currentPage = $_SERVER['SCRIPT_NAME'];
$pageName = basename($currentPage);


if (isset($_POST['logOff'])) {
    session_unset();
    session_destroy();
    header("location: admin.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/admin-styles.css">

</head>
<body>
<div class="container-fluid" id="main-container">
    <div class="row header">
        <div class="row" id="top-header">
            <div class="col-10">
                <h1 class="header-title">Admin panel</h1>
            </div>
            <div class="col">
                <div class="dropdown">
                    <h4 class="user"><?php echo htmlspecialchars($_SESSION['username']); ?>
                        <img alt="user-icon" src="../images/adminLogin/user.png" width="30px" height="30px"></h4>
                    <div class="dropdown-content">

                        <form method="post">
                            <input id="logOff" type="submit" name="logOff" value="Log off"/>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="navigation">
            <div class="col-5"></div>
            <div class="col-7">
                <nav class="navbar navbar-expand-lg transparent-bg">
                    <div class="container-fluid">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link <?php if ($pageName == 'adminHome.php') {
                                    echo 'active';
                                } ?>" aria-current="page" href="adminHome.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($pageName == 'adminReservations.php') {
                                    echo 'active';
                                } ?>" href="adminReservations.php">Reservations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($pageName == 'careerread.php' || $pageName == 'careerform.php') {
                                    echo 'active';
                                } ?>" href="careerread.php">Career</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($pageName == 'menuform.php' || $pageName == 'menuread.php') {
                                    echo 'active';
                                } ?>" href="menuform.php">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($pageName == 'review_read.php') {
                                    echo 'active';
                                } ?>" href="review_read.php">Review</a>
                            </li>
                    </div>
                </nav>
            </div>
        </div>


    </div>

