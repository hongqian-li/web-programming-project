<?php
$title = 'Amici Ristorante - Restaurant reviews';
$description = 'Vote for your favorite pizza and pasta from the menu of Amici Ristorante to choose the top pizza and pasta!';
$keywords = 'Italian, Restaurant, Hameenlinna, Cheap, Lunch, Dinner, Food';
include_once 'header.php';
?>

<body>
    <div class="our-menu">

        <h1 class="menu-heading">Share Your Dining Experience</h1>
        <!-- Description of the voting process -->
        <p>Amici Ristorante is on the hunt for the ultimate top pizza and top pasta,
            and we need your help! We're inviting all our valued customers to participate
            by selecting their favorite pizza and pasta dishes from our menu.
            Your feedback is incredibly important to us,
            so please take a moment to share your thoughts about the restaurant and your dining experience.
            As a token of our appreciation, participants will have the chance to win exclusive discount vouchers.
            Join us in shaping the future of Amici Ristorante and enjoy delicious rewards along the way!
        </p>

        <h1><label for="star" title="star">&#128970;</label>
            <label for="star" title="star">&#128970;</label>
            <label for="star" title="star">&#128970;</label>
            <label for="star" title="star">&#128970;</label>
            <label for="star" title="star">&#128970;</label>
        </h1>

        <?php
        // Include the database connection file
        include 'db.php';

        // Query the database to get the average rating
        $sql = "SELECT AVG(rating) AS average_rating FROM review"; // Assuming ratings are stored in a table named 'review'
        $result = $conn->query($sql);

        // Handle the result
        if ($result->num_rows > 0) {
            // If there are rows in the result set, fetch the average rating
            $row = $result->fetch_assoc();
            $averageRating = $row["average_rating"]; 
        } else {
            $averageRating = "N/A";
        }
        ?>


        <?php if ($averageRating !== "N/A"): ?>
            <div class="average-rating">
                <h2>Restaurant Rating:
                    <?php echo number_format($averageRating, 1); ?>
                </h2>
            </div>
        <?php endif; ?>

    </div>
    <hr>


    <!-- Form section -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" action="review_process.php">
                    <h2 class="text-center mb-4">Vote for Your Top Pizza and Pasta</h2>

                    <!-- Name Form fields -->
                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text" id="name" name="fname" class="form-control" required minlength="3"
                            maxlength="30">
                        <span id="nameError" class="text-danger"></span>
                    </div>

                    <!-- Email input field -->
                    <div class="form-group">
                        <label for="email">Your Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                        <span id="emailError" class="text-danger"></span>
                    </div>

                    <!-- Select field for pizza options -->
                    <div class="form-group">
                        <label for="pizza">Select your favorite pizza:</label>
                        <select id="pizza" name="pizza" class="form-control" required>
                            <option value="" selected disabled>Select Pizza</option>
                            <option value="Margherita di bufala">Margherita di bufala</option>
                            <option value="Diavola">Diavola</option>
                            <option value="Prosciutto cotto con funghi">Prosciutto cotto con funghi</option>
                            <option value="Funghi">Funghi</option>
                            <option value="Parma con rucola">Parma con rucola</option>
                            <option value="Pear & Gorgonzola">Pear & Gorgonzola</option>
                            <option value="Siciliana">Siciliana</option>
                            <option value="Pizza di manzo con porcini">Pizza di manzo con porcini</option>
                        </select>
                    </div>

                    <!-- Select field for pasta options -->
                    <div class="form-group">
                        <label for="dish">Select your favorite pasta:</label>
                        <select id="dish" name="dish" class="form-control" required>
                            <option value="" selected disabled>Select Pasta</option>

                            <option value="Spaghetti alla carbonara">Spaghetti alla carbonara</option>
                            <option value="Tagliatelle con mozzarella di bufala">Tagliatelle con mozzarella di bufala
                            </option>
                            <option value="Pappardelle alla bolognese">Pappardelle alla bolognese</option>
                            <option value="Fettuccine ai funghi">Fettuccine ai funghi</option>
                            <option value="Spaghetti cacio e pepe">Spaghetti cacio e pepe</option>
                            <option value="Risotto al nero di seppia di mare">Risotto al nero di seppia di mare</option>
                            <option value="Linguini ai gamberetti e zucchine">Linguini ai gamberetti e zucchine</option>
                            <option value="Tagliatelle con mozzarella di bufala">Tagliatelle con mozzarella di bufala
                            </option>
                        </select>
                    </div>

                    <!-- Select field for overall restaurant rating -->
                    <div class="form-group">
                        <label for="overall_rating">Rate Our Restaurant:</label>
                        <select id="overall_rating" name="overall_rating" class="form-control" required>
                            <option value="" selected disabled>Select Rating</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <!-- Text area for leaving comments -->
                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea id="comment" name="comment" class="form-control" required></textarea>
                        <span id="commentError" class="text-danger"></span>
                    </div>
                    <br>

                    <!-- Submit button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <br>
</body>



<script>
    // Function to validate the input name field
    function validateName() {
        const name = document.getElementById("name").value;
        const nameError = document.getElementById("nameError");
        // Check if the length of the name is between 3 and 20 characters
        if (name.length < 3 || name.length > 20) {
            nameError.innerHTML = "Name must be between 3 & 20 characters.";
            return false;
        } else {
            nameError.innerHTML = "";
            return true;
        }
    }

    // This function validates the input email field.
    function validateEmail() {
        const email = document.getElementById("email").value;
        const emailError = document.getElementById("emailError");
        // It checks if the email is empty or does not contain the "@" symbol,
        if (email === "" || !email.includes("@")) {
            emailError.innerHTML = "Please enter a valid email address.";
            return false;
        } else {
            emailError.innerHTML = "";
            return true;
        }
    }

    // This function validates the input comment field.
    function validateComment() {
        const comment = document.getElementById("comment").value;
        const commentError = document.getElementById("commentError");
        // It checks if the comment length is less than 20 characters,
        if (comment.length < 20) {
            commentError.innerHTML = "Comment must be at least 20 characters long.";
            return false;
        } else {
            commentError.innerHTML = "";
            return true;
        }
    }


    // event listeners for real time validation
    document.getElementById("name").addEventListener("input", validateName);
    document.getElementById("email").addEventListener("input", validateEmail);
    document.getElementById("comment").addEventListener("input", validateComment);

</script>

<!--Footer-->
<?php
include_once 'footer.php';
?>