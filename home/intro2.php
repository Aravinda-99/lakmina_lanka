<!-- You can move these styles to your main CSS file -->
<style>
    /* --- Google Font Import --- */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

    /* --- Demo Body Styles --- 
       These are for demonstration purposes to center the component.
       You can remove these or integrate them into your own site's body styles.
    */
    body {
        font-family: 'Inter', sans-serif;
        margin: 0;
        background-color: #ffffff;
        color: #4a4a4a;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 3rem 1rem;
    }

    * {
        box-sizing: border-box;
    }

    /* --- Main Section Container --- */
    .features-section {
        width: 100%;
        max-width: 1100px;
        margin: 30px auto;
    }

    /* --- Feature Row Layout --- */
    .feature-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        margin-bottom: 6rem; /* Space between feature rows */
    }
    
    /* Remove margin from the last row */
    .feature-row:last-child {
        margin-bottom: 0;
    }

    /* --- Content Containers --- */
    .feature-image,
    .feature-text {
        flex-basis: 48%; /* Give a little space between items */
    }

    .feature-image img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 8px;
    }

    /* --- Typography --- */
    .feature-text h2 {
        font-size: 2.25rem;
        font-weight: 700;
        margin-top: 0;
        margin-bottom: 1.5rem;
        color: #333;
        position: relative;
        padding-bottom: 0.75rem;
    }

    /* Decorative line under the heading */
    .feature-text h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background-color: #ef4444; /* Red color for the line */
    }

    .feature-text p {
        font-size: 1rem;
        line-height: 1.7;
        margin-bottom: 2rem;
    }

    /* --- Button Styles --- */
    .btn {
        display: inline-block;
        padding: 0.8rem 1.8rem;
        border: 2px solid #ef4444;
        border-radius: 50px; /* Pill-shaped button */
        color: #ef4444;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .btn:hover {
        background-color: #ef4444;
        color: #ffffff;
    }

    /* --- Responsive Design --- */
    @media (max-width: 768px) {
        .feature-row {
            flex-direction: column; /* Stack image and text vertically */
            margin-bottom: 4rem;
        }

        /* Reverse the order for the second row on mobile */
        .feature-row.reverse-on-mobile {
            flex-direction: column-reverse;
        }

        .feature-image,
        .feature-text {
            flex-basis: 100%; /* Full width on smaller screens */
        }

        .feature-image {
            margin-bottom: 2rem;
        }
         
        .feature-row.reverse-on-mobile .feature-image {
            margin-bottom: 0;
            margin-top: 2rem;
        }

        .feature-text {
            text-align: center;
        }
        
        .feature-text h2::after {
            left: 50%;
            transform: translateX(-50%);
        }
    }
</style>

<section class="features-section">

    <!-- Row 1: Very Active Community -->
    <div class="feature-row">
        <div class="feature-image">
            <img src="images/hero/hero10.jpeg" alt="Placeholder for community image">
        </div>
        <div class="feature-text">
            <h2>Vision</h2>
            <p>To pioneer a sustainable future for Sri Lanka by engineering innovative infrastructure that harmonizes with the environment, empowers communities, and enriches lives for generations to come.</p>
            <!-- <a href="#" class="btn">GO TO COMMUNITY</a> -->
        </div>
    </div>

    <!-- Row 2: Quick Installation -->
    <div class="feature-row reverse-on-mobile">
        <div class="feature-text">
            <h2>Mission</h2>
            <p>Our mission is to deliver fast, reliable, and high-quality solutions for our clients. We focus on efficiency, innovation, and customer satisfaction in every project we undertake.</p>
            <!-- <a href="#" class="btn">DOWNLOAD NOW</a> -->
        </div>
        <div class="feature-image">
            <img src="images/hero/hero11.jpeg" alt="Placeholder for installation image">
        </div>
    </div>

    <!-- Row 3: Quick Mission -->
    <!-- <div class="feature-row">
        <div class="feature-image">
            <img src="images/hero/hero5.jpg" alt="Mission Image">
        </div>
        <div class="feature-text">
            <h2>Mission</h2>
            <p>
                Our mission is to deliver fast, reliable, and high-quality solutions for our clients. We focus on efficiency, innovation, and customer satisfaction in every project we undertake.
            </p>
            
        </div>
    </div> -->

</section>
