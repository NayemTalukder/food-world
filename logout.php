<?php
    session_start();
    if(isset($_SESSION['username'])){
        unset($_SESSION['username']);
        $_SESSION["logout"] = "logout";
        header("Location: index.php");
    }
?>