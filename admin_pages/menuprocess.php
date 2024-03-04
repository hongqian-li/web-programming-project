<?php
session_start();
if (isset($_POST['submit'])) {
    $menu_item = $_POST['menu_item'];
    $ingredient = $_POST['ingredient'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    include 'adminDb.php';

//write sql statement to insert data

    $sql = "insert into menu(menu_item, ingredient, category, price)
        values ('$menu_item', '$ingredient', '$category', '$price')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['menuAdded'] = true;
    } else {
        $_SESSION['menuAdded'] = false;
        $_SESSION['menuAddedError'] = $conn->error;
    }

    header("location:menuform.php");
    $conn->close();
}

?>
