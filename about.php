<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

     <!---header section start--->

<section class="header">
    <a href="home.php" class="logo">Travel.</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>
     <!---header section end--->

     <div class="heading" style="background:url(img/head.jpg)no-repeat">
        <h1>about us</h1>
     </div>


<!-- home about section start  -->
<section class="about">
    <div class="image">
        <img src="img/about.jpg" alt="">
    </div>

    <div class="content">
        <h3>why choose us?</h3>
        <p>“Travel is the main thing you purchase that makes you more extravagant”. </p>
        <p>We, at ‘travel’, swear by this and put stock in satisfying travel dreams that make you perpetually rich constantly.</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destinations</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 guide service</span>
            </div>

        </div>
    </div>
</section>
<!-- home about section end  -->

<!-- reviews section start  -->

<section class="reviews">
    <div class="swiper reviews-slider">
        <div class="swiper-wraper">
            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"We are an employee-owned company with a passion for providing exemplary customer service, leveraging our expertise and technology to deliver innovative travel solutions in a gratifying work environment."</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="img/1.jpeg" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"We are an employee-owned company with a passion for providing exemplary customer service, leveraging our expertise and technology to deliver innovative travel solutions in a gratifying work environment."</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="img/1.jpeg" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"We are an employee-owned company with a passion for providing exemplary customer service, leveraging our expertise and technology to deliver innovative travel solutions in a gratifying work environment."</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="img/1.jpeg" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"We are an employee-owned company with a passion for providing exemplary customer service, leveraging our expertise and technology to deliver innovative travel solutions in a gratifying work environment."</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="img/1.jpeg" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"We are an employee-owned company with a passion for providing exemplary customer service, leveraging our expertise and technology to deliver innovative travel solutions in a gratifying work environment."</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="img/1.jpeg" alt="">
            </div>
        </div>
    </div>
</section>


<!-- reviews section end  -->










<?php include 'footer.php' ?>

    <!--swiper js link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!--main script file-->
    <script src="js/script.js"></script>
</body>
</html>