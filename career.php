<?php
$title = 'Amici Ristorante - Career';
$description = 'The page for applications for Amici Ristorante restaurant';
$keywords = 'Italian, Restaurant, Hameenlinna, Cheap, Lunch, Dinner, Career, Work, Jobs';
include_once 'header.php';
?>
    <!--Content-->
    <h1 class="heading center-align">Current career opportunities</h1> <br>
    <div class= "row">
    <div class="col-sm-3">  <!--list the db rows-->
    <ul class="list">
                <li class="list-row">
                    <a class="career-link" href="#"><h3>$title</h3></a>
                    <p>$employment, $starting_date</p>
                    <hr>
                </li>
                <li class="list-row">
                    <a class="career-link" href="#"><h3>Cleaning staff</h3></a>
                    <p>Full-time or part-time, ASAP</p>
                    <hr>
                </li>
                <li class="list-row">
                    <a class="career-link" href="#"><h3>Assistant shift manager</h3></a>
                    <p>Full-time, from February</p>
                </li>
            </ul>
    </div>
    <div class="col-sm-9 center">  <!--show the database row, including the description-->
            <h2 class="center-align">$title</h2> <br>
            <span class="employment">Employment type: $employment</span> <br>
            <span class="starting">Starting date: $starting_date</span> <br>
            <span class="location">Location: $location</span> <br>
            <span class="salary">Salary: $salary €/hour</span> <br>
            <span class="contactinfo">Person of contact: $contactinfo</span> <br> <br>
            <h2>Description</h2>
            <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laborum consectetur provident aperiam? Laborum tempora, molestias earum repellat alias distinctio cum deleniti perspiciatis doloribus, vero doloremque impedit numquam maxime commodi! <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laborum consectetur provident aperiam? Laborum tempora, molestias earum repellat alias distinctio cum deleniti perspiciatis doloribus, vero doloremque impedit numquam maxime commodi! <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laborum consectetur provident aperiam? Laborum tempora, molestias earum repellat alias distinctio cum deleniti perspiciatis doloribus, vero doloremque impedit numquam maxime commodi! <br>
            </p>





    </div>
    </div>
<br>
        <div class="row">
        <div class="col-sm-4">  
        <img src="images/career/barstaff.jpg" alt="career opportunities" class="center">
        </div> 
            <div class="col-sm-8 center-align">
            <p class="career-description">Welcome to a culinary journey where passion meets expertise! <br>Join our team
                at Amici Ristorante, where we
                celebrate the art of gastronomy, creating memorable experiences through exceptional food and warm
                hospitality. <br>
                If you have any questions please feel free to contact us on our mail: <br><span class="detail-text"> <i>amici.ristorante@gmail.com</i></span>
                <br>
                We are looking forward to your application.</p>
            </div>
        </div>
    </div>


<?php
include_once 'footer.php';
?>