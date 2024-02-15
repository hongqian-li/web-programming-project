<?php
include 'adminHeader.php';
if (isset($_POST['submit'])) {
    $menu_item = $_POST['menu_item'];
    $ingredient = $_POST['ingredient'];
    $category = $_POST['category'];
    $price = $_POST['price'];

include 'adminDb.php';

//write sql statement to insert data

$sql = "insert into menu(menu_item, ingredient, category, price)
        values ('$menu_item', '$ingredient', '$category', '$price', '$employment')";

if ($conn->query($sql)===TRUE)  {
    echo "Your data was recorded";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
include 'adminFooter.php';
?>
