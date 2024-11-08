<?php

$referer = $_SERVER['HTTP_REFERER'] ?? '';
$parsed = parse_url($referer);
$location = ltrim($parsed['path'] ?? '', '/') . (isset($parsed['query']) ? '?' . $parsed['query'] : '');
$_SESSION['last_location_before_login'] = $location;  

view('login');