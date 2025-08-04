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
        background-color: #f4f4f9;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 2rem 0;
    }

    * {
        box-sizing: border-box;
    }

    /* --- Main Section Container --- */
    .about-us-section {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
        overflow: hidden; /* Ensures child border-radius is respected */
    }

    /* --- Row Layout --- */
    .info-row {
        display: flex;
        align-items: stretch; /* Makes columns equal height */
        width: 100%;
        margin-bottom: 2.5rem;
    }
    .info-row:last-child {
        margin-bottom: 0;
    }

    /* --- Content Containers --- */
    .image-container,
    .text-container {
        flex: 1; /* Each container takes up 50% of the row width */
        min-width: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    
    .text-container {
         padding: 3rem 4rem;
    }

    .image-container img {
        width: 90%;
        height: 100%;
        object-fit: cover; /* Prevents image distortion */
        display: block;
        margin-left: 30px;
        margin-right: 10px;
        border-radius: 10px;
    }

    /* --- Typography --- */
    h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-top: 0;
        margin-bottom: 1rem;
        color: #1a2a4c;
    }

    h3 {
        font-size: 2.2rem;
        font-weight: 700;
        margin-top: 0;
        margin-bottom: 1rem;
    }

    p {
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 0;
        color: #555;
    }

    /* --- Specific Row Styles --- */
    
    /* Vision & Mission Text Blocks */
    .dark-bg {
        background-color: #1a2a4c; /* Dark blue background */
        color: #ffffff; /* White text */
        margin-left: 30px;
        border-radius: 10px 0 0 10px;
    }

    .dark-bg h3 {
        color: #ffffff;
    }

    .dark-bg p {
        color: #e0e0e0; /* Lighter grey for paragraph text on dark bg */
        opacity: 0.9;
    }

    /* --- Responsive Design for Mobile --- */
    @media (max-width: 768px) {
        .info-row {
            flex-direction: column; /* Stack image and text vertically */
        }

        /* Reverse the order for the Vision row so text appears first */
        .vision-row {
            flex-direction: column-reverse;
        }
        
        .text-container {
            padding: 2rem; /* Reduce padding on smaller screens */
        }

        h2 {
            font-size: 2rem;
        }

        h3 {
            font-size: 1.8rem;
        }
    }
</style>

<section class="about-us-section">
    <h1 class="about-main-title">About Us</h1>

    <!-- Row 1: Who We Are? -->
    <div class="info-row who-we-are-row">
        <div class="image-container">
            <!-- Using a placeholder for the image -->
            <img src="images/hero/hero10.jpeg" alt="Illustration of a modern industrial building">
        </div>
        <div class="text-container">
            <h2>WHO WE ARE?</h2>
            <p>Lakmina Lanka Group is a leading multidisciplinary Construction And Engineering Company in Sri Lanka. With over a decade of experience, we deliver innovative, high-quality, and sustainable infrastructure solutions across residential, commercial, and industrial sectors.</p>
        </div>
    </div>

    <!-- Row 2: Vision -->
    <div class="info-row vision-row">
        <div class="text-container dark-bg">
            <h3>Vision:</h3>
            <p>Lorem ipsum dolor amet, consectetuer adipiscing elit. Urna tincidunt lectus mi porttitor rutrum habitasse. Interdum pharetra mi, et platea lobortis ex sapien. Eros eros nisi neque porttitor primis elit maecenas. Viverra quam luctus phasellus class ipsum duis elit vehicula nascetur.</p>
        </div>
        <div class="image-container">
             <!-- Using a placeholder for the image -->
            <img src="images/hero/hero11.jpeg" alt="Modern green container home">
        </div>
    </div>

    <!-- Row 3: Mission -->
    <div class="info-row mission-row">
        <div class="image-container">
             <!-- Using a placeholder for the image -->
            <img src="https://placehold.co/600x400/81D4FA/ffffff?text=Mission+Underway" alt="Steel frame of a large building under construction against a blue sky">
        </div>
        <div class="text-container dark-bg">
            <h3>Mission:</h3>
            <p>Lorem ipsum dolor amet, consectetuer adipiscing elit. Urna tincidunt lectus mi porttitor rutrum habitasse. Interdum pharetra mi, et platea lobortis ex sapien. Eros eros nisi neque porttitor primis elit maecenas. Viverra quam luctus phasellus class ipsum duis elit vehicula nascetur.</p>
        </div>
    </div>

</section>
