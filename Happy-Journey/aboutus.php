<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Journey | About Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
</head>
<body>
    
    <header class="title">
        <div class="header__content">
            <a href="index.html" class="header__title">HappyJourney</a>
        </div>
        <?php
            include 'navbar.php';
        ?>
        <h1 class="header__text">About Us</h1>
    </header>
    <section class="aboutus">
        <div class="aboutus__content">
            <p class="aboutus__text aboutus__text--1"><span class="logo logo__pink">HappyJourney</span> is a Travel planning agency dedicated to luxury travel, exotic destinations, all inclusive resorts, cruises, villas and yacht rentals. We create beautiful travel memories for solo travelers, couples, families and groups.</p>
            <img src="images/img-5.jpg" alt="" class="aboutus__image aboutus__image--1">
            <img src="images/img-6.jpg" alt="" class="aboutus__image aboutus__image--2">
            <p class="aboutus__text aboutus__text--2">We believe that properly planned travel can create amazing memories to last a lifetime. Careful planning, knowledge, and attention to detail are of paramount importance to achieve this.
                Our experience traveling the world, our abundance of destination knowledge, attention to details, and research skills, make us the perfect partner to help plan your journey.</p>
            <p class="aboutus__text aboutus__text--3">In addition, we have extensive resources due to partnerships with some of the top travel suppliers in the world. This, coupled with our globe-trotting experience, continuing education and research skills, enable us to help you create travel experiences you will cherish forever.</p> 
            <img src="images/img-7.jpg" alt="" class="aboutus__image aboutus__image--3">   
        </div>        
    </section>
    <?php
        include 'footer.php';
    ?>
</body>
</html>