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
        <a href="/?lang=sv">SWE</a>
      </li>
      <li>
        <a href="/?lang=en">ENG</a>
      </li>
    </ul>
  </div>
</body>
<script src="js/script.js"></script>
</html>
