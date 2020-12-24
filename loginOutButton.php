<?php 
    include('server.php');
    if(isset($_SESSION['username'])){
        $loginOut = '<li class="nav-item"><a id="logOut" href="logout.php" class="nav-link" style="padding-top: 5px; padding-bottom: 5px;"> <button class="btn btn-success py-0 w-100">Logout</button>  </a></li>';
        $ratingDisabled = '';
        $ratingModal = true;
        $checkOut = '';
    }else{
        $loginOut = '<li class="nav-item"><a id="Signin-up" href="" data-toggle="modal" data-target="#exampleModal" class="nav-link"> LogIn / SignUp </a></li>';
        $ratingDisabled = 'data-toggle="tooltip" data-placement="top" title="Login to Review" disabled';
        $ratingModal = false;
        $checkOut = 'data-toggle="tooltip" data-placement="top" title="Login to Checkout" disabled';
    }
?>
