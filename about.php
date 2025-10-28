<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - The Wood Work</title>
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

    <!-- About Header -->
    <section class="hero" style="height: 40vh; margin-top: 80px; background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
        <div class="hero-content">
            <h1 class="fade-in">About The Wood Work</h1>
            <p class="fade-in delay-1">Crafting excellence in wood for over 30 years</p>
        </div>
    </section>

    <!-- About Content -->
    <section class="about" style="padding: 80px 0;">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Our Story</h2>
                    <p>Founded 30 years ago, The Wood Work began as a small workshop with a big vision: to bring exceptional craftsmanship and personalized service to every woodworking project. What started as a passion for transforming raw wood into beautiful, functional pieces has grown into a trusted business serving homeowners and businesses throughout the region.</p>

                    <p>Over the past 30 years, we've had the privilege of working on thousands of projects, from custom furniture pieces that become family heirlooms to commercial installations that enhance business spaces. Our commitment to quality and customer satisfaction has remained unchanged since day one.</p>

                    <h3 style="color: #d4af37; margin: 2rem 0 1rem 0;">Our Mission</h3>
                    <p>To create exceptional woodwork that combines traditional craftsmanship with modern design, delivering beautiful, durable pieces that exceed our clients' expectations while maintaining the highest standards of integrity and service.</p>

                    <h3 style="color: #d4af37; margin: 2rem 0 1rem 0;">Why Choose Us?</h3>
                    <div class="features">
                        <div class="feature">
                            <h4>✓ Three Decades of Experience</h4>
                            <p>30+ years of honing our skills and understanding client needs</p>
                        </div>
                        <div class="feature">
                            <h4>✓ Quality Materials</h4>
                            <p>We source only the finest hardwoods and sustainable materials</p>
                        </div>
                        <div class="feature">
                            <h4>✓ Custom Designs</h4>
                            <p>Every project is tailored to your specific needs and vision</p>
                        </div>
                        <div class="feature">
                            <h4>✓ Attention to Detail</h4>
                            <p>From initial consultation to final installation, we care about every detail</p>
                        </div>
                        <div class="feature">
                            <h4>✓ Timely Delivery</h4>
                            <p>We respect your time and deliver projects as promised</p>
                        </div>
                        <div class="feature">
                            <h4>✓ Customer Satisfaction</h4>
                            <p>Your happiness is our ultimate measure of success</p>
                        </div>
                    </div>

                    <h3 style="color: #d4af37; margin: 2rem 0 1rem 0;">Our Process</h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin: 2rem 0;">
                        <div style="text-align: center; padding: 1.5rem; background: rgba(255,255,255,0.1); border-radius: 10px;">
                            <h4 style="color: #d4af37;">1. Consultation</h4>
                            <p>We discuss your vision, needs, and budget</p>
                        </div>
                        <div style="text-align: center; padding: 1.5rem; background: rgba(255,255,255,0.1); border-radius: 10px;">
                            <h4 style="color: #d4af37;">2. Design</h4>
                            <p>We create detailed plans and material selection</p>
                        </div>
                        <div style="text-align: center; padding: 1.5rem; background: rgba(255,255,255,0.1); border-radius: 10px;">
                            <h4 style="color: #d4af37;">3. Craftsmanship</h4>
                            <p>Our skilled artisans bring your vision to life</p>
                        </div>
                        <div style="text-align: center; padding: 1.5rem; background: rgba(255,255,255,0.1); border-radius: 10px;">
                            <h4 style="color: #d4af37;">4. Delivery</h4>
                            <p>We install and ensure your complete satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background: #f8f9fa; padding: 80px 0; text-align: center;">
        <div class="container">
            <h2 style="color: #2c3e50;">Ready to Work With Us?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem; color: #666;">Let's discuss your project and bring your vision to life</p>
            <a href="contact.php" class="cta-button">Start Your Project</a>
        </div>
    </section>

    <!-- Footer -->
        <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

    <script src="../assets/js/script.js"></script>
</body>
</html>