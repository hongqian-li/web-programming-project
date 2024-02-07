<?php
$title = 'Amici Ristorante - Gallery';
$description = 'Site dedicated to the pictures taken in the restaurant';
$keywords = 'Italian, Restaurant, Hameenlinna, Cheap, Lunch, Dinner, Gallery, Photos';
include_once 'header.php';
?>
    <!--Content-->


    <!--Inside-->
    <div class="row" id="gallery-heading">
        <h1 class="heading center-align">Gallery</h1>
        <hr class="contact-separator center">
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="carousel-container">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000"> <!-- Set interval to 3 seconds -->
                            <div class="image-container">
                                <img src="images/gallery/Inside.jpg" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000"> <!-- Set interval to 5 seconds -->
                            <div class="image-container">
                                <img src="images/gallery/Inside2.jpg" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000"> <!-- Set interval to 4 seconds -->
                            <div class="image-container">
                                <img src="images/gallery/Inside3.jpg" class="d-block w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-8 mx-auto">
            <hr>
            <p>In the heart of the city lies Amici Ristorante, an Italian culinary gem where every visit is a symphony
                of flavors and hospitality.</p>
            <hr>
        </div>
    </div>

    <!--Food-->

    <div class="row mt-3">
        <div class="col-md-8 mx-auto">
            <div class="carousel-container">
                <div id="carouselExample2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4000"> <!-- Set interval to 4 seconds -->
                            <div class="image-container">
                                <img src="images/gallery/SeafoodSpaghettiMarinara.jpeg" class="d-block w-100"
                                     alt="">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="6000"> <!-- Set interval to 6 seconds -->
                            <div class="image-container">
                                <img src="images/gallery/pizzaJuli.jpg" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000"> <!-- Set interval to 5 seconds -->
                            <div class="image-container">
                                <img src="images/gallery/Spaghet.jpeg" class="d-block w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add text or content between carousels as needed -->

    <div class="row mt-3">
        <div class="col-md-8 mx-auto">
            <hr>
            <p>Have you ever had cravings for real Italian food while being far away form Italy?! Our food is made from
                Italian chefs and only with authentic Italian ingredients. We assure you, you will feel like you are in
                Italy!</p>
            <hr>
        </div>
    </div>

    <!--Drinks-->

    <div class="row mt-3">
        <div class="col-md-8 mx-auto">
            <div class="carousel-container">
                <div id="carouselExample3" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4500">
                            <!-- Sets the interval to 4.5 seconds -->
                            <div class="image-container drinks">
                                <img src="images/gallery/LemonWater.jpeg" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000"> <!-- Sets the interval to 5 seconds -->
                            <div class="image-container drinks">
                                <img src="images/gallery/Tee.jpeg" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3500"> <!-- Sets the interval to 3.5 seconds -->
                            <div class="image-container drinks">
                                <img src="images/gallery/ItalianCoffee.jpeg" class="d-block w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-8 mx-auto">
            <hr>
            <p>Embark on a journey through the vineyards of Italy with our meticulously curated wine selection. Each
                bottle tells a story of the sun-drenched hills, the skilled hands of winemakers, and the rich terroir
                that makes Italian wines truly exceptional. Not only we have delicious wine but also a variety of other
                delicious drinks!</p>
            <hr>
        </div>
    </div>

    <!--Staff-->

    <div class="row mt-3">
        <div class="col-md-8 mx-auto">
            <div class="carousel-container">
                <div id="carouselExample4" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4500">
                            <!-- Sets the interval to 4.5 seconds -->
                            <div class="image-container">
                                <img src="images/gallery/chefs.png" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000"> <!-- Sets the interval to 5 seconds -->
                            <div class="image-container">
                                <img src="images/gallery/Staff3.png" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3500"> <!-- Sets the interval to 3.5 seconds -->
                            <div class="image-container">
                                <img src="images/gallery/Waitress4.png" class="d-block w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample4"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample4"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-8 mx-auto">
            <hr>
            <p>At the helm is Chef Giovanni, a culinary maestro crafting authentic Italian dishes with the finest
                imported ingredients. Our special trained staff makes sure that you will enjoy your time and that you
                will walk out with a smile on your face!</p>

        </div>
    </div>


<?php
include_once 'footer.php';
?>