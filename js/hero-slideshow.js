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
}); 