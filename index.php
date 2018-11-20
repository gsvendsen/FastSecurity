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
      <h1><?= translate('hero-header') ?></h1>
      <p><?= translate('hero-desc') ?></p>
    </div>
    <form class="email-sign-up">
      <input class="email-input" type="text" name="email" placeholder="Email...">
      <button class="register-button" type="submit" name="button"><?= translate('register') ?></button>
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
        <button class="history-button" type="button" name="button">Read More</button>
     </div>
  </div><!--/history-->
</body>
<script src="js/script.js"></script>
</html>
