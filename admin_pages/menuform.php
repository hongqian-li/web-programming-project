<?php
$title = 'Admin - Menu';
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    header("location: admin.php");
    exit;
}

if (isset($_SESSION['menuAdded']) && $_SESSION['menuAdded'] == true) {
    echo "<script>alert('Successfully added data to the database!')</script>";
    unset($_SESSION['menuAdded']);
} else if (isset($_SESSION['menuAdded'])){
    $error = $_SESSION['menuAddedError'];
    echo "<script>alert('Couldn\'t add data to the database! {$error}')</script>";
    unset($_SESSION['menuAdded']);
    unset($_SESSION['menuAddedError']);
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
                            <a class="nav-link <?php if ($pageName == 'menuread.php') {
                                echo 'active';
                            } ?>" aria-current="page" href="menuread.php">View and manage items</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($pageName == 'menuform.php') {
                                echo 'active';
                            } ?>" href="menuform.php">Add new menu item</a>
                        </li>
                </div>
            </nav>
        </div>
    </div>
    <br>
    <!-- Content -->
    <div class="content">
        <div class="container">
            <div class="col-sm-11" style="margin:0 auto">
                <form name="form1" method="post" action="menuprocess.php">
                    <div class="form-group">
                        <div class="row">
                            <label for="menu_item">Menu item</label>
                            <input type="text" class="form-control" id="menu_item" name="menu_item" required>
                        </div>
                        <div class="row">
                            <label for="ingredient">Ingredient</label>
                            <input type="text" class="form-control" id="ingredient" name="ingredient" required>
                        </div>
                        <div class="col">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="category">
                                <option value="Pizza">Pizza</option>
                                <option value="Pasta">Pasta</option>
                                <option value="Secondi">Secondi</option>
                                <option value="Dolci">Dolci</option>
                                <option value="Beverages">Beverages</option>
                                <option value="Viini">Viini</option>
                            </select>
                        </div>
                        <div class="row">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>
                    </div>
                    <button type="submit" id="menusubmitbutton" class="btn btn-primary" name="submit">Upload</button>
                </form>
            </div>
        </div>
    </div>

<?php include 'adminFooter.php'; ?>