<?php

/**
 * Halaman Posts Page (Pengaturan › Membaca): arsip berita saja, memakai
 * tampilan archive.php. Bila beranda diset "tulisan terbaru", tetap index.php.
 *
 * @package justg
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (is_front_page()) {
    require get_stylesheet_directory() . '/index.php';
    return;
}

add_filter('get_the_archive_title', function ($judul) {
    $halaman = (int) get_option('page_for_posts');
    return $halaman ? get_the_title($halaman) : __('Berita', 'justg');
});

require get_stylesheet_directory() . '/archive.php';
