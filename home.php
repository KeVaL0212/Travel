<?php include 'config.php'  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
</head>
<body>
    
<!---header section--->

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

    <!-- home section starts  -->

    <?php include 'carousel.php'  ?>

    <!-- home services section starts  -->

    <?php include 'services.php' ?>

    <!-- home about us section  -->

    <section class="home-about">
    <div class="image">
        <img src="img/about.jpg" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>“Travel is the main thing you purchase that makes you more extravagant”. We, at ‘Organization Name’, swear by this and put stock in satisfying travel dreams that make you perpetually rich constantly.</p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>

  
<!-- home packages section start  -->

<section class="home-packages">

    <h1 class="heading-title">our packages</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                 <img src="img/packages/(1).jpg" alt="">
            </div>    
                <div class="content">
                         <h3>adventure & tour</h3>
                         <p> Adventure tourism gains much of its excitement by allowing the tourist to step outside their comfort zone.</p>
                         <a href="book.php" class="btn">book now</a>
                </div>
        </div>

        <div class="box">
            <div class="image">
                 <img src="img/packages/(2).jpg" alt="">
            </div>    
                 <div class="content">
                         <h3>adventure & tour</h3>
                         <p> Adventure tourism gains much of its excitement by allowing the tourist to step outside their comfort zone.</p>
                         <a href="book.php" class="btn">book now</a>
                 </div>
        </div>

        <div class="box">
            <div class="image">
                 <img src="img/packages/(3).jpg" alt="">
            </div>    
                 <div class="content">
                         <h3>adventure & tour</h3>
                         <p> Adventure tourism gains much of its excitement by allowing the tourist to step outside their comfort zone.</p>
                         <a href="book.php" class="btn">book now</a>
                 </div>
        </div>     
     </div>
     <div class="load-more"><a href="package.php" class="btn">load more</a></div>
</section>
<!-- home packages section end  -->
    
    
<!-- home offer section starts  -->
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Make sure customer are aware that sales are time-limited</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>

<!-- home offer section ends  -->





<?php include 'footer.php'  ?>

</body>
</html>