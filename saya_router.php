<?php

// Router script untuk PHP built-in server
// Cek apakah file yg diminta ada secara fisik
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$file = __DIR__ . "/public" . $path;

if ($path !== '/' && file_exists($file)) {
    return false; // Biarkan PHP handle file statis (CSS, JS, gambar, dll)
}

// Kalau file tidak ada, arahkan semua request ke index.php
require_once __DIR__ . '/public/index.php';
