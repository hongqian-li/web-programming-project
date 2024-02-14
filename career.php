<?php
$title = 'Amici Ristorante - Career';
$description = 'The page for applications for Amici Ristorante restaurant';
$keywords = 'Italian, Restaurant, Hameenlinna, Cheap, Lunch, Dinner, Career, Work, Jobs';
include_once 'header.php';
include 'db.php';

// SQL query to retrieve data from the 'career' table
$sql = "SELECT * FROM career";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
    if ($result->num_rows > 0) {
        echo "
            <h1 class='heading center-align'>Current career opportunities</h1> <br>
            <div class= 'row'>
            <div class='col-sm-3'>  
            <ul class='list'>";
            while ($row = $result->fetch_assoc()) {
                    echo "<a class='career-link' href='career.php?opencareer={$row['id']}'><li class='list-row'><h3>{$row['title']}</h3></a>
                    <div class='row'>
                    <div class='col-sm-4 list-footer-left'>
                    <p>{$row['employment']}</p></div>
                    <div class='col-sm-8 list-footer-right'>
                    <p>Starting date: {$row['starting_date']}</p></div>
                    </div>
                    <hr>
                    ";
            } 
         echo "</ul>";
    }
    else {
        echo "<br>
        <h1 class='heading center-align'>Sorry, Currently there are no job openings</h1>
        <br>";
    }
$conn->close();

include 'db.php';
// Check if the variable is set in the URL
    if (isset($_GET['opencareer'])) {

// Get the value of the variable from the URL
        $open_career = $_GET['opencareer'];

// SQL query to retrieve data from the 'career' table
        $second_sql = "SELECT * FROM career WHERE id = '$open_career'";

// Execute the SQL query and store the result
        $second_result = $conn->query($second_sql);
        
        if ($second_result->num_rows > 0) {
       
//show the database row, including the description
            while ($second_row = $second_result->fetch_assoc()) { 
                echo "   </div>
                            <div class='col-sm-9'> 
                            <h2 class='center-align'>{$second_row['title']}</h2> <br>
                            <span class='employment'>Employment type: {$second_row['employment']}</span> <br>
                            <span class='starting'>Starting date: {$second_row['starting_date']}</span> <br>
                            <span class='location'>Location: {$second_row['location']}</span> <br>
                            <span class='salary'>Salary: {$second_row['salary']} €/hour</span> <br>
                            <span class='contactinfo'>Person of contact: {$second_row['contactinfo']}</span> <br> <br>
                            <h2>Description</h2>
                            <p class='description'>
                            {$second_row['description']}
                            </p>
                        </div>";
                        }
        }
            $conn->close();}?>
    </div>
<br>
    <div class="row">
        <div class="col-sm-4">  
        <img src="images/career/barstaff.jpg" alt="career opportunities" class="center">
        </div> 
        
        <div class="col-sm-8 center">
            <p class="career-description ">Welcome to a culinary journey where passion meets expertise! <br>Join our team
                at Amici Ristorante, where we
                celebrate the art of gastronomy, creating memorable experiences through exceptional food and warm
                hospitality. <br>
                If you have any questions please feel free to contact us on our mail: <br><span class="detail-text"> <i>amici.ristorante@gmail.com</i></span>
                <br>
                We are looking forward to your application.</p>
            </div>
        </div>
    </div>
<br>

<?php
include_once 'footer.php';
?>