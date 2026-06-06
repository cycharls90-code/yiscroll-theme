<?php
function yiscroll_scripts() {
    // Remix Icons CDN
    wp_enqueue_style('remix-icons', 'https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css', array(), null);

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=DM+Sans:wght@400;500&display=swap', array(), null);

    // Main stylesheet
    wp_enqueue_style('yiscroll-style', get_stylesheet_uri());

    // JS
    wp_enqueue_script('yiscroll-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'yiscroll_scripts');

// Register Navigation Menus
function yiscroll_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'yiscroll'),
        'footer'  => __('Footer Menu', 'yiscroll'),
    ));
}
add_action('after_setup_theme', 'yiscroll_menus');

// Register Footer Widget Area
function yiscroll_widgets() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'yiscroll'),
        'id'            => 'footer-widgets',
        'description'   => __('Widgets in the footer area.', 'yiscroll'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-heading">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'yiscroll_widgets');