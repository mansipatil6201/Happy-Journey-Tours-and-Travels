<?php
    session_start();
    require 'config.php';
    if($_SESSION['uname']==""){
        $_SESSION['uname']="defaultnouserloggedin";
    }
    $uname = $_SESSION['uname'];
?>

    <input type="checkbox" class="header__checkbox" id="nav-toggle">
    <label for="nav-toggle" class="nav__button">
        <span class="nav__icon">&nbsp;</span>
    </label>
    <div class="nav__background">&nbsp;</div>
    <div class="header__menu">
        <ul class="header__list">
            <?php
                if($_SESSION['uname']!="defaultnouserloggedin"){
            ?>
                <li class="list__item"><a  class="nav__link" href="#"><?=$uname?></a></li>
            <?php
                }
            ?>            
            <li class="list__item"><a class="nav__link" href="index.php">Home</a></li>
            <li class="list__item"><a class="nav__link" href="aboutus.php">About Us</a></li>
            <li class="list__item"><a class="nav__link" href="destination.php">Destinations</a></li>
            <li class="list__item"><a class="nav__link" href="contactus.php">Contact Us</a></li>
                <?php
                    if($uname=="defaultnouserloggedin"){
                        $element = '<li class="list__item"><a class="nav__link" href="login.php">Sign In</a></li>';
                        echo $element;
                    }
                    else {
                        $element = '<li class="list__item"><a class="nav__link" href="logout.php">Sign Out</a></li>';
                        echo $element;
                    }
                ?>
        </ul>
    </div>
