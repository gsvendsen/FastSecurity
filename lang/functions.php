<?php

declare(strict_types=1);

/* Function that fetches translation using two keys */
function translate(string $key1, string $key2):string {

  $languages = [
    'sv' => __DIR__.'/sv.php',
    'en' => __DIR__.'/en.php',
  ];

  /* Uses language of lang query if there is one */
  if(isset($_GET['lang'])){
      $lang = filter_var($_GET['lang'], FILTER_SANITIZE_STRING);
      /* Check if lang query exists in languages array and uses it */
      foreach ($languages as $language => $value) {
          if($lang === $language){
              $_SESSION['lang'] = $lang;
          }
      }
  }

  /* Fetches language data array using lang session */
  $selectedLanguage = require $languages[$_SESSION['lang']];
  return $selectedLanguage[$key1][$key2];
}
