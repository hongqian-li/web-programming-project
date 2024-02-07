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
                    <label for="exampleInputEmail1" class="form-label center">Email address</label>
                    <input type="email" class="form-control center" id="exampleInputEmail1"
                           aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

                    <button type="submit" class="btn btn-primary center">Submit</button>
                </div>
            </form>
        </div>

    </div>

<?php
include_once 'footer.php';
?>