<!-- Vision and Mission Section -->
<style>
    .vision-mission-section {
        width: 100%;
        margin: 0;
        padding: 0;
        margin-bottom: 0;
    }

    /* Override container padding for this section */
    .vision-mission-section .container {
        padding: 0;
        margin: 0;
    }

    .vision-mission-container {
        display: flex;
        flex-direction: column;
        gap: 0;
    }

    .vision-section,
    .mission-section {
        display: flex;
        min-height: 120px;
        position: relative;
    }

    .vision-section {
        background: #1a365d; /* Dark blue background for Vision */
    }

    .mission-section {
        background: #0f172a; /* Darker blue background for Mission */
    }

    .section-divider {
        height: 2px;
        background: #ffffff;
        width: 100%;
    }

    .text-panel {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 30px 40px;
        color: #ffffff;
    }

    .image-panel {
        flex: 1;
        position: relative;
        overflow: hidden;
    }

    .image-panel img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .text-panel h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 30px;
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .text-panel p {
        font-size: 1.1rem;
        line-height: 1.8;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        max-width: 500px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .vision-section,
        .mission-section {
            flex-direction: column;
            min-height: auto;
        }

        .text-panel {
            padding: 40px 30px;
            order: 1;
        }

        .image-panel {
            order: 2;
            min-height: 300px;
        }

        .text-panel h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .text-panel p {
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .text-panel {
            padding: 30px 20px;
        }

        .text-panel h2 {
            font-size: 1.8rem;
        }

        .image-panel {
            min-height: 250px;
        }
    }
</style>

<section class="vision-mission-section">
    <div class="vision-mission-container">
        <!-- Vision Section -->
        <div class="vision-section">
            <div class="text-panel">
                <h2>Vision:</h2>
                <p>Lorem ipsum Odor Amet, consectetuer adipiscing elit. Urna Tincidunt Lectus Mi Porttitor Rutrum Habitasse. Interdum Pharetra Mi, Et Platea Lobortis Ex Sapien. Eros Eros Nisl Neque Porttitor Primis Elit Maecenas Viverra Quam Luctus Phasellus Class Ipsum Duis Elit Vehicula Nascetur.</p>
            </div>
            <div class="image-panel">
                <img src="images/about/about3.jpg" alt="Eco-friendly Container Home">
            </div>
        </div>

        <!-- Section Divider -->
        <!-- <div class="section-divider"></div> -->

        <!-- Mission Section -->
        <div class="mission-section">
            <div class="image-panel">
                <img src="images/about/about4.jpg" alt="Building Construction Site">
            </div>
            <div class="text-panel">
                <h2>Mission:</h2>
                <p>Lorem ipsum Odor Amet, consectetuer adipiscing elit. Urna Tincidunt Lectus Mi Porttitor Rutrum Habitasse. Interdum Pharetra Mi, Et Platea Lobortis Ex Sapien Eros Eros Nisl! Neque Porttitor Primis Elit Maecenas. Viverra Quam Luctus Phasellus Class Ipsum Duis Elit Vehicula Nascetur.</p>
            </div>
        </div>
    </div>
</section>
