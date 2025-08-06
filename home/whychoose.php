<!-- Styles for the Why Choose Us Component -->
<style>
    /* --- Google Fonts Import --- */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

    /* --- Base Styles for Component --- */
    .why-choose-us-section {
        font-family: 'Poppins', sans-serif;
        background-color: #ffffff;
        padding: 5rem 2rem;
        box-sizing: border-box;
        overflow: hidden; /* Prevents horizontal scroll on small screens */
    }

    /* --- Main Container --- */
    .why-choose-us-container {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 4rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* --- Left Column: Text Content --- */
    .why-choose-us-content {
        flex: 1;
        max-width: 550px;
    }

    .why-choose-us-content .pre-title {
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 1px;
        color:rgb(229, 167, 53); /* Red accent color */
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        text-transform: uppercase;
    }

    .why-choose-us-content .pre-title::before {
        content: '';
        display: block;
        width: 30px;
        height: 2px;
        background-color:rgb(229, 173, 53);
        margin-right: 10px;
    }

    .why-choose-us-content .main-title {
        font-size: 2.8rem;
        font-weight: 700;
        color:rgb(67, 69, 75); /* Dark blue color */
        line-height: 1.2;
        margin-bottom: 1.5rem;
    }

    .why-choose-us-content .description {
        font-size: 1rem;
        line-height: 1.6;
        color: #555;
        margin-bottom: 2rem;
    }

    .features-list {
        list-style: none;
        padding: 0;
        margin-bottom: 2.5rem;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }

    .features-list li {
        color: #333;
        font-weight: 600;
        display: flex;
        align-items: center;
    }

    .features-list li svg {
        width: 20px;
        height: 20px;
        color:rgb(229, 173, 53);
        margin-right: 8px;
        flex-shrink: 0;
    }

    .discover-more-btn {
        display: inline-block;
        background-color:rgb(229, 153, 53);
        color: #ffffff;
        padding: 1rem 2rem;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        transition: background-color 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .discover-more-btn:hover {
        background-color:rgb(238, 131, 30);
    }

    /* --- Right Column: Images --- */
    .why-choose-us-images {
        flex: 1;
        position: relative;
        min-height: 450px;
    }

    .why-choose-us-images .main-image {
        position: absolute;
        top: 0;
        right: 0;
        width: 80%;
        height: 400px;
        object-fit: cover;
        border-radius: 8px;
    }

    .why-choose-us-images .overlay-image {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60%;
        height: 300px;
        object-fit: cover;
        border-radius: 8px;
        border: 8px solid #ffffff;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .experience-box {
        position: absolute;
        bottom: -20px;
        right: 0;
        background-color:rgb(229, 167, 53);
        color: #fff;
        width: 150px;
        height: 150px;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        box-shadow: 0 10px 20px rgba(229, 57, 53, 0.3);
    }

    .experience-box .years {
        font-size: 3.5rem;
        font-weight: 700;
        line-height: 1;
    }

    .experience-box .label {
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* --- Responsive Design --- */
    @media (max-width: 992px) {
        .why-choose-us-container {
            flex-direction: column;
            gap: 5rem;
        }
        .why-choose-us-content {
            text-align: center;
        }
        .why-choose-us-content .pre-title {
            justify-content: center;
        }
        .features-list {
            text-align: left;
        }
    }

    @media (max-width: 576px) {
        .why-choose-us-content .main-title {
            font-size: 2.2rem;
        }
        .features-list {
            grid-template-columns: 1fr;
        }
        .why-choose-us-images {
            min-height: 350px;
        }
        .why-choose-us-images .main-image {
            height: 300px;
        }
        .why-choose-us-images .overlay-image {
            height: 220px;
        }
        .experience-box {
            width: 120px;
            height: 120px;
        }
        .experience-box .years {
            font-size: 2.8rem;
        }
    }
</style>

<!-- Why Choose Us Section Component -->
<section class="why-choose-us-section">
    <div class="why-choose-us-container">
        <!-- Left Column -->
        <div class="why-choose-us-content">
            <h3 class="pre-title">WHY CHOOSE US</h3>
            <h2 class="main-title">Why Choose Lakmina Lanka</h2>
            <p class="description">
            We are a team of experienced professionals who are dedicated to providing the best possible service to our clients.
            </p>
            <ul class="features-list">
                <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Best sustainability</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> High Quality material</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Professional Worker</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Modern methods</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Certified engineer</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Health and safety</li>
            </ul>
            <a href="#" class="discover-more-btn">
                Discover More
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width: 20px; height: 20px;"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg>
            </a>
        </div>
        <!-- Right Column -->
        <div class="why-choose-us-images">
            <img class="main-image" src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?q=80&w=2070&auto=format&fit=crop" alt="Close up of construction vehicle tire at sunset." onerror="this.onerror=null;this.src='https://placehold.co/500x400/1a237e/FFFFFF?text=Construction';">
            <img class="overlay-image" src="images/about/why2.jpg" alt="Orange construction truck on a gravel road." onerror="this.onerror=null;this.src='https://placehold.co/400x300/cccccc/FFFFFF?text=Truck';">
            <div class="experience-box">
                <span class="years">5</span>
                <span class="label">Years of Experience</span>
            </div>
        </div>
    </div>
</section>
