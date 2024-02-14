<?php
include 'adminHeader.php';
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $salary = $_POST['salary'];
    $contactinfo = $_POST['contactinfo'];
    $employment = $_POST['employment'];
    $starting_date = $_POST['starting_date'];
    $location = $_POST['location'];

include 'adminDb.php';

//write sql statement to insert data

$sql = "insert into career(title, description, salary, contactinfo, employment, starting_date, location)
        values ('$title', '$description', '$salary', '$contactinfo', '$employment', '$starting_date', '$location')";

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
