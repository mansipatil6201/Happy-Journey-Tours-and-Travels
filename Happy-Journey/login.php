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
    <title>HappyJourney | Login</title>
</head>
<body>
    <header class="signin__header">
        <div class="header__content">
            <div class="logo__background">&nbsp;</div>
            <a href="index.php" class="header__title header__title--pink">HappyJourney</a>
        </div>
        <?php
            include 'navbar.php';
        ?>
    </header>
    <section class="login__form">
        <form action="includes/login.inc.php" method="post" class="form__control">
            <h1 class="tertiary__heading">Sign In</h1>
            <div class="form__group">
                <input class="form__input" type="text" name="uname" id="formname" placeholder="Username" required>
                <label class="form__label" for="formname">Userame</label>
            </div>

            <div class="form__group">
                <input class="form__input" type="password" name="upass" id="formpassword" placeholder="Password" required>
                <label class="form__label" for="formpassword">Password</label>
            </div>
            
            <div class="form__group mb__3">
                <button type="submit" name="submit">Submit</button>
            </div>

            <a href="register.php" class="registration__link">Create an account</a>
        </form>
    </section>
</body>
</html>