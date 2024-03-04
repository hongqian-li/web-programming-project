<?php
session_start();
$title = 'Amici Ristorante - Reservations';
$description = 'The reservation page for the Amici Ristorante restaurant';
$keywords = 'Italian, Restaurant, Hameenlinna, Cheap, Lunch, Dinner, Reservations';
include_once 'header.php';

if (isset($_SESSION['emailTaken']) && $_SESSION['emailTaken'] == true) {
    echo "<script>alert('Email was already used!')</script>";
    unset($_SESSION['emailTaken']);
} else if (isset($_SESSION['emailTaken'])) {
    echo "<script>alert('Successful reservation! Your reservation id is: {$_SESSION['reservation-id']}')</script>";
    unset($_SESSION['emailTaken']);
}

if (isset($_SESSION['cancel']) && $_SESSION['cancel'] == true) {
    echo "<script>alert('Succesfully removed your reservation!')</script>";
    unset($_SESSION['cancel']);
} else if (isset($_SESSION['cancel'])) {
    if (isset($_SESSION['match']) && $_SESSION['match'] == true) {
        echo "<script>alert('There is a server error!')</script>";
        unset($_SESSION['match']);
    } else {
        echo "<script>alert('The info doesn\'t match!')</script>";
        unset($_SESSION['match']);
    }
    unset($_SESSION['cancel']);
}

?>
    <!--Content-->
    <div class="row">
        <div class="col-sm-7 center" id="myForm">
            <h2 class="center-align heading">Make a reservation with us</h2>
            <hr>
            <p class="description center center-align"> Submit the info about your reservation and have a guaranteed
                place just for you!
            </p>
            <form method="post" action="reservationsProcess.php" onsubmit="return validateForm()"
                  name="reservationForm">
                <div class="mb-3">
                    <label for="name" class="form-label center">Reservation name</label>
                    <input type="text" class="form-control center" id="name" name="name" required minlength="3"
                           maxlength="50">
                    <span id="nameError"></span>

                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <span id="emailError"></span>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required
                           min="<?php echo date("Y-m-d") ?>">
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Time</label>
                    <select id="time" class="form-select" name="time" required>
                        <option value="11:00:00">11:00-13:00</option>
                        <option value="12:00:00">12:00-14:00</option>
                        <option value="13:00:00">13:00-15:00</option>
                        <option value="14:00:00">14:00-16:00</option>
                        <option value="15:00:00">15:00-17:00</option>
                        <option value="16:00:00">16:00-18:00</option>
                        <option value="17:00:00">17:00-19:00</option>
                        <option value="18:00:00">18:00-20:00</option>
                        <option value="19:00:00">19:00-21:00</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="peopleNum" class="form-label">Number of people</label>
                    <input type="number" class="form-control" id="peopleNum" name="peopleNum" required min="1">
                    <span id="peopleNumError"></span>
                </div>
                <div class="mb-3">
                    <label for="extraInfo" class="form-label">Extra info</label>
                    <textarea class="form-control" id="extraInfo" rows="3" name="extraInfo"></textarea>
                </div>
                <button type="submit" class="btn btn-primary center" name="submit" value="submit">Submit</button>
            </form>
        </div>
        <h3 class="center-align" id="reservation-id">Remember your id to be able to cancel your reservation later
            on!</h3>

    </div>
    <!--Form for the cancellation of your previously made reservation-->
    <div class="row" id="cancelForm">
        <div class="col-sm-7 center">
            <h2 class="center-align heading">Cancel your reservation</h2>
            <hr>
            <p class="description center center-align"> Plans change and we do understand that. You can easily cancel
                your reservation with us!
            </p>
            <form method="post" action="cancelReservation.php" onsubmit="" name="">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <span id="emailError"></span>
                </div>
                <div class="mb-3">
                    <label for="reservationId" class="form-label">ID of the reservation</label>
                    <input type="number" class="form-control" id="reservationId" name="reservationId" required min="1">
                    <span id="peopleNumError"></span>
                </div>
                <button type="submit" class="btn btn-primary center" name="submit" value="submit">Submit</button>
            </form>
        </div>
    </div>


    <script>
        function validateForm() {
            const currDate = new Date();
            const submittedDate = document.forms["reservationForm"]["date"].value;
            const submitDateObj = new Date(submittedDate);
            const currHours = currDate.getHours();
            const submittedTime = document.forms["reservationForm"]["time"].value;

            if (currDate.getDate() == submitDateObj.getDate() && currDate.getMonth() == submitDateObj.getMonth() && currDate.getFullYear() == submitDateObj.getFullYear()) {
                if (currHours >= parseInt(submittedTime.substring(0, 2))) {
                    alert('This time has already passed!');
                    return false;
                }
            }

        }

        function validateName() {
            const name = document.getElementById("name").value;
            const nameError = document.getElementById("nameError");

            if (name.length < 3 || name.length > 20) {
                nameError.innerHTML = "Name must be between 3 & 20 characters";
                return false;
            } else {
                nameError.innerHTML = "";
                return true;
            }
        }


        function validateEmail() {
            const email = document.getElementById("email").value;
            const emailError = document.getElementById("emailError");

            if (email === "" || !email.includes("@")) {
                emailError.innerHTML = "Please enter a valid email address";
                return false;
            } else {
                emailError.innerHTML = "";
                return true;
            }
        }

        function validatePeopleNum() {
            const peopleNum = document.getElementById("peopleNum").value;
            const peopleNumError = document.getElementById("peopleNumError");

            if (peopleNum < 1) {
                peopleNumError.innerHTML = "The reservation must be for at least 1 person";
                return false;
            } else {
                peopleNumError.innerHTML = "";
                return true;
            }
        }


        // event listeners for real time validation
        document.getElementById("name").addEventListener("input", validateName);
        document.getElementById("email").addEventListener("input", validateEmail);
        document.getElementById("peopleNum").addEventListener("input", validatePeopleNum);

    </script>


<?php
include_once 'footer.php';
?>