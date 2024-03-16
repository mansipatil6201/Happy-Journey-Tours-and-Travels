<?php
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <title>Happy Journey | Sign Up</title>
</head>
<body>
    <header class="signin__header">
        <div class="header__content">
            <div class="logo__background">&nbsp;</div>
            <a href="index.php" class="header__title header__title--pink">HappyJourney</a>
        </div>
        <input type="checkbox" class="header__checkbox" id="nav-toggle">
        <label for="nav-toggle" class="nav__button">
            <span class="nav__icon">&nbsp;</span>
        </label>
        <div class="nav__background">&nbsp;</div>
        <div class="header__menu">
            <ul class="header__list">
                <li class="list__item"><a class="nav__link" href="index.php">Home</a></li>
                <li class="list__item"><a class="nav__link" href="aboutus.html">About Us</a></li>
                <li class="list__item"><a class="nav__link" href="#">Destinations</a></li>
                <li class="list__item"><a class="nav__link" href="contactus.html">Contact Us</a></li>
                <li class="list__item"><a class="nav__link" href="login.html">Sign Up</a></li>
            </ul>
        </div>
    </header>
    <section class="login__form register__form">
        <form action="includes/register.inc.php" method="post" class="form__control">
            <h1 class="tertiary__heading">Sign Up</h1>
            <div class="form__group">
                <input class="form__input" type="text" name="name" id="formname" placeholder="Name" required>
                <label class="form__label" for="formname">Name</label>
            </div>

            <div class="form__group">
                <input class="form__input" type="email" name="uemail" id="formemail" placeholder="Email">
                <label class="form__label" for="formemail">Email</label>
            </div>
            <div class="form__group">
                <input class="form__input" type="number" name="umobn" id="formmobile" placeholder="Mobile Number">
                <label class="form__label" for="formmobile">Mobile Number</label>
            </div>

            <div class="form__group">
                <input class="form__input" type="number" name="uage" id="formage" placeholder="Age(years)">
                <label class="form__label" for="formage">Age</label>
            </div>

            <div class="form__group">
                <input class="form__input" type="text" name="uname" id="formusername" placeholder="Username" required>
                <label class="form__label" for="formusername">Userame</label>
            </div>

            <div class="form__group">
                <input class="form__input form__input--password" type="password" name="upass" id="formpassword" placeholder="Password" required>
                <label class="form__label" for="formpassword">Password</label>
            </div>
            
            <div class="form__group mb__3">
                <button type="submit" name="submit">Submit</button>
            </div>
            
            <a href="login.php" class="registration__link">Already an user? Login here</a>
        </form>
    </section>

    <!-- <?php
        
    ?> -->
</body>
</html>