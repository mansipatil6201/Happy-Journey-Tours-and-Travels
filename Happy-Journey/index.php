<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Happy Journey</title>
</head>
<body>
    <section class="header">
        <div class="header__content">
            <a href="index.php" class="header__title">HappyJourney</a>
        </div>
        <div class="header__msg">
            <p class="header__text">Exploring The World</p>
            <p class="header__para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem necessitatibus accusamus corrupti iure reprehenderit excepturi consequatur id consectetur, reiciendis perspiciatis omnis. Deleniti ea similique ad nihil, excepturi soluta reiciendis vitae?</p>
            <button class="header__cta">Get in touch</button>
        </div>
        <?php
            include 'navbar.php';
        ?>
    </section>
    <section class="offers">
        <h1 class="primary__heading">Best Offers</h1>
        <div class="offer__container">
            <div class="offer__text offer__text--1">
                <h2 class="secondary__heading">Goa</h2>
                <p class="offer__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ea odio perferendis cum nam quaerat ratione reprehenderit, at mollitia impedit quis est, facilis natus deserunt veritatis ipsam repellendus. Inventore, mollitia.</p>
                <p class="offer__ratings">Ratings <span class=offer__ratings--value>4.5</span></p>
                <p class="offer__visits">44 people visited</p>
                <p class="offer__package">Package <span class="offer__package--value">4D/5N</span></p>
                <p class="offer__cost">Cost <span class="offer__cost--value">$250</span></p>
                <button class="offer__booking">Book Now</button>
            </div>
            <figure class="image__container image__container--1">
                <img src="images/img-5.jpg" alt="Goa" class="offer__image">
            </figure>
            
            <figure class="image__container image__container--2">
                <img src="images/img-6.jpg" alt="Nainital" class="offer__image">
            </figure>
            <div class="offer__text offer__text--2">
                <h2 class="secondary__heading">Nainital</h2>
                <p class="offer__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ea odio perferendis cum nam quaerat ratione reprehenderit, at mollitia impedit quis est, facilis natus deserunt veritatis ipsam repellendus. Inventore, mollitia.</p>
                <p class="offer__ratings">Ratings <span class=offer__ratings--value>4.0</span></p>
                <p class="offer__visits">60 people visited</p>
                <p class="offer__package">Package <span class="offer__package--value">6D/7N</span></p>
                <p class="offer__cost">Cost <span class="offer__cost--value">$450</span></p>
                <button class="offer__booking">Book Now</button>
            </div>
            
            
            <div class="offer__text offer__text--3">
                <h2 class="secondary__heading">Darjeeling</h2>
                <p class="offer__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ea odio perferendis cum nam quaerat ratione reprehenderit, at mollitia impedit quis est, facilis natus deserunt veritatis ipsam repellendus. Inventore, mollitia.</p>
                <p class="offer__ratings">Ratings <span class=offer__ratings--value>4.3</span></p>
                <p class="offer__visits">78 people visited</p>
                <p class="offer__package">Package <span class="offer__package--value">5D/6N</span></p>
                <p class="offer__cost">Cost <span class="offer__cost--value">$300</span></p>
                <button class="offer__booking">Book Now</button>
            </div>
            <figure class="image__container image__container--3">
                <img src="images/img-7.jpg" alt="Darjeeling" class="offer__image">
            </figure>
            
        </div>
    </section>
    <section class="whychooseus">
        <h1 class="primary__heading">Why Choose Us?</h1>
        <div class="chooseus__content">
            <div class="chooseus__container">
                <div class="image__box">
                    <img src="https://img.icons8.com/pastel-glyph/64/000000/facebook-like--v1.png"/>
                </div>
                <div class="chooseus__text">
                    <h3 class="secondary__heading">Highly Qualified Service</h3>
                    <p class="chooseus__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. In quia deserunt, repellendus inventore qui fuga non totam nesciunt facilis sed est perspiciatis quod sequi maxime, tempora, sint nulla ab labore?</p>
                </div>
            </div>
            <div class="chooseus__container">
                <div class="image__box">
                    <img src="https://img.icons8.com/fluent-systems-regular/64/000000/trophy.png"/>                </div>
                <div class="chooseus__text">
                    <h3 class="secondary__heading">Handpicked<br>Hotels</h3>
                    <p class="chooseus__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. In quia deserunt, repellendus inventore qui fuga non totam nesciunt facilis sed est perspiciatis quod sequi maxime, tempora, sint nulla ab labore?</p>
                </div>
            </div>
            <div class="chooseus__container">
                <div class="image__box">
                    <img src="https://img.icons8.com/fluent-systems-regular/64/000000/like.png"/>                </div>
                <div class="chooseus__text">
                    <h3 class="secondary__heading">Best price<br>garauntee</h3>
                    <p class="chooseus__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. In quia deserunt, repellendus inventore qui fuga non totam nesciunt facilis sed est perspiciatis quod sequi maxime, tempora, sint nulla ab labore?</p>
                </div>
            </div>
        </div>
        <button class="header__cta header__cta--center">Get in touch</button>
    </section>
    <section class="testimonials">
        <h1 class="primary__heading">What Customers Say</h1>
        <p class="testimonial__text">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde fugiat earum esse cumque nulla dolor maxime qui eligendi aliquam pariatur, possimus laudantium dicta minima repellat minus facere consequuntur, nam ad.
        </p>
        <p class="testimonial__author">
            John Doe
        </p>
    </section>
    <?php
        include 'footer.php';
    ?>
</body>
</html>