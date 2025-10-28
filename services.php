<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - The Wood Work</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <img src="../assets/images/TheWoodWork.png" alt="The Wood Work" class="logo-image">
                <div class="business-name">The Wood Work</div>
            </div>
            <ul class="nav-menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Services Header -->
    <section class="hero" style="height: 40vh; margin-top: 80px; background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
        <div class="hero-content">
            <h1 class="fade-in">Our Services</h1>
            <p class="fade-in delay-1">Professional carpentry solutions for every need</p>
        </div>
    </section>

    <!-- Services Content -->
    <section class="services" style="padding: 80px 0;">
        <div class="container">
            <div class="services-grid">
                <div class="service-card slide-in">
                    <h3>Custom Furniture</h3>
                    <p>Handcrafted tables, chairs, cabinets, and more tailored to your space and style. We work with you to create unique pieces that fit your vision.</p>
                    <ul style="text-align: left; margin-top: 1rem; color: #666;">
                        <li>Dining tables & chairs</li>
                        <li>Bookshelves & storage</li>
                        <li>Bedroom furniture</li>
                        <li>Custom desks</li>
                    </ul>
                </div>
                <div class="service-card slide-in">
                    <h3>Kitchen Remodeling</h3>
                    <p>Transform your kitchen with custom cabinets, islands, and storage solutions. We combine functionality with beautiful woodwork.</p>
                    <ul style="text-align: left; margin-top: 1rem; color: #666;">
                        <li>Custom cabinets</li>
                        <li>Kitchen islands</li>
                        <li>Pantry organization</li>
                        <li>Countertop installation</li>
                    </ul>
                </div>
                <div class="service-card slide-in">
                    <h3>Wood Restoration</h3>
                    <p>Bring old furniture and wooden structures back to life. We repair, refinish, and restore antique pieces with care and expertise.</p>
                    <ul style="text-align: left; margin-top: 1rem; color: #666;">
                        <li>Antique furniture repair</li>
                        <li>Wood finishing</li>
                        <li>Structural repairs</li>
                        <li>Surface restoration</li>
                    </ul>
                </div>
                <div class="service-card slide-in">
                    <h3>Commercial Projects</h3>
                    <p>Custom woodwork for businesses, offices, restaurants, and retail spaces. We create durable, beautiful solutions for commercial needs.</p>
                    <ul style="text-align: left; margin-top: 1rem; color: #666;">
                        <li>Office furniture</li>
                        <li>Restaurant fixtures</li>
                        <li>Retail displays</li>
                        <li>Reception areas</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background: #2c3e50; color: white; padding: 80px 0; text-align: center;">
        <div class="container">
            <h2>Ready to Start Your Project?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem;">Contact us for a free consultation and estimate</p>
            <a href="contact.php" class="cta-button">Get Free Estimate</a>
        </div>
    </section>

    <!-- Footer -->
       <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

    <script src="../assets/js/script.js"></script>
</body>
</html>