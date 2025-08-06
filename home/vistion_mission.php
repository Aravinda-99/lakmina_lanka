<!-- Styles for the Vision & Mission Component -->
<style>
    /* --- Google Fonts Import --- */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

    /* --- Base Styles for Component --- */
    .vision-mission-section {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa; /* A light grey background for the whole section */
        padding: 4rem 2rem;
        box-sizing: border-box;
    }

    /* --- Container for the two cards --- */
    .vision-mission-container {
        display: flex;
        justify-content: center;
        gap: 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* --- Individual Card (Vision/Mission) --- */
    .vm-card {
        background-color: #ffffff;
        padding: 2.5rem;
        border-radius: 8px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.07);
        width: 100%;
        max-width: 550px;
    }

    .vm-card-header {
        margin-bottom: 1.5rem;
    }

    .vm-card-header .pre-title {
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 2px;
        color: #888;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        display: flex;
        align-items: center;
    }

    /* Decorative dots for the pre-title */
    .vm-card-header .pre-title::before {
        content: '';
        display: block;
        width: 10px;
        height: 10px;
        background-color: #ffc107; /* Yellow accent color */
        margin-right: 10px;
    }

    .vm-card-header .main-title {
        font-size: 2rem;
        font-weight: 700;
        color: #222;
        line-height: 1.3;
    }
    
    .vm-card-body {
        position: relative;
    }

    .vm-card-icon {
        color: #ffc107;
        margin-bottom: 1rem;
    }
    
    .vm-card-icon svg {
        width: 50px;
        height: 50px;
    }

    .vm-card-text {
        font-size: 1rem;
        line-height: 1.7;
        color: #555;
        margin-bottom: 2rem;
    }
    
    .vm-navigation {
        display: flex;
        justify-content: flex-end;
        gap: 0.5rem;
    }

    .vm-nav-btn {
        background-color: #ffc107;
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 5px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease;
    }

    .vm-nav-btn:hover {
        background-color: #e0a800;
    }

    .vm-nav-btn svg {
        width: 20px;
        height: 20px;
        color: #333;
    }


    /* --- Responsive Design --- */
    @media (max-width: 992px) {
        .vision-mission-container {
            flex-direction: column;
            align-items: center;
        }
    }
    
    @media (max-width: 768px) {
        .vision-mission-section {
            padding: 3rem 1rem;
        }
        .vm-card {
            padding: 2rem;
        }
        .vm-card-header .main-title {
            font-size: 1.75rem;
        }
    }

</style>

<!-- Vision & Mission Section Component -->
<section class="vision-mission-section">
    <div class="vision-mission-container">

        <!-- Vision Card -->
        <div class="vm-card">
            <div class="vm-card-header">
                <h3 class="pre-title">Our Vision</h3>
                <h2 class="main-title">To be the industry leader.</h2>
            </div>
            <div class="vm-card-body">
                <div class="vm-card-icon">
                    <!-- Eye Icon for Vision -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639l4.433-7.447A1 1 0 0 1 7.48 4h9.04a1 1 0 0 1 .994.883l4.433 7.447a1.012 1.012 0 0 1 0 .639l-4.433 7.447A1 1 0 0 1 16.52 20h-9.04a1 1 0 0 1-.994-.883l-4.433-7.447Z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
                <p class="vm-card-text">
                    To pioneer the future of construction through innovation, sustainability, and unparalleled quality, setting new benchmarks for excellence and becoming the most trusted partner in the industry.
                </p>
                <!-- <div class="vm-navigation">
                    <button class="vm-nav-btn" aria-label="Previous">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                    </button>
                    <button class="vm-nav-btn" aria-label="Next">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                </div> -->
            </div>
        </div>

        <!-- Mission Card -->
        <div class="vm-card">
            <div class="vm-card-header">
                <h3 class="pre-title">Our Mission</h3>
                <h2 class="main-title">To build with integrity.</h2>
            </div>
            <div class="vm-card-body">
                <div class="vm-card-icon">
                    <!-- Target/Bullseye Icon for Mission -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 15.91a4.5 4.5 0 1 1-6.364-6.364 4.5 4.5 0 0 1 6.364 6.364Z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z" />
                    </svg>
                </div>
                <p class="vm-card-text">
                    To deliver superior construction projects safely, on time, and within budget. We are committed to fostering a culture of collaboration, integrity, and client satisfaction on every project we undertake.
                </p>
                <!-- <div class="vm-navigation">
                    <button class="vm-nav-btn" aria-label="Previous">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                    </button>
                    <button class="vm-nav-btn" aria-label="Next">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                </div> -->
            </div>
        </div>

    </div>
</section>
