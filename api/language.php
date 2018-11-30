<?php

declare(strict_types=1);

header('Content-type: application/json');

$lang = filter_var($_GET['locale'], FILTER_SANITIZE_STRING) ?? 'en';

$languageArray = require __DIR__.'/../lang/'.$lang.'.php';

$languageJson = json_encode($languageArray);

echo $languageJson;
