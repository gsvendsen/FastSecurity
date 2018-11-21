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
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/slide-show.css">

</head>
<body>
  <div class="logo-container">
    <a href="" class="logo-container"><img class="logotype" src="resources/logo.svg" alt="logo"></a>
  </div>
  <div class="navbar">
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
  </div>

  <div class="hero">
    <div class="title-container">
      <h1 class="hero-header"><?= translate('hero-header') ?></h1>
      <p class="hero-sub"><?= translate('hero-desc') ?></p>
    </div>
    <form class="email-sign-up">
      <input class="email-input" type="text" name="email" placeholder="Email...">
      <button type="submit" name="register-button"><?= translate('register') ?></button>
    </form>
  </div>
  <div class="filler-block">
  </div>
  <div class="history">
     <div class="history-content">
        <h3 ><?=translate('history-header') ?></h3>
         <p><?= translate('history-cont') ?></p>
     </div><!--/history-content-->
     <div class="history-btn">
        <button class="button" type="button" name="history-button" style="
    display: flex;
    justify-content: space-around;
    align-items: center;">Our history <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 8.396L18.091 8.396" stroke="white" stroke-linecap="round"/>
      <path d="M10.6948 1L18.0909 8.39608" stroke="white" stroke-linecap="round"/>
      <path d="M10.6948 15.7922L18.0909 8.39615" stroke="white" stroke-linecap="round"/>
      </svg>
      </button>
     </div>
  </div><!--/history-->
  <div class="filler-block">
  </div>
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
  <div class="filler-block">
  </div>
  <div class="autonomous">
     <h3><?=translate('auto-header') ?></h3>
       <p><?=translate('auto-cont') ?></p>
   <div class="filler-block-pink">
   </div>
     <h5><?= translate('break-header') ?></h5>
       <p><?= translate('break-cont') ?></p>
   <div class="divider"></div>
  </div><!--/autonomous-->
  <div class="filler-block">
  </div>
  <div class="comfort">
  </div><!--/comfort-->

  <div class="CTA">
     <h3><?= translate('CTA-header') ?></h3>
     <p><?= translate('CTA-desc') ?></p>
     <form class="email-sign-up">
      <input class="email-input" type="text" name="email" placeholder="Email...">
      <button class="register-button" type="submit" name="button"><?= translate('register') ?></button>
     </form>
  </div><!--/CTA-->

  <div class="footer">
     <div class="CTA last">
      <h3><?= translate('CTA-header') ?></h3>
      <p><?= translate('CTA-desc') ?></p>
      <form class="email-sign-up">
       <input class="email-input" type="text" name="email" placeholder="Email...">
       <button class="register-button" type="submit" name="button"><?= translate('register') ?></button>
      </form>
     </div><!--/CTA last-->
     <div class="contact">
     </div><!--/contact-->
    </div>

</body>
<script src="js/script.js"></script>
<script src="js/slide-show.js"></script>

</html>
