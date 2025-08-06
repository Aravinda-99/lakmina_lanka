// Hero Image Slideshow
document.addEventListener('DOMContentLoaded', function() {
    const heroSection = document.querySelector('.hero-section');
    const heroImages = [
        'images/hero/hero1.jpg',
        'images/hero/hero2.jpg',
        'images/hero/hero3.jpg',
        'images/hero/hero10.jpeg',
        'images/hero/hero11.jpeg'
    ];
    
    let currentImageIndex = 0;
    const slideInterval = 5000; // Change image every 5 seconds
    
    function changeHeroImage() {
        currentImageIndex = (currentImageIndex + 1) % heroImages.length;
        const newImageUrl = heroImages[currentImageIndex];
        
        // Smooth transition effect
        heroSection.style.opacity = '0.8';
        
        setTimeout(() => {
            heroSection.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('${newImageUrl}')`;
            heroSection.style.opacity = '1';
        }, 300);
    }
    
    // Add transition effect to hero section
    heroSection.style.transition = 'opacity 0.3s ease-in-out';
    
    // Start slideshow
    setInterval(changeHeroImage, slideInterval);
    
    // Optional: Add manual navigation buttons
    const heroContent = document.querySelector('.hero-content');
    
    // Create navigation dots
    const dotsContainer = document.createElement('div');
    dotsContainer.className = 'hero-dots';
    dotsContainer.style.cssText = `
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
        z-index: 10;
    `;
    
    heroImages.forEach((_, index) => {
        const dot = document.createElement('button');
        dot.className = 'hero-dot';
        dot.style.cssText = `
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: 2px solid #ffffff;
            background: ${index === 0 ? '#ffffff' : 'transparent'};
            cursor: pointer;
            transition: all 0.3s ease;
        `;
        
        dot.addEventListener('click', () => {
            currentImageIndex = index - 1; // Will be incremented in changeHeroImage
            changeHeroImage();
            updateDots();
        });
        
        dotsContainer.appendChild(dot);
    });
    
    heroSection.appendChild(dotsContainer);
    
    function updateDots() {
        const dots = document.querySelectorAll('.hero-dot');
        dots.forEach((dot, index) => {
            dot.style.background = index === currentImageIndex ? '#ffffff' : 'transparent';
        });
    }
    
    // Update dots when image changes automatically
    const originalChangeHeroImage = changeHeroImage;
    changeHeroImage = function() {
        originalChangeHeroImage();
        updateDots();
    };
    // Animate hero text and button on page load
    setTimeout(function() {
        if (heroContent) {
            heroContent.classList.add('animate-in');
        }
    }, 300);
}); 

// Scroll-triggered animation for whatwe section
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top < window.innerHeight - 100 &&
        rect.bottom > 100
    );
}

function triggerWhatWeAnimation() {
    var aboutSection = document.querySelector('.about-section');
    if (!aboutSection) return;
    var aboutText = aboutSection.querySelector('.about-text');
    var aboutImage = aboutSection.querySelector('.about-image-shape');
    if (!aboutText || !aboutImage) return;
    if (isInViewport(aboutSection)) {
        aboutText.classList.add('fade-in-left');
        aboutImage.classList.add('fade-in-right');
        window.removeEventListener('scroll', triggerWhatWeAnimation);
    }
}
window.addEventListener('scroll', triggerWhatWeAnimation);
window.addEventListener('DOMContentLoaded', triggerWhatWeAnimation); 

// Scroll-triggered animation for vision_mission section
function triggerVisionMissionAnimation() {
    var vmSection = document.querySelector('.vision-mission-section');
    if (!vmSection) return;
    if (isInViewport(vmSection)) {
        vmSection.classList.add('fade-in-up');
        var cards = vmSection.querySelectorAll('.vm-card');
        if (cards.length > 0) {
            cards[0].classList.add('fade-in-up', 'delay-1');
        }
        if (cards.length > 1) {
            cards[1].classList.add('fade-in-up', 'delay-2');
        }
        window.removeEventListener('scroll', triggerVisionMissionAnimation);
    }
}
window.addEventListener('scroll', triggerVisionMissionAnimation);
window.addEventListener('DOMContentLoaded', triggerVisionMissionAnimation); 

// Scroll-triggered animation for services section
function triggerServicesAnimation() {
    var servicesSection = document.querySelector('.services-section');
    if (!servicesSection) return;
    if (isInViewport(servicesSection)) {
        servicesSection.classList.add('fade-in-up');
        window.removeEventListener('scroll', triggerServicesAnimation);
    }
}
window.addEventListener('scroll', triggerServicesAnimation);
window.addEventListener('DOMContentLoaded', triggerServicesAnimation); 

// Scroll-triggered animation for why choose us section
function triggerWhyChooseUsAnimation() {
    var whyChooseUsSection = document.querySelector('.why-choose-us-section');
    if (!whyChooseUsSection) return;
    if (isInViewport(whyChooseUsSection)) {
        var content = whyChooseUsSection.querySelector('.why-choose-us-content');
        var images = whyChooseUsSection.querySelector('.why-choose-us-images');
        if (content) content.classList.add('fade-in-left');
        if (images) images.classList.add('fade-in-right');
        window.removeEventListener('scroll', triggerWhyChooseUsAnimation);
    }
}
window.addEventListener('scroll', triggerWhyChooseUsAnimation);
window.addEventListener('DOMContentLoaded', triggerWhyChooseUsAnimation); 

// Scroll-triggered animation for helping section
function triggerHelpingAnimation() {
    var konstrukSection = document.querySelector('.konstruk-section');
    if (!konstrukSection) return;
    if (isInViewport(konstrukSection)) {
        var contentLeft = konstrukSection.querySelector('.content-left');
        var statsRight = konstrukSection.querySelector('.stats-right');
        if (contentLeft) contentLeft.classList.add('fade-in-left');
        if (statsRight) statsRight.classList.add('fade-in-right');
        window.removeEventListener('scroll', triggerHelpingAnimation);
    }
}
window.addEventListener('scroll', triggerHelpingAnimation);
window.addEventListener('DOMContentLoaded', triggerHelpingAnimation); 

// Scroll-triggered animation for CTA section
function triggerCTAAnimation() {
    var ctaSection = document.querySelector('.cta-section');
    if (!ctaSection) return;
    if (isInViewport(ctaSection)) {
        ctaSection.classList.add('fade-in-up');
        window.removeEventListener('scroll', triggerCTAAnimation);
    }
}
window.addEventListener('scroll', triggerCTAAnimation);
window.addEventListener('DOMContentLoaded', triggerCTAAnimation); 

// Scroll-triggered animation for gallery section
function triggerGalleryAnimation() {
    var gallerySection = document.querySelector('.construction-gallery-section');
    if (!gallerySection) return;
    if (isInViewport(gallerySection)) {
        gallerySection.classList.add('fade-in-up');
        window.removeEventListener('scroll', triggerGalleryAnimation);
    }
}
window.addEventListener('scroll', triggerGalleryAnimation);
window.addEventListener('DOMContentLoaded', triggerGalleryAnimation); 

// Scroll-triggered animation for contact section
function triggerContactAnimation() {
    var contactSection = document.querySelector('.contact-custom-section');
    if (!contactSection) return;
    if (isInViewport(contactSection)) {
        var formColumn = contactSection.querySelector('.contact-form-column');
        var infoColumn = contactSection.querySelector('.contact-info-column');
        var imageColumn = contactSection.querySelector('.contact-image-column');
        if (formColumn) formColumn.classList.add('fade-in-left');
        if (infoColumn) infoColumn.classList.add('fade-in-up');
        if (imageColumn) imageColumn.classList.add('fade-in-right');
        window.removeEventListener('scroll', triggerContactAnimation);
    }
}
window.addEventListener('scroll', triggerContactAnimation);
window.addEventListener('DOMContentLoaded', triggerContactAnimation); 

// Mobile menu toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const nav = document.querySelector('header nav');
    
    if (mobileMenuToggle && nav) {
        mobileMenuToggle.addEventListener('click', function() {
            mobileMenuToggle.classList.toggle('active');
            nav.classList.toggle('active');
        });
        
        // Close mobile menu when clicking on a link
        const navLinks = nav.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenuToggle.classList.remove('active');
                nav.classList.remove('active');
            });
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenuToggle.contains(event.target) && !nav.contains(event.target)) {
                mobileMenuToggle.classList.remove('active');
                nav.classList.remove('active');
            }
        });
    }
}); 