<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">

            <!-- Column 1: Logo + Tagline -->
            <div class="footer-col footer-brand">
                <a href="<?php echo home_url(); ?>" class="footer-logo">Yi<span>Scroll</span></a>
                <p class="footer-tagline">We grow businesses in Coimbatore and beyond with performance-driven digital marketing.</p>
                <div class="footer-socials">
                    <a href="https://www.instagram.com/yiscroll_web/" target="_blank" aria-label="Instagram"><i class="ri-instagram-line"></i></a>
                    <a href="https://www.facebook.com/yiscroll" target="_blank" aria-label="Facebook"><i class="ri-facebook-circle-line"></i></a>
                    <a href="https://www.linkedin.com/company/yiscroll" target="_blank" aria-label="LinkedIn"><i class="ri-linkedin-box-line"></i></a>
                    <a href="https://www.youtube.com/@yiscroll" target="_blank" aria-label="YouTube"><i class="ri-youtube-line"></i></a>
                </div>
            </div>

            <!-- Column 2: Services -->
            <div class="footer-col">
                <h4 class="footer-heading">Services</h4>
                <ul class="footer-links">
                    <li><a href="#">Meta Ads</a></li>
                    <li><a href="#">Google Ads</a></li>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Local SEO</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Social Media</a></li>
                </ul>
            </div>

            <!-- Column 3: Quick Links -->
            <div class="footer-col">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                    <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
                    <li><a href="<?php echo home_url('/portfolio'); ?>">Portfolio</a></li>
                    <li><a href="<?php echo home_url('/blog'); ?>">Blog</a></li>
                    <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact Info -->
            <div class="footer-col">
                <h4 class="footer-heading">Contact</h4>
                <ul class="footer-contact">
                    <li>
                        <i class="ri-map-pin-2-line"></i>
                        <span>1st Floor, 136, Balamurugan Complex, Avinashi Rd, Peelamedu, Coimbatore - 641004</span>
                    </li>
                    <li>
                        <i class="ri-phone-line"></i>
                        <a href="tel:+918667466016">+91 86674 66016</a>
                    </li>
                    <li>
                        <i class="ri-mail-line"></i>
                        <a href="mailto:yiscrollweb@gmail.com">yiscrollweb@gmail.com</a>
                    </li>
                    <li>
                        <i class="ri-whatsapp-line"></i>
                        <a href="https://wa.me/918667466016" target="_blank">WhatsApp Us</a>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom">
            <p>© <?php echo date('Y'); ?> YiScroll Digital Services. All rights reserved.</p>
            <p>Built with ❤️ in Coimbatore</p>
        </div>
    </div>
</footer>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/918667466016"
   class="whatsapp-float"
   target="_blank"
   aria-label="Chat on WhatsApp">
    <i class="ri-whatsapp-line"></i>
</a>

<?php wp_footer(); ?>
</body>
</html>