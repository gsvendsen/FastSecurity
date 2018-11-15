<?php

declare(strict_types=1);

function translate(string $key):string{

  $languages = [
    'sv' => __DIR__.'/lang/sv.php',
    'en' => __DIR__.'/lang/en.php',
  ];

  if(isset($_GET['lang'])){

    $_SESSION['lang'] = $_GET['lang'];

  }

  $selectedLanguage = require $languages[$_SESSION['lang']];

  return $selectedLanguage[$key];

}
