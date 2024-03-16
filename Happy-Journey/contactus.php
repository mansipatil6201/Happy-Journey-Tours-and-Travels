<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <title>HappyJourney | Contact Us</title>
</head>
<body>
    <header class="contactus__title">
        <div class="header__content">
            <a href="index.html" class="header__title">HappyJourney</a>
        </div>
        <?php
            include 'navbar.php';
        ?>
        <h1 class="header__text">Contact Us</h1>
    </header>

    <section class="contactus__form">
        <form action="" class="form__control">
        <h1 class="tertiary__heading">Get In Touch</h1>
            <div class="form__group">
                <input class="form__input" type="text" name="Name" id="formname" placeholder="Name">
                <label class="form__label" for="formname">Name</label>
            </div>
            <div class="form__group">
                <input class="form__input" type="email" name="Name" id="formemail" placeholder="Email">
                <label class="form__label" for="formemail">Email</label>
            </div>
            <div class="form__group">
                <input class="form__input" type="text" name="Name" id="formmsg" placeholder="Message">
                <label class="form__label" for="formmsg">Message</label>
            </div>
            <div class="form__group">
                <button>Submit</button>
            </div>
        </form>
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.753923324245!2d73.05933931490496!3d19.030562058344508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c24052e100f3%3A0xb6e3e4259b43a898!2sA.%20C.%20Patil%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1607269258482!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>
    <?php
        include 'footer.php';
    ?>
</body>
</html>