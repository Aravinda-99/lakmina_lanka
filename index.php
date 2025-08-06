<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lakmina Lanka - Building Systems</title>
    <!-- Importing a font from Google Fonts to match the design -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/hero-slideshow.js" defer></script>
</head>
<body>
    <!-- Popup Header (hidden by default, shown on scroll) -->
    <div class="popup-header" style="display:none;">
        <div class="header-logo">
            <div class="logo-icon">L</div>
            <div class="logo-text">
                LAKMINA LANKA<br>
                BUILDING SYSTEMS (PVT) LTD.
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#who-we-are">About us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>

    <!-- Header Section with Logo and Navigation -->
    <header>
        <div class="header-logo">
            <div class="logo-icon">L</div>
            <div class="logo-text">
                LAKMINA LANKA<br>
                BUILDING SYSTEMS (PVT) LTD.
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#who-we-are">About us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <button class="mobile-menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </header>

    <!-- Main Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-logo">
                <div class="logo-icon">L</div>
                <div class="logo-text">
                    LAKMINA LANKA<br>
                    BUILDING SYSTEMS (PVT) LTD.
                </div>
            </div>
            <h1>WE ARE ONE OF THE LEADING STEEL</h1>
            <p>WAREHOUSE CONSTRUCTION COMPANIES IN SRI LANKA</p>
            <a href="#" class="discover-button">DISCOVER MORE</a>
        </div>
    </section>

    <!-- Include the intro section -->
    <?php include 'home/whatwe.php'; ?>
    <?php include 'home/vistion_mission.php'; ?>
    

    <main class="intro2-after">


        <!-- Section 4: Our Services - Full Width -->
        <section class="services-section" id="services">
            <video class="services-video-bg" autoplay muted loop playsinline>
                <source src="video/construction.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="container">
                <h2>Our Services</h2>
                <p class="subtitle">From Residential Complexes To Commercial Buildings, We Manage Every Aspect Of Construction With Precision And Care.</p>
                <div class="services-grid">
                    <div class="service-card">
                        <img src="images/construction.jpg" alt="Steel frame construction">
                        <div class="service-card-content">
                            <h3>Construction</h3>
                            <p>Construction Of Pre-fabricated Steel Buildings Such As Industrial Factories, Ship Maintenance, Storage Facilities, Hangers, Food Citys, Supermarkets, Fuel Stations and a lot more.</p>
                        </div>
                    </div>
                    <div class="service-card">
                        <img src="images/logistic.jpg" alt="Logistics and container shipping">
                        <div class="service-card-content">
                            <h3>Logistics</h3>
                            <p>Generation Of Container Cabins, Site Offices, Accommodation & Rentals.</p>
                        </div>
                    </div>
                    <div class="service-card">
                        <img src="images/trading.jpg" alt="Trading and supply chain">
                        <div class="service-card-content">
                            <h3>Trading</h3>
                            <p>For Commercial/Refrigerator Purpose We Undertake Import, Supplying And Installation Of Pre-fab / Cold Room Solutions. Additionally We Are One Of The Largest Steel Building Material & Equipment Suppliers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Include the why choose us section -->
        <?php include 'home/whychoose.php'; ?>

        <!-- Section 5: Why Choose Us? - Full Width -->
        <!-- <section class="choose-us-section">
            <div class="container">
                <div class="flex-container">
                    <div class="text-column">
                        <h2>WHY CHOOSE US?</h2>
                        <p>There Are Many Variations Of Passages Of Lorem Ipsum Available, But The Majority Have Suffered Alteration In Some Form, By Injected Humour, Or Free Randomised Words Which Don't Look Even.</p>
                        <div class="info-boxes">
                            <div class="info-box">
                                <div class="info-box-icon">
                                    <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z"/></svg>
                                </div>
                                <div>
                                    <h3>STRONG SERVICE</h3>
                                    <p>Our commitment to excellence ensures top-tier quality and reliability.</p>
                                </div>
                            </div>
                            <div class="info-box">
                                <div class="info-box-icon">
                                    <svg viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                                </div>
                                <div>
                                    <h3>FAST SERVICE</h3>
                                    <p>We deliver projects on time, every time, without compromising on quality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-column">
                        <img src="images/why.jpg" alt="Steel building structure">
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Include the custom why section -->
        

        <!-- Include the helping section -->
        <?php include 'home/helping.php'; ?>

        

        </div>

        <!-- Section 6: Stats Section -->
        <!-- <section class="full-width-section dark-section stats-section">
            <div class="stats-container">
                <h2>HELPING A LOCAL BUSINESS REINVENT</h2>
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon"><svg viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg></div>
                        <div class="stat-number">2,245,341</div>
                        <div class="stat-label">Members</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon"><svg viewBox="0 0 24 24"><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-3 10H9v-2h8v2zm-3-4H9V8h5v2z"/></svg></div>
                        <div class="stat-number">2,245,341</div>
                        <div class="stat-label">Projects</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon"><svg viewBox="0 0 24 24"><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-6.13 10.13L12 10.44l-1.87 1.69-.6-2.23-2.13.9.9-2.12-1.7-1.87 2.23-.6L12 4.44l1.69 1.87 2.23.6-1.7 1.87.9 2.12-2.13-.9z"/></svg></div>
                        <div class="stat-number">2,700</div>
                        <div class="stat-label">Reviews</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon"><svg viewBox="0 0 24 24"><path d="M16.5 12c1.38 0 2.5-1.12 2.5-2.5S17.88 7 16.5 7C15.12 7 14 8.12 14 9.5s1.12 2.5 2.5 2.5zM9 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm7.5 3c-1.83 0-5.5.92-5.5 2.75V19h11v-2.25c0-1.83-3.67-2.75-5.5-2.75zM9 13c-2.33 0-7 1.17-7 3.5V19h7v-2.5c0-.85.33-2.34 2.37-3.41C10.5 13.1 9.66 13 9 13z"/></svg></div>
                        <div class="stat-number">2,245,341</div>
                        <div class="stat-label">Professionals</div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Section 7: CTA Section -->
        <div class="cta-section-wrapper">
            <section class="full-width-section cta-section">
                <div class="cta-container">
                    <div class="flex-container">
                        <div class="text-column">
                            <h2>EXCITED TO DRIVE INTO YOUR COMPANY PROJECT</h2>
                            <p>There Are Many Variations Of Passages Of Lorem Ipsum Available, But The Majority Have Suffered Alteration In Some Form, By Injected Humour, Or Free Randomised Words Which Don't Look Even.</p>
                            <form class="cta-form">
                                <input type="email" placeholder="michael@ymail.com">
                                <button type="submit">SUBSCRIBE</button>
                            </form>
                        </div>
                        <div class="image-column">
                            <img src="images/hero/hero5.jpg" alt="Modern container project">
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Include the gallery section -->
        <?php include 'home/gallery.php'; ?>

        <!-- Include the contact section -->
        <?php include 'home/contact.php'; ?>

        <!-- Section 8: Contact Section -->
        <!-- <section class="contact-section container">
            <h2 class="contact-title">CONTACT US</h2>
            <div class="contact-info-bar">
                <div class="contact-info-item">
                    <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                    <div class="contact-info-text">
                        <h3>PHONE:</h3>
                        <p>+94 11 2 892411</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                    <div class="contact-info-text">
                        <h3>ADDRESS:</h3>
                        <p>404/4A/1, Mathreedasa Mawatha, Pitipana North, Homagama</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    <div class="contact-info-text">
                        <h3>EMAIL:</h3>
                        <p>info@prowork.lk</p>
                    </div>
                </div>
            </div>
            <div class="contact-main">
                <div class="flex-container">
                    <div class="image-column">
                        <img src="https://placehold.co/600x600/87ceeb/ffffff?text=Contact+Image" alt="Steel structure under a blue sky">
                    </div>
                    <div class="text-column contact-form-container">
                        <h2>LET'S CONNECT CONSTELLATIONS</h2>
                        <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do</p>
                        <form action="#" class="contact-form">
                            <input type="text" placeholder="Last Name">
                            <input type="text" placeholder="First Name">
                            <input type="email" placeholder="Email" class="full-width">
                            <input type="tel" placeholder="Phone Number" class="full-width">
                            <textarea placeholder="Message" class="full-width"></textarea>
                            <button type="submit">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->

    </main>
    
    <footer class="site-footer">
        <div class="container">
            <div class="footer-main">
                <div class="footer-column">
                    <div class="header-logo footer-logo-container">
                        <div class="logo-icon">L</div>
                        <div class="logo-text">
                            LAKMINA LANKA<br>
                            BUILDING SYSTEMS (PVT) LTD.
                        </div>
                    </div>
                    <p>Lakmina Lanka Group Is A Leading Multidisciplinary Construction And Engineering Company In Sri Lanka. With Over A Decade Of Experience, We Deliver Innovative, High-Quality, And Sustainable Infrastructure Solutions Across Residential, Commercial, And Industrial Sectors.</p>
                </div>
                <div class="footer-column">
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Subscribe To Newsletter</h3>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Enter Email Address">
                        <button type="submit">SUBSCRIBE</button>
                    </form>
                    <h3>Follow us</h3>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook">F</a>
                        <a href="#" aria-label="Twitter">T</a>
                        <a href="#" aria-label="Instagram">I</a>
                        <a href="#" aria-label="LinkedIn">L</a>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #081422;">
            <div class="container footer-bottom">
                <span>© 2025 All Rights Reserved</span>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                    <a href="#">Legal</a>
                    <a href="#">Site Map</a>
                </div>
            </div>
        </div>
    </footer>

<script>
// Popup header scroll logic
window.addEventListener('scroll', function() {
    var popupHeader = document.querySelector('.popup-header');
    if (window.scrollY > 100) {
        popupHeader.style.display = 'flex';
    } else {
        popupHeader.style.display = 'none';
    }
});

// Smooth scroll and active link logic
function smoothScrollTo(target) {
  var el = document.querySelector(target);
  if (el) {
    window.scrollTo({
      top: el.getBoundingClientRect().top + window.pageYOffset - 30, // offset for fixed header
      behavior: 'smooth'
    });
  }
}

function setActiveLink(href) {
  document.querySelectorAll('.popup-header a, header a').forEach(function(link) {
    link.classList.remove('active');
    if (link.getAttribute('href') === href) {
      link.classList.add('active');
    }
  });
}

document.querySelectorAll('.popup-header a, header a').forEach(function(link) {
  link.addEventListener('click', function(e) {
    var href = link.getAttribute('href');
    if (href && href.startsWith('#') && href.length > 1) {
      e.preventDefault();
      smoothScrollTo(href);
      setActiveLink(href);
    }
  });
});

// Update active link on scroll
const sectionIds = ['#who-we-are', '#services', '#contact'];
const navLinks = Array.from(document.querySelectorAll('.popup-header a, header a'));
window.addEventListener('scroll', function() {
  let fromTop = window.scrollY + 80; // offset for header
  let currentSection = '';
  sectionIds.forEach(function(id) {
    let section = document.querySelector(id);
    if (section && section.offsetTop <= fromTop) {
      currentSection = id;
    }
  });
  if (currentSection) {
    setActiveLink(currentSection);
  } else {
    setActiveLink('#'); // Home
  }
});
</script>
<style>
html {
  scroll-behavior: smooth;
}
</style>
</body>
</html>
