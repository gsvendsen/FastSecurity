<?php

declare(strict_types=1);

header('Content-type: application/json');

session_start();

$lang = filter_var($_GET['locale'], FILTER_SANITIZE_STRING) ?? 'en';

$_SESSION['lang'] = $lang;

$session = $_SESSION['lang'];


$session = json_encode($session);

echo $session;
