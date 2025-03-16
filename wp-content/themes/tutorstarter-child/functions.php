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
    wp_enqueue_style( 'fonts-noto-sans-bengali', 'https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@100..900&display=swap', [], TUTOR_STARTER_CHILD_VERSION );
    wp_enqueue_style( 'swiper-slider-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], TUTOR_STARTER_CHILD_VERSION );

    wp_enqueue_style( 'tutor-starter-child-style', get_stylesheet_directory_uri() . '/style.css', [], TUTOR_STARTER_CHILD_VERSION );
    wp_enqueue_style( 'tutor-starter-child-style-max-width-991', get_stylesheet_directory_uri() . '/assets/css/max-width-991.css', [], TUTOR_STARTER_CHILD_VERSION, '(max-width: 991px)' );
    wp_enqueue_style( 'tutor-starter-child-style-min-width-991', get_stylesheet_directory_uri() . '/assets/css/min-width-992.css', [], TUTOR_STARTER_CHILD_VERSION, '(min-width: 992px)' );
    wp_enqueue_style( 'tutor-starter-child-style-max-width-768', get_stylesheet_directory_uri() . '/assets/css/max-width-768.css', [], TUTOR_STARTER_CHILD_VERSION, '(max-width: 768px)' );

    wp_enqueue_script( 'jquery' ); 
    wp_enqueue_script( 'swiper-slider-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], TUTOR_STARTER_CHILD_VERSION, true );
    wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/assets/js/main.js', ['jquery', 'swiper-slider-script'], TUTOR_STARTER_CHILD_VERSION, true );
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


add_shortcode( 'annoor-testimonial', 'testimonials_function' );
function testimonials_function() {
	$output = '



<div class="swiper annoorSwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="container">
                <div class="row">
                    <div class="col-12 student-content">
                        <p>
                            জেনারেল লাইন থেকে আরবী শেখাটা প্রথমে খুব কঠিন কিছু মনে হত। কিন্তু কঠিন জিনিসগুলোই আপনারা গুছিয়ে উপস্থাপন করায় এখন আর তেমন কঠিন মনে হচ্ছে না। আল্লাহ যদি তাওফিক দেন তাহিলে কোর্সটাতে শেষ পর্যন্ত থাকব ইনশাআল্লাহ।
                        </p>
                    </div>
                    <div class="col-12 student-name">মোঃ মেহেদী হাসান শরীফ</div>
                    <div class="col-12 student-title">শিক্ষার্থী : কুরআন অনুধাবন কোর্স (২য় ব্যাচ)</div>
                </div>                
            </div>            
        </div>
        <div class="swiper-slide">
            <div class="container">
                <div class="row">
                    <div class="col-12 student-content">জেনারেল লাইন থেকে আরবী শেখাটা প্রথমে খুব কঠিন কিছু মনে হত। কিন্তু কঠিন জিনিসগুলোই আপনারা গুছিয়ে উপস্থাপন করায় এখন আর তেমন কঠিন মনে হচ্ছে না। আল্লাহ যদি তাওফিক দেন তাহিলে কোর্সটাতে শেষ পর্যন্ত থাকব ইনশাআল্লাহ।</div>
                    <div class="col-12 student-name">নুরুল্লাহ মেহেদী</div>
                    <div class="col-12 student-title">শিক্ষার্থী : কুরআন অনুধাবন কোর্স (২য় ব্যাচ)</div>
                </div>                
            </div>            
        </div>
    </div>

    <div class="swiper-controller">
        <i class="fas fa-angle-left annoor-next"></i>
        <i class="fas fa-angle-right annoor-prev"></i>
    </div>


</div>





    
    ';

    return $output;
}


