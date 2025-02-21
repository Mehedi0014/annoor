<?php
/**
 * Theme functions and definitions.
 *
 * @package TutorStarterChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'TUTOR_STARTER_CHILD_VERSION', '1.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function tutor_starter_child_scripts_styles() {

	wp_enqueue_style( 'tutor-starter-child-style', get_stylesheet_directory_uri() . '/style.css', ['main'], TUTOR_STARTER_CHILD_VERSION );
	wp_enqueue_style( 'fonts-noto-sans-bengali', 'https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@100..900&display=swap', ['main'], TUTOR_STARTER_CHILD_VERSION );
	wp_enqueue_style( 'tutor-starter-child-style-max-width-991', get_stylesheet_directory_uri() . '/assets/css/max-width-991.css', ['main', 'tutor-starter-child-style'], TUTOR_STARTER_CHILD_VERSION, '(max-width: 991px)' );
	wp_enqueue_style( 'tutor-starter-child-style-max-width-768', get_stylesheet_directory_uri() . '/assets/css/max-width-768.css', ['main', 'tutor-starter-child-style'], TUTOR_STARTER_CHILD_VERSION, '(max-width: 768px)' );

}
add_action( 'wp_enqueue_scripts', 'tutor_starter_child_scripts_styles', 20 );


/* add_action('wp_footer', function() {
    global $wp_styles;
    echo '<pre>';
    foreach ($wp_styles->registered as $handle => $style) {
        if (strpos($style->src, 'tutorstarter') !== false) {
            echo "Handle: " . $handle . " → " . $style->src . "\n";
        }
    }
    echo '</pre>';
}); */


