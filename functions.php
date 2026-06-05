<?php
function yiscroll_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=DM+Sans:wght@400;500&display=swap', array(), null);
    wp_enqueue_style('yiscroll-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'yiscroll_scripts');