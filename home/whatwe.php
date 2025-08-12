<!-- You can move these styles to your main CSS file -->
<style>
    /* --- Google Font Import --- */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

    /* --- Full Width Background Wrapper --- */
    .about-section-wrapper {
        width: 100%;
        background-image: url('images/background/back1.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        position: relative;
        padding: 1rem 0;
    }

    /* Add overlay for better text readability */
    .about-section-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(255, 255, 255, 0.73);
        z-index: 1;
    }

    /* --- Main Section Container --- */
    .about-section {
        width: 100%;
        max-width: 1100px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2rem;
        position: relative;
        z-index: 2;
    }

    /* --- Content Containers --- */
    .about-text {
        flex-basis: 50%;
        max-width: 500px;
    }

    .about-image-shape {
        flex-basis: 45%;
        height: 300px; /* Reduced height for the shape container */
        position: relative; /* Crucial for positioning the shapes inside */
    }

    /* --- Typography --- */
    .about-text h2 {
        font-size: 2.5rem;
        font-weight: 400;
        margin-top: 0;
        margin-bottom: 1.5rem;
        color: #333;
    }

    .about-text h2 strong {
        font-weight: 700; /* Bolder text for "We Are" */
    }

    .about-text p {
        font-size: 1rem;
        line-height: 1.7;
        margin-bottom: 1.5rem;
    }
    
    .about-text p:last-of-type {
        margin-bottom: 2.5rem;
    }

    /* --- Button Styles --- */
    .btn-dark {
        display: inline-block;
        padding: 0.9rem 2rem;
        background-color: #2c3e50;
        border-radius: 4px;
        color: #ffffff;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: background-color 0.3s ease;
    }

    .btn-dark:hover {
        background-color: #34495e;
    }
    
    /* --- CSS Abstract Shape --- */
    .shape {
        position: absolute;
        background-color: #d3d3d3; /* Grey color for the shapes */
        border-radius: 8px;
    }

    .shape-1 {
        width: 60%;
        height: 60%;
        top: 0;
        left: 0;
    }
    
    .shape-2 {
        width: 70%;
        height: 70%;
        bottom: 0;
        right: 0;
    }

    /* --- Responsive Design --- */
    @media (max-width: 768px) {
        .about-section {
            flex-direction: column; /* Stack text and image vertically */
            text-align: center;
        }

        .about-text {
            max-width: 100%;
        }

        .about-image-shape {
            width: 100%;
            max-width: 400px;
            height: 300px; /* Adjust height for mobile */
            margin-top: 2rem;
        }
    }
</style>

<div class="about-section-wrapper" id="who-we-are">
    <section class="about-section" id="about-section">

        <div class="about-text">
            <h2>Who <strong>We Are</strong></h2>
            <p>Lakmina Lanka Group Is A Leading Multidisciplinary Construction And Engineering Company In Sri Lanka. </p>
            <p>With Over A Decade Of Experience, We Deliver Innovative, High-Quality, And Sustainable Infrastructure Solutions Across Residential, Commercial, And Industrial Sectors.</p>
            <a href="#" class="btn-dark">Learn More</a>
        </div>

        <div class="about-image-shape">
            <!-- These divs are styled with CSS to create the abstract shape -->
            <div class="shape shape-1">
                <img src="images/hero/hero1.jpg" alt="Shape 1 Image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
            </div>
            <div class="shape shape-2">
                <img src="images/hero/hero2.jpg" alt="Shape 2 Image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
            </div>
        </div>

    </section>
</div>
