<?php
$title = 'Amici Ristorante - Thank you!';
include 'header.php';


// Check if the 'Submit review' button in the form was clicked
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve data from the form and store it in variables
    $name = $_POST['fname']; // User's name
    $email = $_POST['email']; // User's email
    $pizza = $_POST['pizza']; // Selected pizza
    $pasta = $_POST['dish']; // Selected pasta
    $rating = $_POST['overall_rating']; // Overall rating
    $comment = $_POST['comment']; // Comment

    // Include the database connection file
    include 'db.php';

    // Define an SQL query to insert data into the 'review' table
    $sql = "INSERT INTO review (name, email, fav_pizza, fav_pasta, rating, comment)
    VALUES ('$name', '$email', '$pizza', '$pasta', '$rating', '$comment')";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        echo '<div style="text-align: center; font-size: 24px;">Thank you for your feedback!</div>';
    } else {
        echo '<div style="text-align: center; font-size: 24px;">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    }

    // Close the database connection
    $conn->close();
}


?>
<h1 style="text-align: center;"><label for="star" title="star">&#128970;</label>
    <label for="star" title="star">&#128970;</label>
    <label for="star" title="star">&#128970;</label>
    <label for="star" title="star">&#128970;</label>
    <label for="star" title="star">&#128970;</label>
</h1>
<?php
// Include the footer file
include 'footer.php';
?>