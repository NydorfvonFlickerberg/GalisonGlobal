<?php
/**
 * Galison Global theme functions.
 */

require_once get_template_directory() . '/inc/acf-field-groups.php';

if (!function_exists('galison_global_field')) {
	/**
	 * Get an ACF field with a fallback when ACF is inactive or empty.
	 *
	 * @param string $key     Field name.
	 * @param mixed  $default Default value.
	 * @return mixed
	 */
	function galison_global_field( string $key, $default = '' ) {
		if ( ! function_exists( 'get_field' ) ) {
			return $default;
		}
		$post_id = get_queried_object_id();
		if ( ! $post_id ) {
			return $default;
		}
		$value = get_field( $key, $post_id );
		if ( null === $value || false === $value || '' === $value ) {
			return $default;
		}
		return $value;
	}
}

if (!function_exists('galison_global_field_for_post')) {
	/**
	 * Get an ACF field for a specific post ID (e.g. front page from index fallback).
	 *
	 * @param int    $post_id Post ID.
	 * @param string $key     Field name.
	 * @param mixed  $default Default value.
	 * @return mixed
	 */
	function galison_global_field_for_post( int $post_id, string $key, $default = '' ) {
		if ( ! function_exists( 'get_field' ) || $post_id < 1 ) {
			return $default;
		}
		$value = get_field( $key, $post_id );
		if ( null === $value || false === $value || '' === $value ) {
			return $default;
		}
		return $value;
	}
}

if (!function_exists('galison_global_headline_html')) {
	/**
	 * Turn textarea lines into safe HTML with line breaks.
	 *
	 * @param string $text Raw text.
	 * @return string
	 */
	function galison_global_headline_html( string $text ): string {
		$text = trim( $text );
		if ( '' === $text ) {
			return '';
		}
		return nl2br( esc_html( $text ), false );
	}
}

if (!function_exists('galison_global_acf_admin_notice')) {
	function galison_global_acf_admin_notice(): void {
		if ( ! current_user_can( 'activate_plugins' ) ) {
			return;
		}
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			return;
		}
		echo '<div class="notice notice-warning is-dismissible"><p>';
		echo esc_html__( 'Galison Global: Install and activate the Advanced Custom Fields plugin to enable editable page fields in the theme.', 'galison-global' );
		echo '</p></div>';
	}
}
add_action( 'admin_notices', 'galison_global_acf_admin_notice' );

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

