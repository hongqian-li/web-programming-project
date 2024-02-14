<?php
$title = 'Amici Ristorante - Reservations';
$description = 'The reservation page for the Amici Ristorante restaurant';
$keywords = 'Italian, Restaurant, Hameenlinna, Cheap, Lunch, Dinner, Reservations';
include_once 'header.php';
?>
    <!--Content-->
    <div class="row">
        <div class="col-sm-7 center" id="reservationform">
            <h2 class="center-align heading">Make a reservation with us</h2>
            <hr>
            <p class="description center center-align"> To make a reservation please enter your e-mail for verification.
                We will e-mail you with a verification code,
                that you need to enter. <br>Then you can make the reservation.
            </p>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label center">Reservation name</label>
                    <input type="text" class="form-control center" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Time</label>
                    <select id="time" class="form-select" name="time">
                        <option>Disabled select</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="peopleNum" class="form-label">Number of people</label>
                    <input type="number" class="form-control" id="peopleNum" name="peopleNum">
                </div>
                <div class="mb-3">
                    <label for="extraInfo" class="form-label">Extra info</label>
                    <textarea class="form-control" id="extraInfo" rows="3" name="extraInfo"></textarea>
                </div>
                <button type="submit" class="btn btn-primary center">Submit</button>
            </form>
        </div>

    </div>

<?php
include_once 'footer.php';
?>