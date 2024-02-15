<?php
$title = 'Amici Ristorante - Menu';
$description = 'The menu of Amici Ristorante restaurant';
$keywords = 'Italian, Restaurant, Hameenlinna, Cheap, Lunch, Dinner, Food';
include_once 'header.php';
include 'db.php';

$pizza_sql = "SELECT * FROM menu WHERE category = 'Pizza'";
$pasta_sql = "SELECT * FROM menu WHERE category = 'Pasta'";
$secondi_sql = "SELECT * FROM menu WHERE category = 'Secondi'";
$dolci_sql = "SELECT * FROM menu WHERE category = 'Dolci'";
$beverages_sql = "SELECT * FROM menu WHERE category = 'Beverages'";
$viini_sql = "SELECT * FROM menu WHERE category = 'Viini'";

$pizza_result = $conn->query($pizza_sql);
$pasta_result = $conn->query($pasta_sql);
$secondi_result = $conn->query($secondi_sql);
$dolci_result = $conn->query($dolci_sql);
$beverages_result = $conn->query($beverages_sql);
$viini_result = $conn->query($viini_sql);




?>
    <!--Content-->

    <!-- Menu Topic -->
    <div class="our-menu">

        <h1 class="menu-heading">OUR MENU</h1>
        <h3 class="menu-subheading"><a href="#pizza" class="anchor">PIZZA</a> · <a href="#pasta"
                                                                                   class="anchor">PASTA</a> · <a
                href="#secondi" class="anchor">MAIN</a> · <a href="#wine" class="anchor">WINE</a></h3>
        <p>Amici Ristorante supports and promotes the Italian gastronomic traditions.
            Our pizza Romana is made according to the unique recipe with delightful Italian ingredients.
            We also offer a selection of 10 types of delicious handmade pasta.
            Passion, attention to detail, and the best ingredients ensure you always have an unsurpassed dining
            experience
            at Amici Ristorante.
        </p>
    </div>


    <!-- Pizza Menu Items -->
    <hr>
    <div class="row">
        <div class="col-sm-6 menu-image">
            <img src="images/menu/menu_pizza.jpg" alt="Pizza Image" class="center">
        </div>
        <div class="col-sm-6">
            <h2 class="center-align" id="pizza">PIZZA</h2>
            <div class='menu-list'>
<?php
    if ($pizza_result->num_rows > 0) {
        while ($row = $pizza_result->fetch_assoc()) {
            
            echo "  <div class='menu-item'>
                    <div class='menu-title'>{$row['menu_item']}</div>
                    <div class='menu-ingredients'>{$row['ingredient']}</div>
                    <div class='menu-price'>€{$row['price']}</div>
                    </div>";
        }
    } ?>
            </div>
        </div>
    </div>


    <!-- Pasta Menu Items -->
    <div class="row">
        <div class="col-sm-6">
            <h2 class="center-align" id="pasta">PASTA</h2>
            <div class="menu-list">
            <?php
    if ($pasta_result->num_rows > 0) {
        while ($row = $pasta_result->fetch_assoc()) {
            
            echo "  <div class='menu-item'>
                    <div class='menu-title'>{$row['menu_item']}</div>
                    <div class='menu-ingredients'>{$row['ingredient']}</div>
                    <div class='menu-price'>€{$row['price']}</div>
                    </div>";
        }
    } ?>
            </div>
        </div>

        <div class="col-sm-6 menu-image">
            <img src="images/menu/menu_pasta.jpg" alt="Viini Image" class="center">
        </div>
    </div>


    <!-- Secondi Menu Items -->
    <div class="row">
        <div class="col-sm-6 menu-image">
            <img src="images/menu/menu_secondi.jpg" alt="Secondi Image" class="center">
        </div>
        <div class="col-sm-6">
            <h2 class="center-align" id="secondi">SECONDI</h2>
            <div class="menu-list">
            <?php
    if ($secondi_result->num_rows > 0) {
        while ($row = $secondi_result->fetch_assoc()) {
            
            echo "  <div class='menu-item'>
                    <div class='menu-title'>{$row['menu_item']}</div>
                    <div class='menu-ingredients'>{$row['ingredient']}</div>
                    <div class='menu-price'>€{$row['price']}</div>
                    </div>";
        }
    } ?>
            </div>
        </div>

    </div>
    <!-- Dolci Menu Items -->
    <div class="row">
        <div class="col-sm-6">
            <h2 class="center-align">DOLCI</h2>
            <div class="menu-list">
            <?php
    if ($dolci_result->num_rows > 0) {
        while ($row = $dolci_result->fetch_assoc()) {
            
            echo "  <div class='menu-item'>
                    <div class='menu-title'>{$row['menu_item']}</div>
                    <div class='menu-ingredients'>{$row['ingredient']}</div>
                    <div class='menu-price'>€{$row['price']}</div>
                    </div>";
        }
    } ?>
                
            </div>

        </div>
        <div class="col-sm-6 menu-image">
            <img src="images/menu/menu_dolci.jpg" alt="Dolci Image" class="center">
        </div>

    </div>


    <!-- Hot Beverages Menu Items -->
    <div class="row">
        <div class="col-sm-6 menu-image">
            <img src="images/menu/menu_tea.jpg" alt="Tea Image" class="center">
        </div>
        <div class="col-sm-6">
            <h2 class="center-align">BEVERAGES</h2>
            <div class="menu-list">
            <?php
    if ($beverages_result->num_rows > 0) {
        while ($row = $beverages_result->fetch_assoc()) {
            
            echo "  <div class='menu-item'>
                    <div class='menu-title'>{$row['menu_item']}</div>
                    <div class='menu-ingredients'>{$row['ingredient']}</div>
                    <div class='menu-price'>€{$row['price']}</div>
                    </div>";
        }
    } ?>
        </div>
    </div>

    <br>

    <!-- Viini Menu Items -->
    <div class="row">
        <div class="col-sm-6">
            <h2 class="center-align" id="wine">VIINI</h2>
            <div class="menu-list">
            <?php
    if ($viini_result->num_rows > 0) {
        while ($row = $viini_result->fetch_assoc()) {
            
            echo "  <div class='menu-item'>
                    <div class='menu-title'>{$row['menu_item']}</div>
                    <div class='menu-ingredients'>{$row['ingredient']}</div>
                    <div class='menu-price'>€{$row['price']}</div>
                    </div>";
        }
    } ?>
            </div>
        </div>

        <div class="col-sm-6 menu-image">
            <img src="images/menu/menu_wine.jpg" alt="Viini Image" class="center">
        </div>
    </div>

    <!--Footer-->
<?php
 $conn->close();
include_once 'footer.php';
?>