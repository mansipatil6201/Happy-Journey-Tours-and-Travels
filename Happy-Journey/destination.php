<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Journey | Destinations</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
</head>
<body>
    <header class="destination__header">
        <div class="header__content">
            <a href="index.html" class="header__title">HappyJourney</a>
        </div>
        <?php
            include 'navbar.php';
        ?>
        <h1 class="header__text">Destinations</h1>
    </header>
    <section class="offers">
        <h1 class="primary__heading">Popular Getaways</h1>
        <div class="offer__container">
            <div class="offer__text offer__text--1">
                <h2 class="secondary__heading">Delhi</h2>
                <p class="offer__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ea odio perferendis cum nam quaerat ratione reprehenderit, at mollitia impedit quis est, facilis natus deserunt veritatis ipsam repellendus. Inventore, mollitia.</p>
                <p class="offer__ratings">Ratings <span class=offer__ratings--value>4.5</span></p>
                <p class="offer__visits">44 people visited</p>
                <p class="offer__package">Package <span class="offer__package--value">4D/5N</span></p>
                <p class="offer__cost">Cost <span class="offer__cost--value">$250</span></p>
                <button class="offer__booking">Book Now</button>
            </div>
            <figure class="image__container image__container--1">
                <img src="images/img-1.jpg" alt="Goa" class="offer__image">
            </figure>
            
            <figure class="image__container image__container--2">
                <img src="images/img-2.jpg" alt="Nainital" class="offer__image">
            </figure>
            <div class="offer__text offer__text--2">
                <h2 class="secondary__heading">Kerala</h2>
                <p class="offer__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ea odio perferendis cum nam quaerat ratione reprehenderit, at mollitia impedit quis est, facilis natus deserunt veritatis ipsam repellendus. Inventore, mollitia.</p>
                <p class="offer__ratings">Ratings <span class=offer__ratings--value>4.0</span></p>
                <p class="offer__visits">60 people visited</p>
                <p class="offer__package">Package <span class="offer__package--value">6D/7N</span></p>
                <p class="offer__cost">Cost <span class="offer__cost--value">$450</span></p>
                <button class="offer__booking">Book Now</button>
            </div>
            
            
            <div class="offer__text offer__text--3">
                <h2 class="secondary__heading">Uttarakhand</h2>
                <p class="offer__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ea odio perferendis cum nam quaerat ratione reprehenderit, at mollitia impedit quis est, facilis natus deserunt veritatis ipsam repellendus. Inventore, mollitia.</p>
                <p class="offer__ratings">Ratings <span class=offer__ratings--value>4.3</span></p>
                <p class="offer__visits">78 people visited</p>
                <p class="offer__package">Package <span class="offer__package--value">5D/6N</span></p>
                <p class="offer__cost">Cost <span class="offer__cost--value">$300</span></p>
                <button class="offer__booking">Book Now</button>
            </div>
            <figure class="image__container image__container--3">
                <img src="images/img-4.jpg" alt="Darjeeling" class="offer__image">
            </figure>
            
        </div>
    </section>
    <?php
        include 'footer.php';
    ?>
</body>
</html>