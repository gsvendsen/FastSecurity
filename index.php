<?php

declare(strict_types=1);
require __DIR__.'/functions.php';

session_start();

if(!isset($_SESSION['lang'])){
  $_SESSION['lang'] = 'en';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FastSecurity</title>

  <link rel="icon" href="/resources/logo.svg">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/slide-show.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/history.css">
  <link rel="stylesheet" type="text/css" href="css/article.css">
  <link rel="stylesheet" type="text/css" href="css/autonomous.css">
  <link rel="stylesheet" type="text/css" href="css/comfort.css">
  <link rel="stylesheet" type="text/css" href="css/statistics.css">
  <link rel="stylesheet" type="text/css" href="css/engineering.css">
  <link rel="stylesheet" type="text/css" href="css/smartphone.css">
  <link rel="stylesheet" type="text/css" href="css/merch.css">





</head>
<body>
  <div class="logo-container">
    <a href="" class="logo-container"><img class="logotype" src="resources/logo.svg" alt="logo"></a>
  </div>
  <div class="navbar hidden">
    <div class="hamburger-menu">
      <div class="bar"></div>
    </div>
  </div>
  <div class="desktop-menu">
    <ul class="menu-list">
      <li class="menu-item">
        <a class="nav-link" href="#"><?= translate('home') ?></a>
      </li>
      <li class="menu-item">
        <a class="nav-link" href="#"><?= translate('specs') ?></a>
      </li>
      <li class="menu-item">
        <a class="nav-link" href="#"><?= translate('safety') ?></a>
      </li>
      <li class="menu-item">
        <a class="nav-link" href="#"><?= translate('testimonials') ?></a>
      </li>
      <li class="menu-item">
        <a class="nav-link" href="#"><?= translate('contact') ?></a>
      </li>
      <li>
        <a class="lang-option" href="/?lang=en"><img class="flag" src="resources/Flag_UK.svg"></a>
        <a class="lang-option" href="/?lang=sv"><img class="flag" src="resources/Flag_SWE.svg"></a>
      </li>
    </ul>
  </div>

  <!-- MOBILE MENU -->
  <div class="menu">
    <ul>
      <li class="menu-item selected">
        <a href="#"><?= translate('home') ?></a>
      </li>
      <li class="menu-item">
        <a href="#"><?= translate('specs') ?></a>
      </li>
      <li class="menu-item">
        <a href="#"><?= translate('safety') ?></a>
      </li>
      <li class="menu-item">
        <a href="#"><?= translate('testimonials') ?></a>
      </li>
      <li class="menu-item">
        <a href="#"><?= translate('contact') ?></a>
      </li>
      <li>
        <a class="lang-option" href="/?lang=en"><img class="flag" src="resources/Flag_UK.svg"></a>
        <a class="lang-option" href="/?lang=sv"><img class="flag" src="resources/Flag_SWE.svg"></a>
      </li>
    </ul>
  </div><!-- / MOBILE MENU -->

  <!-- HERO -->
  <div class="hero">
    <div class="title-container">
      <h1 class="hero-header"><?= translate('hero-header') ?></h1>
      <p class="hero-sub"><?= translate('hero-desc') ?></p>
    </div>
    <form class="email-sign-up">
      <input class="email-input" type="text" name="email" placeholder="Email...">
      <button type="submit" name="register-button"><?= translate('register') ?></button>
    </form>
    <svg class="down-arrow" width="26" height="29" viewBox="0 0 26 29" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M13.3961 1V27.3342" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
      <path d="M24.7922 15.9381L13.3962 27.3342" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
      <path d="M2 15.9381L13.3961 27.3342" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
    </svg>

  </div><!-- /HERO -->

  <!-- HISTORY -->
  <div class="history">
     <div>
        <h3 class="history-header"><?=translate('history-header') ?></h3>
         <p class="history-text"><?= translate('history-cont') ?></p>
     </div><!--/history-content-->
     <div>
        <button class="button history-button" type="button" name="history-button">Our history
        <svg class="button-arrow" width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 8.396L18.091 8.396" stroke="white" stroke-linecap="round"/>
          <path d="M10.6948 1L18.0909 8.39608" stroke="white" stroke-linecap="round"/>
          <path d="M10.6948 15.7922L18.0909 8.39615" stroke="white" stroke-linecap="round"/>
        </svg>
      </button>
     </div>
  </div><!--/history-->

  <!-- SLIDESHOW -->
  <div class="viewport-container">
    <div class="image-slider">
      <div class="slide-container">
        <div class="slide">
          <div class="slide-show-photo">
            <img src="https://dwv100zweqd2m.cloudfront.net/uploads/user/avatar/1261/Square_Profile_Shot.jpg" class="photo">
          </div>
          <div class="slide-show-text">
            <div class="text-container">
              <h1 class="quote">"The FS1 is an incredible vehicle! More text here please... And especially the extra safety measures!"</h1>
              <p class="quote-name">Mathilde Thatsum</p>
              <p class="quote-source">CEO, Electric Solutions</p>
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="slide-show-photo">
            <img src="https://pbs.twimg.com/profile_images/73758361/square_profile_shot_400x400.jpg" class="photo">
          </div>
          <div class="slide-show-text">
            <div class="text-container">
              <h1 class="quote">"Waheeey!!!"</h1>
              <p class="quote-name">Mathilde Thatsum</p>
              <p class="quote-source">CEO, Electric Solutions</p>
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="slide-show-photo">
            <img src="https://www.hawthorn.biz/sites/default/files/styles/segment_people_profile/public/David%20Barton%20Profile%20Shot%20Square_2.jpg?itok=kFNiCDSU" class="photo">
          </div>
          <div class="slide-show-text">
            <div class="text-container">
              <h1 class="quote">"Another quote!!!"</h1>
              <p class="quote-name">Mathilde Thatsum</p>
              <p class="quote-source">CEO, Electric Solutions</p>
            </div>
          </div>
        </div>
      </div>
      <div class="slide-show-controller">
        <div class="left-arrow">
          <svg class="arrow" width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M28.3342 13.3961L1.99999 13.3961" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M13.3961 24.7922L2 13.3962" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M13.3961 2L2 13.3961" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>

        <div class="button-container">
          <div class="slide-button selected-button">
          </div>
          <div class="slide-button">
          </div>
          <div class="slide-button">
          </div>
        </div>
        <div class="right-arrow">
          <svg class="arrow" width="29" height="26" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 13.3961L27.3342 13.3961" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M15.9381 2L27.3342 13.3961" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M15.9381 24.7922L27.3342 13.3962" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
      </div>
    </div>
  </div> <!-- /SLIDESHOW -->

  <!-- AUTONOMOUS SECTION -->
  <div class="autonomous">
    <div class="text-section">
      <div class="header-section pink-margin">
        <h3 class="article-header"><?=translate('auto-header') ?></h3>
        <p class="article-text">Autonomous cars combine a variety of sensors to perceive their surroundings, such as radar, computer vision, Lidar, sonar, GPS, odometry and inertial measurement units.</p>
        <p class="article-text">A self-driving car, also known as a robot car, autonomous car, or driverless car is a vehicle that is capable of sensing its environment and moving with little or no human input.</p>
      </div>
      <div class="subheader-section">
        <h5 class="article-subheader">BRAKING SENSORS</h5>
        <p class="article-text"><?= translate('break-cont') ?></p>
      </div>
    </div>
    <div class="autonomous-image">

    </div>
  </div><!--/autonomous-->


  <!-- COMFORT SECTION -->
  <div class="comfort">
    <div class="comfort-image">
    </div>
    <div class="comfort-text">
      <div class="text-container">
        <h3 class="article-header">Maximum Comfort</h3>
        <p class="article-text">The FS1 is engineered to perfection with the finest materials in mind, creating a fantastic experience combined with the luxorious comfort of leather seats.</p>
      </div>
    </div>
  </div><!--/comfort-->

  <!-- cta -->
  <div class="CTA margin-after">
    <div class="cta-section">
      <h3 class="article-header"><?= translate('CTA-header') ?></h3>
      <p class="cta-text"><?= translate('CTA-desc') ?></p>
    </div>
     <form class="email-sign-up">
      <input class="email-input" type="text" name="email" placeholder="Email...">
      <button class="register-button" type="submit" name="button"><?= translate('register') ?></button>
     </form>
  </div><!--/cta-->

  <!-- STATS -->
  <div class="statistics">
    <div class="stats-box">
      <p class="stats-text">more than</p>
      <p class="stats-info">300 hours</p>
      <p class="stats-text">battery charge life</p>
    </div>
    <div class="stats-box">
      <p class="stats-text">less than</p>
      <p class="stats-info">5 hours</p>
      <p class="stats-text">charge time</p>
    </div>
    <div class="stats-box">
      <p class="stats-text">charging</p>
      <p class="stats-info">5 minutes</p>
      <p class="stats-text">gives 1 hours driving</p>
    </div>
  </div>

  <!-- ENGINEERING -->
  <div class="engineering">
    <div class="eng-header">
      <p class="article-pre">SPECIFICATIONS</p>
      <p class="article-bold">Engineered with perfection in mind.</p>
      <p class="article-subbold">The FS1 is engineered to perfection with the finest materials in mind, creating a fantastic experience combined with the luxorious comfort of leather seats.</p>
    </div>
    <div class="engineering-image">
    </div>
    <p class="article-subheader">ACCELERATION AND SPEED</p>
    <div class="engineering-article">
      <div class="text-section">
        <p class="article-medium">The FS1 is engineered to perfection with the finest materials in mind, creating a fantastic experience combined with the luxorious comfort of leather seats.</p>
        <div class="read-more desktop">
          <a href="#">
            Read more
            <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </a>
        </div>
      </div>
      <div class="stat-section">
        <div class="stats">
          <p class="stats-text">up to</p>
          <p class="stats-info">360 km / h</p>
          <p class="stats-text">with</p>
          <p class="stats-info">600hp</p>
          <p class="stats-text">with turbo charge</p>
        </div>
        <div class="image-section">
          <div class="stat-image">
          </div>
          <p class="stats-text">Graph on the acceleration – FS1</p>
        </div>
        <div class="read-more mobile">
          <a href="#">
            Read more
            <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <img class="engineering-image left" src="resources/interior.png">

    <p class="article-subheader">WEIGHT</p>
    <div class="engineering-article">
      <div class="text-section">
        <p class="article-medium">The difference between GVWR and wet weight is how much the motorcycle can safely carry, including fuel; the rider, passenger and their clothing; cargo; and other accessories.</p>
        <div class="read-more desktop">
          <a href="#">
            Read more
            <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </a>
        </div>
      </div>
      <div class="stat-section">
        <div class="stats">
          <p class="stats-text">FS1 weighs</p>
          <p class="stats-info">180 kg</p>
          <p class="stats-text">with a</p>
          <p class="stats-info">200 kWh</p>
          <p class="stats-text">ion battery</p>
        </div>
        <div class="read-more mobile">
          <a href="#">
            Read more
            <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="engineering-image">
    </div>

    <p class="article-subheader">RANGE</p>
    <div class="engineering-article">
      <div class="text-section">
        <p class="article-medium">The EPA rated the 2017 90D Model S's energy consumption at 3.096 miles per kWh (200.9 watt-hours per kilometer or 32.33 kWh/100 mi or 20.09 kWh/100.</p>
        <div class="read-more desktop">
          <a href="#">
            Read more
            <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </a>
        </div>
      </div>
      <div class="stat-section">
        <div class="stats">
          <p class="stats-text">with an ion</p>
          <p class="stats-info">200 kWh</p>
          <p class="stats-text">and a range of</p>
          <p class="stats-info">970 km</p>
        </div>
        <div class="read-more mobile">
          <a href="#">
            Read more
            <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <!-- CTA -->
    <div class="CTA margin-after indented">
      <div class="cta-section">
        <h3 class="article-header"><?= translate('CTA-header') ?></h3>
        <p class="cta-text"><?= translate('CTA-desc') ?></p>
      </div>
       <form class="email-sign-up">
        <input class="email-input" type="text" name="email" placeholder="Email...">
        <button class="register-button" type="submit" name="button"><?= translate('register') ?></button>
       </form>
    </div><!--/CTA-->

    <div class="multi-headers">
      <div class="subheader">
        <p class="article-subheader">REGENERATIVE BRAKES</p>
      </div>
      <div class="subheader">
        <p class="desktop article-subheader">SOMETHING ELSE</p>
      </div>
    </div>

    <div class="engineering-article">
      <div class="text-section no-border">
        <p class="article-medium">The EPA rated the 2017 90D Model S's energy consumption at 3.096 miles per kWh (200.9 watt-hours per kilometer or 32.33 kWh/100 mi or 20.09 kWh/100.</p>
        <div class="read-more desktop">
          <a href="#">
            Read more
            <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </a>
        </div>
      </div>
      <p class="mobile article-subheader">SOMETHING ELSE</p>
      <div class="text-section no-border">
        <p class="article-medium">The EPA rated the 2017 90D Model S's energy consumption at 3.096 miles per kWh (200.9 watt-hours per kilometer or 32.33 kWh/100 mi or 20.09 kWh/100.</p>
        <div class="read-more mobile">
          <a href="#">
            Read more
            <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 6.60791L21.5263 6.60791" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 2L21.6662 6.77387" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.8923 11.5479L21.6662 6.77399" stroke="#7E8EAB" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="engineering-image">
    </div>


  </div>
  <!-- /ENGINEERING -->

  <!--SMARTPHONE-->
  <div class="smartphone">
     <div class="smartphone-content">
        <div class="smartphone-article">
           <h3 class="article-header"><?= translate('phone-header') ?></h3>
           <p class="article-text"><?= translate('phone-content') ?></p>
        </div>
        <div>
           <img src='../resources/smartphone.png'>
        </div>
     </div>
     <button class="button phone-button" type="button" name="phone-button">Read more
     <svg class="button-arrow" width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
       <path d="M1 8.396L18.091 8.396" stroke="white" stroke-linecap="round"/>
       <path d="M10.6948 1L18.0909 8.39608" stroke="white" stroke-linecap="round"/>
       <path d="M10.6948 15.7922L18.0909 8.39615" stroke="white" stroke-linecap="round"/>
     </svg>
     </button>
  </div><!--/smartphone-->

  <!--MERCH-->
  <div class="merch">
     <div class="merch-content">
       <div class="merch-img">
           <img src='../resources/merch-store.png'>
       </div>
       <h3 class="article-header merch-header">Yo</h3>
       <p class="article-text merch-text">Waddup</p>
     <button class="button merch-button" type="button" name="merch-button">Our merch
     <svg class="button-arrow" width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
       <path d="M1 8.396L18.091 8.396" stroke="white" stroke-linecap="round"/>
       <path d="M10.6948 1L18.0909 8.39608" stroke="white" stroke-linecap="round"/>
       <path d="M10.6948 15.7922L18.0909 8.39615" stroke="white" stroke-linecap="round"/>
     </svg>
     </button>
   </div>
 </div><!--/merch-->

 <div class="CTA last">
   <div class="cta-section">
     <h3 class="article-header white"><?= translate('CTA-header') ?></h3>
     <p class="cta-text white"><?= translate('CTA-desc') ?></p>
   </div>
   <form class="email-sign-up">
     <input class="email-input" type="text" name="email" placeholder="Email...">
     <button class="register-button" type="submit" name="button"><?= translate('register') ?></button>
   </form>
 </div><!--/cta last-->

  <div class="footer">
     <div class="contact">
         <div class="menu-col">
          <ul>
            <li class="menu-item">
              <a href="#">Home</a>
            </li>
            <li class="menu-item">
              <a href="#">Merchandise</a>
            </li>
            <li class="menu-item">
              <a href="#">Comfort</a>
            </li>
            <li class="menu-item">
              <a href="#">Safety</a>
            </li>
          </ul>
         </div>
         <div class="menu-col">
           <ul>
             <li class="menu-item">
               <a href="#">Specifications</a>
             </li>
             <li class="menu-item">
               <a href="#">Connect</a>
             </li>
             <li class="menu-item">
               <a href="#">Policy</a>
             </li>
             <li class="menu-item">
               <a href="#">Your Data</a>
             </li>
           </ul>
         </div>
       <div class="company-info">
         <img class="footer-logotype" src="resources/logo.svg" alt="logo">
         <p>FastSecurity, Inc.</p>
         <p>Bråtaviks 12</p>
         <p>439 53 - Åsa, Sweden</p>
       </div>
     </div><!--/contact-->

    </div>

</body>
<script src="js/script.js"></script>
<script src="js/slide-show.js"></script>

</html>
