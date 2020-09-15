<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Above the Earth</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="oen">

  <?php
  require "header.inc.php";?>
      <!--Header ends-->

      <!-- hero starts -->
      <section class="hero" id="hero">
        <div class="container">
          <h2 class="sub-headline">
            <span class="first-letter">W</span>elcome
          </h2>
          <h1 class="headline">The Earth Explorer</h1>
          <div class="headline-description">
            <div class="separator">
              <div class="line line-left"></div>
              <div class="asterisk"><i class="fas fa-asterisk"></i></div>
              <div class="line line-right"></div>
            </div>
            <div class="single-animation">
              <h5>Ready to Explore</h5>
              <a href="#" class="btn cta-btn">Learn</a>
            </div>
          </div>
        </div>
      </section>
      <!-- hero ends -->

      <!-- Discover Our Story starts-->
      <section class="discover-our-story">
        <div class="container">
          <div class="restaurant-info">

            <!-- Restaurant description -->
            <div class="restaurant-description padding-right animate-left">
              <div class="global-headline">
                <h2 class="sub-headline">
                  <span class="first-letter">E</span>xplore
                </h2>
                <h1 class="headline headline-dark">Our Journey</h1>
                <!-- <div class="asterisk"><i class="fas fa-asterisk"></i></div> -->
              </div>

              <p>
                Become an earth explorer and learn all about NASA's various studies and works related to earth. Use these knowledge to make an impact and become an earth explorer.
              </p>
              <a href="#about" class="btn body-btn">About Us</a>
            </div>

            <div class="restaurant-info-img animate-right">
              <img src="images/nasaearth.jpg" alt="">
            </div>

          </div>
        </div>
      </section>
    <!-- Discover Our Story ends-->


    <section class="testful-recipes between">
        <div class="container">
          <div class="global-headline">
            <div class="animate-bottom">
              <a href="https://www.nasa.gov/image-feature/goddard/2020/winds-of-change-move-western-smoke-into-the-pacific" class="headline">Click Here to get the NEWS</a>
            </div>
          </div>
        </div>
    </section>
    <!-- Testful recipes ends -->


    <section class="discover-our-menu" id="quiz">
      <div class="container">
        <div class="restaurant-info" >
          <div class="image-group padding-right animate-left">
            <img src="images/onlinetest.webp" alt="">
          </div>
          <div class="restaurant-description animate-right">
            <div class="global-headline">
              <h2 class="sub-headline">
                <span class="first-letter">Q</span>uiz
              </h2>
              <h1 class="headline headline-dark">Test Yourself</h1>
            </div>
            <p>
              Time to test your skills as an earth explorer. See how much you know about Earth science , do you know how all these information is making and impact?
              Take a quiz and measure yourself against other fellow earth explorers and show off your explorer skills.
            </p>
            <a href="quiz-display.php" class="btn body-btn">Click here to participate</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Discover our menu ends -->



    <section class="perfect-blend between">
        <div class="container">
          <iframe width="100%" height="450" src="https://www.youtube.com/embed/o2t5mbpscfQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          <div class="global-headline">
            <div class="animate-top">
            </div>
            <div class="animate-bottom">
              <p>To get the latest videos of NASA</p>
              <a href="https://www.youtube.com/user/NASAtelevision" class="btn body-btn">Click here</a>
            </div>
          </div>
        </div>
    </section>
    <!-- The perfecr blend ends -->


    <?php
    require "footer.inc.php";?>

<script src="main.js"></script>
  </body>
</html>
