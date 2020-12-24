<?php

    session_start();
    if(isset($_SESSION['reviewfeedback'])){
        unset($_SESSION['reviewfeedback']);
		echo "<script type='text/javascript'>alert('Your rating Accepted')</script>";
    }

    if(isset($_SESSION['register'])){
        unset($_SESSION['register']);
		echo "<script type='text/javascript'>alert('Your registration is successful')</script>";
    }else if(isset($_SESSION["regValidUser"])){
        unset($_SESSION['regValidUser']);
        session_destroy();
        echo "<script type='text/javascript'>alert('Username already exists')</script>";
    }else if(isset($_SESSION['regValidEmail'])){
        unset($_SESSION['regValidEmail']);
        session_destroy();
        echo "<script type='text/javascript'>alert('This email id already has a username')</script>";
    }

    if(isset($_SESSION['login'])){
        unset($_SESSION['login']);
		echo "<script type='text/javascript'>alert('You are now logged in')</script>";
    }else if(isset($_SESSION["logout"])){
        unset($_SESSION['logout']);
        session_destroy();
        echo "<script type='text/javascript'>alert('You are now logged Out')</script>";
    }else if(isset($_SESSION['loginincorrect'])){
        unset($_SESSION['loginincorrect']);
        session_destroy();
		echo "<script type='text/javascript'>alert('Your username or password is incorrect')</script>";
    }
?>
<!DOCTYPE html>
<?php include('loginOutButton.php') ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>What food item are you looking for?</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">  

    <script src="https://kit.fontawesome.com/fcffb707d9.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!--navigation start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a href="index.php" class="navbar-brand">Food World</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item "><a href="index.php#client" class="nav-link">Explore</a></li>
                    <li class="nav-item"><a href="index.php#services" class="nav-link">services</a></li>
                    <?php echo $loginOut  ?>
                </ul>
            </div>
            <span><i id="cart" data-toggle="modal" data-target="#exampleModal1" 
            class="fa fa-shopping-cart ccart" style="cursor: pointer; font-size: 25px"></i></span>

        </div>
    </nav>
       <!--navigation ends-->

    <?php include('cartModal.php') ?>