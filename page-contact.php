<?php get_header(); ?>

<main class="main-content" style="padding-top: 120px;">

    <!-- Contact Hero -->
    <section class="page-hero">
        <div class="container">
            <p class="section-label">Get In Touch</p>
            <h1 class="section-title">Let's <span class="accent">Work Together</span></h1>
            <p class="section-sub">Tell us about your business and we'll get back to you within 24 hours.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">

                <!-- Left: Form -->
                <div class="contact-form-wrap">
                    <h3>Send Us a Message</h3>
                    <form class="contact-form" id="contactForm">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" name="name" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" placeholder="john@example.com" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" placeholder="+91 98765 43210">
                        </div>
                        <div class="form-group">
                            <label>Service Interested In</label>
                            <select name="service">
                                <option value="">Select a service</option>
                                <option value="meta-ads">Meta Ads</option>
                                <option value="google-ads">Google Ads</option>
                                <option value="seo">SEO</option>
                                <option value="web-design">Web Design</option>
                                <option value="social-media">Social Media</option>
                                <option value="local-seo">Local SEO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Your Message</label>
                            <textarea name="message" rows="5" placeholder="Tell us about your business..."></textarea>
                        </div>
                        <button type="submit" class="btn-primary">Send Message →</button>
                    </form>
                </div>

                <!-- Right: Contact Info -->
                <div class="contact-info">
                    <h3>Contact Information</h3>

                    <div class="contact-item">
                        <i class="ri-map-pin-2-line"></i>
                        <div>
                            <strong>Address</strong>
                            <p>1st Floor, 136, Balamurugan Complex,<br>Avinashi Rd, Peelamedu,<br>Coimbatore - 641004</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="ri-phone-line"></i>
                        <div>
                            <strong>Phone</strong>
                            <p><a href="tel:+918667466016">+91 86674 66016</a></p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="ri-mail-line"></i>
                        <div>
                            <strong>Email</strong>
                            <p><a href="mailto:yiscrollweb@gmail.com">yiscrollweb@gmail.com</a></p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="ri-time-line"></i>
                        <div>
                            <strong>Working Hours</strong>
                            <p>Monday - Saturday<br>9:00 AM - 6:00 PM</p>
                        </div>
                    </div>

                    <div class="contact-socials">
                        <a href="https://www.instagram.com/yiscroll_web/" target="_blank"><i class="ri-instagram-line"></i></a>
                        <a href="https://www.facebook.com/yiscroll" target="_blank"><i class="ri-facebook-circle-line"></i></a>
                        <a href="https://wa.me/918667466016" target="_blank"><i class="ri-whatsapp-line"></i></a>
                    </div>

                    <!-- Google Maps -->
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.2!2d77.0!3d11.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDAwJzAwLjAiTiA3N8KwMDAnMDAuMCJF!5e0!3m2!1sen!2sin!4v1234567890"
                            width="100%"
                            height="200"
                            style="border:0; border-radius: 8px;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>