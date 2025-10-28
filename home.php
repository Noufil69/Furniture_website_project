<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wood Work - Professional Carpentry</title>
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="fade-in">Crafting Your Vision in Wood</h1>
            <p class="fade-in delay-1">Custom furniture & carpentry solutions with 30+ years of expertise</p>
            <a href="contact.php" class="cta-button fade-in delay-2">Get Free Estimate</a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-grid">
                <div class="service-card slide-in">
                    <h3>Custom Furniture</h3>
                    <p>Handcrafted tables, chairs, cabinets, and more tailored to your space</p>
                </div>
                <div class="service-card slide-in">
                    <h3>Kitchen Remodeling</h3>
                    <p>Custom cabinets, islands, and storage solutions for your kitchen</p>
                </div>
                <div class="service-card slide-in">
                    <h3>Wood Restoration</h3>
                    <p>Repair and restore antique furniture and wooden structures</p>
                </div>
                <div class="service-card slide-in">
                    <h3>Commercial Projects</h3>
                    <p>Custom woodwork for offices, restaurants, and retail spaces</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 3rem;">
                <a href="services.php" class="cta-button">View All Services</a>
            </div>
        </div>
    </section>

    <!-- Projects Preview Section -->
    <section class="projects">
        <div class="container">
            <h2>Recent Work</h2>
            <div class="projects-grid">
                <?php
                // Display 3 most recent projects from CSV
                $projectsFile = '../projects.csv';
                if (file_exists($projectsFile)) {
                    $projects = array_map('str_getcsv', file($projectsFile));
                    // Remove header row
                    array_shift($projects);
                    // Get last 3 projects
                    $recentProjects = array_slice($projects, -3, 3);
                    
                    foreach ($recentProjects as $project) {
                        echo "
                        <div class='project-card fade-in'>
                            <img src='{$project[3]}' alt='{$project[1]}'>
                            <div class='project-info'>
                                <h3>{$project[1]}</h3>
                                <p>{$project[2]}</p>
                                <span class='project-category'>{$project[4]}</span>
                            </div>
                        </div>
                        ";
                    }
                } else {
                    echo "<p class='no-projects'>No projects yet. Check back soon!</p>";
                }
                ?>
            </div>
            <div style="text-align: center; margin-top: 3rem;">
                <a href="projects.php" class="cta-button">View All Projects</a>
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>About The Wood Work</h2>
                    <p>With over 30 years of experience, we transform raw wood into beautiful, functional pieces that last generations. Our passion for woodworking combines traditional techniques with modern design.</p>
                    <div class="features">
                        <div class="feature">
                            <h4>✓ Quality Materials</h4>
                            <p>We use only the finest hardwoods and sustainable materials</p>
                        </div>
                        <div class="feature">
                            <h4>✓ Expert Craftsmanship</h4>
                            <p>Every piece is handcrafted with attention to detail</p>
                        </div>
                        <div class="feature">
                            <h4>✓ Custom Designs</h4>
                            <p>Your vision, brought to life with precision and care</p>
                        </div>
                    </div>
                    <div style="text-align: center; margin-top: 2rem;">
                        <a href="about.php" class="cta-button">Learn More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
       <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

    <script src="../assets/js/script.js"></script>
</body>
</html>