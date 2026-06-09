<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header" id="site-header">
    <div class="container header-inner">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">Yi<span>Scroll</span></a>
        </div>
        <nav class="main-nav">
            <ul class="nav-list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About</a></li>
            </ul>
            <a href="#" class="btn-nav">Get Free Consultation</a>
        </nav>
        <button class="hamburger" id="hamburger">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<div class="mobile-nav-overlay" id="mobileNav">
    <button class="mobile-nav-close" id="mobileNavClose">✕</button>
    <ul class="mobile-nav-list">
        <li><a href="#">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">About</a></li>
    </ul>
    <a href="#" class="btn-primary btn-nav-mobile">Get Free Consultation</a>
</div>

