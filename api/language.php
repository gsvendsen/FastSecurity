<?php

declare(strict_types=1);

header('Content-type: application/json');

$lang = $_GET['locale'] ?? 'en';

session_start();

$languageArray = require __DIR__.'/../lang/'.$lang.'.php';

$languageJson = json_encode($languageArray);

echo $languageJson;
