<!-- Styles for the Construction Gallery Component -->
<style>
    /* --- Google Fonts Import --- */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

    /* --- Base Styles for Component --- */
    .construction-gallery-section {
        font-family: 'Poppins', sans-serif;
        background-color: #ffffff;
        padding: 3rem 2rem;
        box-sizing: border-box;
    }

    /* --- Header/Title Container --- */
    .gallery-header {
        text-align: center;
        margin-bottom: 3rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .gallery-header .pre-title {
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 2px;
        color: #888;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Decorative dots for the pre-title */
    .gallery-header .pre-title::before,
    .gallery-header .pre-title::after {
        content: '';
        display: block;
        width: 10px;
        height: 10px;
        background-color: #ffc107; /* Yellow accent color */
        margin: 0 10px;
    }

    .gallery-header .main-title {
        font-size: 2.2rem;
        font-weight: 700;
        color: #222;
        line-height: 1.3;
    }

    /* --- Gallery Grid --- */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* --- Individual Gallery Item --- */
    .gallery-item {
        background-color: #f7f7f7;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery-item:hover {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .gallery-item img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
    }



    /* --- Hidden Gallery Items --- */
    .gallery-item-hidden {
        display: none !important;
    }

    .gallery-item-hidden.show {
        display: block !important;
    }

    /* Ensure grid items show properly */
    .gallery-grid .gallery-item-hidden.show {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
    }

    /* --- View More Button --- */
    .gallery-view-more {
        text-align: center;
        margin-top: 5rem;
    }

    .view-more-button {
        background-color:rgb(255, 204, 51);
        color: #222;
        border: none;
        padding: 1rem 2.5rem;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 2px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .view-more-button:hover {
        background-color: #e0a800;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
    }

    .view-more-button:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(255, 193, 7, 0.4);
    }

    /* --- Responsive Design --- */
    @media (max-width: 992px) {
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .gallery-header .main-title {
            font-size: 1.8rem;
        }
        .construction-gallery-section {
            padding: 3rem 1rem;
        }
        .view-more-button {
            padding: 0.8rem 2rem;
            font-size: 0.9rem;
        }
    }

    @media (max-width: 576px) {
        .gallery-grid {
            grid-template-columns: 1fr;
        }
    }

</style>

<!-- Construction Gallery Section Component -->
<section class="construction-gallery-section">
    <div class="gallery-header">
        <h3 class="pre-title">Our Gallery</h3>
        <h2 class="main-title">Explore Our Gallery And Get Ideas of Our Work</h2>
    </div>

    <div class="gallery-grid">
        <!-- Gallery Item 1 -->
        <div class="gallery-item">
            <img src="images/gallery/g9.jpeg" alt="General construction site" loading="lazy" decoding="async" fetchpriority="low" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <!-- Gallery Item 2 -->
        <div class="gallery-item">
            <img src="images/gallery/g16.jpeg" alt="Construction project" loading="lazy" decoding="async" fetchpriority="low" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <!-- Gallery Item 3 -->
        <div class="gallery-item">
            <img src="images/gallery/g18.jpeg" alt="Building construction" loading="lazy" decoding="async" fetchpriority="low" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <!-- Gallery Item 4 -->
        <div class="gallery-item">
            <img src="images/gallery/g17.jpeg" alt="Steel construction work" loading="lazy" decoding="async" fetchpriority="low" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <!-- Gallery Item 5 -->
        <div class="gallery-item">
            <img src="images/gallery/g19.jpeg" alt="Construction site" loading="lazy" decoding="async" fetchpriority="low" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <!-- Gallery Item 6 -->
        <div class="gallery-item">
            <img src="images/gallery/g22.jpeg" alt="Building project" loading="lazy" decoding="async" fetchpriority="low" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <!-- Hidden Gallery Items (initially hidden) -->
        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g7.jpeg" alt="Construction work" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g8.jpeg" alt="Building site" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g10.jpeg" alt="Steel construction" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g11.jpeg" alt="Construction project" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g12.jpeg" alt="Building work" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g13.jpeg" alt="Construction site" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g26.jpg" alt="Construction site" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g27.jpg" alt="Construction site" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g28.jpg" alt="Construction site" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g29.jpg" alt="Construction site" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g30.jpg" alt="Construction site" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g31.jpg" alt="Construction site" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g32.jpg" alt="Construction site" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g33.jpg" alt="Construction site" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g35.jpg" alt="Construction site" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g36.jpg" alt="Construction site" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g37.jpg" alt="Construction site" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>

        <div class="gallery-item gallery-item-hidden">
            <img src="images/gallery/g38.jpg" alt="Construction site" onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/FFFFFF?text=Construction';">
        </div>
    </div>

    <!-- View More Button -->
    <div class="gallery-view-more">
        <button id="viewMoreBtn" class="view-more-button">View More</button>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const viewMoreBtn = document.getElementById('viewMoreBtn');
    const hiddenItems = document.querySelectorAll('.gallery-item-hidden');
    let isExpanded = false;

    viewMoreBtn.addEventListener('click', function() {
        if (!isExpanded) {
            // Show hidden items
            hiddenItems.forEach(function(item, index) {
                console.log('Showing item', index, item);
                
                // Add show class (keep gallery-item-hidden for now)
                item.classList.add('show');
                
                // Force display with inline style as absolute backup
                item.style.setProperty('display', 'block', 'important');
                
                console.log('Item classes:', item.className);
                console.log('Item computed style:', window.getComputedStyle(item).display);
            });
            viewMoreBtn.textContent = 'View Less';
            isExpanded = true;
        } else {
            // Hide items
            hiddenItems.forEach(function(item) {
                item.classList.remove('show');
                item.style.setProperty('display', 'none', 'important');
            });
            viewMoreBtn.textContent = 'View More';
            isExpanded = false;
            
            // Smooth scroll back to gallery header
            document.querySelector('.gallery-header').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>
