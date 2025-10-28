<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Projects - The Wood Work</title>
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

    <!-- Projects Header -->
    <section class="hero" style="height: 40vh; margin-top: 80px; background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
        <div class="hero-content">
            <h1 class="fade-in">Our Projects</h1>
            <p class="fade-in delay-1">See our recent work and craftsmanship</p>
        </div>
    </section>

    <!-- Projects Gallery -->
    <section class="projects" style="padding: 80px 0;">
        <div class="container">
            <div class="projects-grid">
                <?php
                // Display all projects from CSV
                $projectsFile = '../projects.csv';
                if (file_exists($projectsFile)) {
                    $projects = array_map('str_getcsv', file($projectsFile));
                    // Remove header row
                    array_shift($projects);
                    
                    if (empty($projects)) {
                        echo "<p class='no-projects' style='grid-column: 1 / -1; text-align: center; color: #666; font-style: italic;'>No projects yet. Check back soon!</p>";
                    } else {
                        foreach ($projects as $project) {
                            echo "
                            <div class='project-card fade-in'>
                                <img src='{$project[3]}' alt='{$project[1]}' onerror=\"this.src='https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'\">
                                <div class='project-info'>
                                    <h3>{$project[1]}</h3>
                                    <p>{$project[2]}</p>
                                    <span class='project-category'>{$project[4]}</span>
                                    <small style='display: block; margin-top: 0.5rem; color: #888;'>Added: {$project[0]}</small>
                                </div>
                            </div>
                            ";
                        }
                    }
                } else {
                    echo "<p class='no-projects' style='grid-column: 1 / -1; text-align: center; color: #666; font-style: italic;'>No projects yet. Check back soon!</p>";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background: #2c3e50; color: white; padding: 80px 0; text-align: center;">
        <div class="container">
            <h2>Inspired by Our Work?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem;">Let's discuss your project ideas</p>
            <a href="contact.php" class="cta-button">Start Your Project</a>
        </div>
    </section>

    <!-- Footer -->
        <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

    <script src="../assets/js/script.js"></script>
</body>
</html>