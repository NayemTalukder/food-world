<?php include('header.php') ?>
<style>
  .foodFocus:hover{
    color: #ffffff !important;
  } 
</style>

      <!-- header-->
      <div id="header" class="header">
        <div class="container">
            <div class="row">
                <form action="foodSearch.php" method="POST">
                    <div class="input-group btn">
                        <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Search for food..." name="searchData">
                        <button type="submit" name="search" class="input-group-text" id="sizing-addon1"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                </div>
            </div>
          </div>
      
      <!-- header ends-->
           
       <!--Clients--> 
      <div id="client" class="client">
        <div class="container">
            <h2 class="wow slideInUp" data-wow-delay="0.4s">What do you want?</h2>
            <p class="wow fadeInUp" data-wow-delay="0.8s">Are you in hurry, there?</p>
            <div class="row">
                <div class="col-lg-3 col-md-3 wow rotateIn" data-wow-delay="0.4s">
                    <img src="images/burger.jpg" alt="">
                    <form action="foodSearchByCat.php" method="post">
                        <input name="searchData" class="w-100" type="text" value="Burger" id="resName" style="display: none">
                        <button
                        style="cursor: pointer; font-size: 15px;"
                        class="btn btn-outline-success w-100 text-dark foodFocus" type="submit" name="search">Burger</button>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 wow rotateIn" data-wow-delay="0.8s">
                    <img src="images/pizza.jpg" alt="">
                    <form action="foodSearchByCat.php" method="post">
                        <input name="searchData" class="w-100" type="text" value="Pizza" id="resName" style="display: none">
                        <button
                        style="cursor: pointer; font-size: 15px;"
                        class="btn btn-outline-success w-100 text-dark foodFocus" type="submit" name="search">Pizza</button>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 wow rotateIn" data-wow-delay="1.2s">
                    <img src="images/chicken.jpeg" alt="">
                    <form action="foodSearchByCat.php" method="post">
                        <input name="searchData" class="w-100" type="text" value="Chicken" id="resName" style="display: none">
                        <button
                        style="cursor: pointer; font-size: 15px;"
                        class="btn btn-outline-success w-100 text-dark foodFocus" type="submit" name="search">Chicken</button>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 wow rotateIn" data-wow-delay="1.6s">
                    <img src="images/roll.jpg" alt="">
                    <form action="foodSearchByCat.php" method="post">
                        <input name="searchData" class="w-100" type="text" value="Roll" id="resName" style="display: none">
                        <button
                        style="cursor: pointer; font-size: 15px;"
                        class="btn btn-outline-success w-100 text-dark foodFocus" type="submit" name="search">Roll</button>
                    </form>
                </div>
            </div>
          </div>
      </div>
      
     <!--Clients ends--> 

      
    <!-- service -->
      <div id="services" class="services">
        <div class="container">
            <h2 class="wow fadeInLeft">services</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4">We always value your time, there!</p>
            <div class="row">
                <div class="col-lg-3 col-md-3  wow bounceInDown" data-wow-delay="1.8s" style="cursor: pointer">
                    <a href="reservation.php" class="text-dark">
                    <i class="fas fa-check"></i>
                        <h4 class="mt-4">Reservation</h4>
                        <p>Book your sit</p>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 wow bounceInLeft" data-wow-delay="1.4s" style="cursor: pointer">
                    <a href="foodDelivery.php" class="text-dark">
                    <i class="fas fa-truck"></i>
                        <h4 class="mt-4">Food Delivery</h4>
                        <p class="wow fadeInLeft">Too tired to go out?</p>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 wow bounceInRight" data-wow-delay="0.8s" style="cursor: pointer">
                    <a href="restaurant.php" class="text-dark">
                    <i class="fas fa-utensils"></i>
                        <h4 class="mt-2">restaurant Suggestions</h4>
                        <p> Choose Your Suitable One</p>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 wow bounceInUp" data-wow-delay="0.4" style="cursor: pointer">
                    <a href="food.php" class="text-dark">
                    <i class="fas fa-pizza-slice"></i>
                        <h4 class="mt-4">Food Suggestions</h4>
                        <p> Choose Your Desire One</p>
                        <p class="wow fadeInLeft">  </p>
                    </a>
                </div>
            </div>
          </div>
      </div>
      
      
      <!-- service ends-->
      
      <?php include('loginModal.php') ?>

     <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // collect value of input field
    //     $name = $_POST['fname'];
    //     if (empty($name)) {
    //         echo "Name is empty";
    //     } else {
    //         echo $name;
    //     }
    // }
?>

      
<?php include('footer.php') ?>