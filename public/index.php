<?php
// public/index.php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$root = dirname(__DIR__);

// LẤY URL
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = rtrim($path, '/');
if ($path === '') $path = '/';

// === BỎ QUA FILE TĨNH ===
$staticPaths = ['/assets', '/uploads', '/favicon.ico'];
foreach ($staticPaths as $static) {
    if (strpos($path, $static) === 0) {
        return false;
    }
}

// === ROUTER ===
$content = null; // Khởi tạo trước

if ($path === '/' || $path === '/home') {
    $content = $root . '/views/page/home.php';
} elseif (strpos($path, '/product-detail') === 0) {
    $content = $root . '/views/page/product-detail.php';
}elseif (strpos($path, '/product-all') === 0) {
    $content = $root . '/views/page/all-products.php';
} else {
    http_response_code(404);
    $content = $root . '/views/page/404.php';
    // → Không include layout ở đây
}

// === CHỈ INCLUDE LAYOUT NẾU KHÔNG PHẢI 404 ===
if ($content && strpos($content, '404.php') === false) {
    require $root . '/views/layouts/main.php';
} else {
    // Trang 404: chỉ include nội dung
    if ($content && file_exists($content)) {
        require $content;
    } else {
        echo "<h1>404 - Không tìm thấy trang</h1>";
    }
}