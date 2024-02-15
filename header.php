<?php
$currentPage = $_SERVER['SCRIPT_NAME'];
$pageName = basename($currentPage);
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
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/scale_styles.css">
    <link rel="stylesheet" href="styles/Galeryform.css">
</head>
<body>
<div class="container-fluid">
    <div class="row" id="header"> <!--Header-->
        <div class="col-sm-4" id="logodiv"><!---Logo-->
            <a href="index.php"><img src="images/headerFooter/flag-of-italy.png" alt="Logo" class="center"
                                     id="header-logo"></a>
        </div>
        <div class="col-sm-8">
            <div class="row" id="title"> <!---Name-->
                <h1 class="header-title">Amici Ristorante</h1>
            </div>
            <div class="row" id="title-underline">
                <img src="images/headerFooter/underline-title.png" id="underline" alt="">
            </div>

            <div class="row" id="navigation"> <!---Navbar-->
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link <?php if ($pageName == 'index.php') {
                                    echo 'current-tab';
                                } ?>" href="index.php">Home</a>
                                <a class="nav-link <?php if ($pageName == 'menu.php') {echo 'current-tab';}?>" href="menu.php">Menu</a>
                                <a class="nav-link <?php if ($pageName == 'gallery.php') {echo 'current-tab';}?>" href="gallery.php">Gallery</a>
                                <a class="nav-link <?php if ($pageName == 'reservations.php') {echo 'current-tab';}?>" href="reservations.php">Reservations</a>
                                <a class="nav-link <?php if ($pageName == 'contact.php') {echo 'current-tab';}?>" href="contact.php">Contact</a>
                                <a class="nav-link <?php if ($pageName == 'career.php') {echo 'current-tab';}?>" href="career.php">Career</a>
                                <a class="nav-link <?php if ($pageName == 'review.php') {echo 'current-tab';}?>" href="review.php">Review</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <hr> <!--Line Break-->