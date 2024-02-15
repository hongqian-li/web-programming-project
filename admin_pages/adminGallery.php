<?php
include 'adminHeader.php';
?>

<div class="row mt-3">
  <div class="col-md-8 mx-auto">
    <div class="carousel-container">
      <div id="carouselExample2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="4000"> <!-- Set interval to 4 seconds -->
            <div class="image-container">
              <img src="../images/gallery/SeafoodSpaghettiMarinara.jpeg" class="d-block w-100" alt="">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="6000"> <!-- Set interval to 6 seconds -->
            <div class="image-container">
              <img src="../images/gallery/pizzaJuli.jpg" class="d-block w-100" alt="">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000"> <!-- Set interval to 5 seconds -->
            <div class="image-container">
              <img src="../images/gallery/Spaghet.jpeg" class="d-block w-100" alt="">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>

<?php
include 'adminFooter.php';
?>
