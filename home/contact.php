<!-- Contact Section -->
<section class="contact-custom-section" id="contact">
    <!-- Left Column: Form -->
    <div class="contact-form-column">
        <p class="contact-subtitle">Contact Us</p>
        <h2 class="contact-main-title">Have an upcoming project?</h2>
        <form action="contact_submit.php" method="POST">
            <div class="contact-form-grid">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="E-Mail" required>
                <input type="tel" name="phone" placeholder="Phone Number">
                <input type="url" name="website" placeholder="Your Website">
                <textarea name="message" placeholder="Your Message Here" class="contact-full-width" required></textarea>
            </div>
            <button type="submit" class="contact-submit-btn">SUBMIT NOW</button>
        </form>
    </div>

    <!-- Middle Column: Contact Info -->
    <div class="contact-info-column">
        <div class="contact-info-box">
            <div class="contact-icon"><img src="images/about/1.png" alt="Location icon" loading="lazy" decoding="async" fetchpriority="low"></div>
            <div>
                <h4>Lakmina Lanka</h4>
                <p>No.129, Walpola, Angoda</p>
            </div>
        </div>
        <div class="contact-info-box">
            <div class="contact-icon"><img src="images/about/2.png" alt="Email icon" loading="lazy" decoding="async" fetchpriority="low"></div>
            <div>
                <h4>Email us</h4>
                <p>lakminalanka@gmail.com</p>
            </div>
        </div>
        <div class="contact-info-box">
            <div class="contact-icon"><img src="images/about/3.png" alt="Phone icon" loading="lazy" decoding="async" fetchpriority="low"></div>
            <div>
                <h4>Call us</h4>
                <p>071 822 2056<br>077 755 2414<br>077 755 2344<br>011 215 7402</p>
            </div>
        </div>
    </div>

    <!-- Right Column: Image -->
    <div class="contact-image-column"></div>
</section>
