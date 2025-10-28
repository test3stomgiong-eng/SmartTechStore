<?php
// public/index.php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$root = dirname(__DIR__);

// LẤY URL
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = rtrim($path, '/');
if ($path === '') $path = '/';

// === BƯỚC 1: BỎ QUA FILE TĨNH (CSS, JS, IMG) ===
$staticPaths = ['/assets', '/uploads', '/favicon.ico'];
foreach ($staticPaths as $static) {
    if (strpos($path, $static) === 0) {
        return false; // Nginx sẽ phục vụ file tĩnh
    }
}

// === BƯỚC 2: ROUTER CHỈ BẮT TRANG ===
if ($path === '/' || $path === '/home') {
    $content = $root . '/views/page/home.php';

} elseif ($path === '/product-detail') {
    $content = $root . '/views/page/product-detail.php';

} elseif ($path === '/product-list') {
    $content = $root . '/views/page/product-list.php';

} else {
    http_response_code(404);
    $content = $root . '/views/page/404.php';
}

require $root . '/views/layouts/main.php';