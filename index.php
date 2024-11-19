<?php  
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>LandingPage</title>
</head>
<body>
    <video class="background-video" autoplay muted loop>
        <source src="image/720p.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Main container to apply the fixed 150% zoom effect -->
    <div class="main-container">
        <header class="main-header">
            <div class="header-logo-text">
                <img src="image/logo.png" alt="Logo" class="logo-image">
                <span class="header-text">Higanteng Laagan Travel & Tours</span>
            </div>
            <nav class="header-nav">
                <a href="#tours" class="nav-link">TOURS</a>
                <a href="#about" class="nav-link">ABOUT US</a>
                <a href="#reviews" class="nav-link">REVIEWS</a>
                <a href="login.php" class="nav-link">LOG IN</a>
            </nav>
        </header>

        <div class="container">
            <p class="welcome-text">not sure what to put here</p>
        </div>

        <section id="tours" class="tours-section">
        <div class="section-header">
        <p class="section-title">MOST POPULAR TOURS</p>
        <a href="login.php" class="see-more">See More</a>
    </div>

            <div class="scroll-container">
                <div class="rectangle">
                    <img src="image/bglogo.jpg" class="tour-image" alt="Tour Image">
                    <div class="tour-title">Somewhere Beach (5 days)</div>
                    <a href="login.php" class="tour-button">₱ 18,950.00</a>
                </div>
                <div class="rectangle">
                    <img src="image/bglogo.jpg" class="tour-image" alt="Tour Image">
                    <div class="tour-title">Lake of Skemberdoo (5 days)</div>
                    <a href="login.php" class="tour-button">₱ 5,655.00</a>
                </div>
                <div class="rectangle">
                    <img src="image/bglogo.jpg" class="tour-image" alt="Tour Image">
                    <div class="tour-title">Mount Bundok (2 days & night)</div>
                    <a href="login.php" class="tour-button">₱ 3,750.00</a>
                </div>
                <div class="rectangle">
                    <img src="image/bglogo.jpg" class="tour-image" alt="Tour Image">
                    <div class="tour-title">Mount Name (1 day)</div>
                    <a href="login.php" class="tour-button">₱ 10,000.00</a>
                </div>
                <div class="rectangle">
                    <img src="image/bglogo.jpg" class="tour-image" alt="Tour Image">
                    <div class="tour-title">Mount Bundok (2 days & night)</div>
                    <a href="login.php" class="tour-button">₱ 3,750.00</a>
                </div>
            </div>
        </section>

        <section id="about" class="about-section white-background">
            <div class="section-header">
                <p class="section-title">About Us</p>
            </div>

            <div class="about-content">
                <div class="intro-text">
                    <p><b>Welcome to Higanteng Laagan Travel and Tours!</b><br>
                    Founded in February 2022 in the vibrant town of Sulop, Davao del Sur, Higanteng Laagan Travel and Tours is a proud promoter of local tourism, aiming to celebrate and share the rich cultural heritage of our beautiful region. From humble beginnings as a small tour guide service, we have grown into a recognized company known for creating immersive travel experiences that capture the unique charm and traditions of Davao del Sur.<br></p>
                </div>

                <!--div class="image-row">
                    <img src="image/bglogo.jpg" alt="Destination 1" class="destination-image">
                </div-->
            </div>

            <div class="details-text">
                <p><br> <b>Our Mission</b><br> 
                At Higanteng Laagan, our mission is to provide unforgettable travel experiences that highlight the hidden gems and cultural richness of the Philippines. We are dedicated to offering well-rounded tour packages that support local communities, promote sustainable tourism, and bring people closer to the heart of our land.,<br>
                <br><b>Our Vision</b><br>
                We envision a thriving local tourism industry where travelers from all over the world come to experience the beauty, heritage, and hospitality of Davao del Sur and beyond. Our goal is to be a bridge between visitors and our local culture, creating memorable journeys that leave a positive impact on both our clients and our communities.<br>
                <br><b>Our Journey</b><br>
                Since our establishment, we’ve built a reputation for offering meaningful travel experiences. In May 2024, we formalized our operations through registrations with the Department of Trade and Industry (DTI) and the Bureau of Internal Revenue (BIR). This official recognition marks our commitment to becoming a key player in the local tourism industry, with a focus on sustainable and culturally enriching travel.<br></p>
            </div>

        </section>


    <section class="white-background">
            <img src="image/yellow.jpg" width="100%" height="auto" alt="join us"/>
    </section>


        <section id="reviews" class="reviews-section">
            <p class="section-title">REVIEWS</p>
            <div class="scroll-container">
                <div class="review-rectangle">
                    <img src="image/logo.png" alt="Reviewer" class="reviewer-image">
                    <div class="review-text">
                        <div class="reviewer-name">Princess Marie Kate</div>
                        <div class="review-content">OMG! Most unforgettable<br>moment of my life!!</div>
                    </div>
                </div>
                <div class="review-rectangle">
                    <img src="image/logo.png" alt="Reviewer" class="reviewer-image">
                    <div class="review-text">
                        <div class="reviewer-name">Penguin</div>
                        <div class="review-content">Mi Muhe Ye!</div>
                    </div>
                </div>
                <div class="review-rectangle">
                    <img src="image/logo.png" alt="Reviewer" class="reviewer-image">
                    <div class="review-text">
                        <div class="reviewer-name">Botuser1234</div>
                        <div class="review-content">Sisi Dada yo</div>
                    </div>
                </div>
                <div class="review-rectangle">
                    <img src="image/logo.png" alt="Reviewer" class="reviewer-image">
                    <div class="review-text">
                        <div class="reviewer-name">John Doe</div>
                        <div class="review-content">Great experience!</div>
                    </div>
                </div>
                <div class="review-rectangle">
                    <img src="image/logo.png" alt="Reviewer" class="reviewer-image">
                    <div class="review-text">
                        <div class="reviewer-name">John Doe</div>
                        <div class="review-content">Great experience!</div>
                    </div>
                </div>
                <div class="review-rectangle">
                    <img src="image/logo.png" alt="Reviewer" class="reviewer-image">
                    <div class="review-text">
                        <div class="reviewer-name">John Doe</div>
                        <div class="review-content">Great experience!</div>
                    </div>
                </div>
                <div class="review-rectangle">
                    <img src="image/logo.png" alt="Reviewer" class="reviewer-image">
                    <div class="review-text">
                        <div class="reviewer-name">John Doe</div>
                        <div class="review-content">Great experience!</div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <p>&copy; <?php echo date("Y"); ?> All rights reserved.</p>
        </footer>
    </div>
</body>
</html>