<?php

declare(strict_types=1);

/* Function that fetches translation using two keys */
function translate(string $key1, string $key2):string {

  $languages = [
    'sv' => __DIR__.'/sv.php',
    'en' => __DIR__.'/en.php',
  ];

  /* Fetches language data array using lang session */
  $selectedLanguage = require $languages[$_SESSION['lang']];

  return $selectedLanguage[$key1][$key2];

}
