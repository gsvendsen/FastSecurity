<?php

declare(strict_types=1);

header('Content-type: application/json');

session_start();

$lang = $_GET['locale'] ?? 'en';

$_SESSION['lang'] = $lang;

$session = $_SESSION['lang'];


$session = json_encode($session);

echo $session;
