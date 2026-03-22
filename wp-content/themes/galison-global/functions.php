<?php
/**
 * Galison Global theme functions.
 */

if (!function_exists('galison_global_page_url')) {
    function galison_global_page_url(string $slug): string {
        $page = get_page_by_path($slug, OBJECT, 'page');
        if ($page && isset($page->ID)) {
            return get_permalink($page->ID);
        }
        return home_url('/' . $slug . '/');
    }
}

if (!function_exists('galison_global_enqueue_assets')) {
    function galison_global_enqueue_assets(): void {
        $theme_uri = get_template_directory_uri();

        wp_enqueue_style(
            'galison-global-theme',
            $theme_uri . '/assets/css/style.css',
            array(),
            '1.0.0'
        );

        wp_enqueue_script(
            'galison-global-main',
            $theme_uri . '/assets/js/main.js',
            array(),
            '1.0.0',
            true
        );
    }
}

add_action('wp_enqueue_scripts', 'galison_global_enqueue_assets');

