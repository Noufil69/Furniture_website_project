<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - The Wood Work</title>
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

    <!-- Contact Header -->
    <section class="hero" style="height: 40vh; margin-top: 80px; background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
        <div class="hero-content">
            <h1 class="fade-in">Contact Us</h1>
            <p class="fade-in delay-1">Get in touch for your custom woodworking project</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" style="padding: 80px 0;">
        <div class="container">
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Get In Touch</h3>
                    <div class="contact-item">
                        <h4>📞 Phone</h4>
                        <p>+92 333 000000</p>
                       
                        <small>Mon-Thu: 8AM-6PM | Sat-Sun: 9AM-2PM</small>
                    </div>
                    <div class="contact-item">
                        <h4>✉️ Email</h4>
                        <p>testingsite.work71@gmail.com</p>
                        <small>We respond within 24 hours</small>
                    </div>
                    <div class="contact-item">
                        <h4>📍 Workshop Address</h4>
                        <p>somewhere in pakistan<br><br></p>
                    </div>
                    <div class="contact-item">
                        <h4>🕒 Business Hours</h4>
                        <p>Monday - Thursday: 8:00 AM - 6:00 PM<br>Saturday - Sunday: 9:00 AM - 2:00 PM<br>Friday: Closed</p>
                    </div>
                    <div class="contact-item">
                        <h4>📋 Service Area</h4>
                        <p>Providing our services all over country</p>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3>Send us a Message</h3>
                    <p style="margin-bottom: 1.5rem; color: #666;">Fill out the form below and we'll get back to you within 24 hours</p>
                    
                    <form action="../process-contact.php" method="POST">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
                        </div>

                        <div class="form-group">
                            <label for="service">Service Interested In *</label>
                            <select id="service" name="service" required>
                                <option value="">Select a Service</option>
                                <option value="custom-furniture">Custom Furniture</option>
                                <option value="kitchen-remodel">Kitchen Remodeling</option>
                                <option value="wood-restoration">Wood Restoration</option>
                                <option value="commercial-project">Commercial Project</option>
                                <option value="consultation">General Consultation</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Project Details *</label>
                            <textarea id="message" name="message" placeholder="Tell us about your project, including dimensions, preferred wood type, timeline, and any specific requirements..." rows="6" required></textarea>
                        </div>

                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section style="padding: 0;">
        <div style="width: 100%; height: 400px; background: #f8f9fa; display: flex; align-items: center; justify-content: center;">
            <div style="text-align: center; padding: 2rem;">
                <h3 style="color: #2c3e50; margin-bottom: 1rem;">Visit Our Workshop</h3>
                <p style="color: #666; margin-bottom: 1rem;">somwhere in this world</p>
                <p style="color: #888; font-style: italic;"></p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section style="background: #f8f9fa; padding: 80px 0;">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 3rem;">Frequently Asked Questions</h2>
            <div style="max-width: 800px; margin: 0 auto;">
                <div style="background: white; padding: 1.5rem; margin-bottom: 1rem; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">How long does a typical project take?</h4>
                    <p style="color: #666;">Project timelines vary based on complexity. Small furniture pieces: 2-4 weeks. Kitchen remodels: 4-8 weeks. We provide detailed timelines during consultation.</p>
                </div>
                <div style="background: white; padding: 1.5rem; margin-bottom: 1rem; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Do you provide free estimates?</h4>
                    <p style="color: #666;">Yes! We offer free estimates for all projects within our service area. Contact us to schedule a consultation.</p>
                </div>
                <div style="background: white; padding: 1.5rem; margin-bottom: 1rem; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">What types of wood do you work with?</h4>
                    <p style="color: #666;">We work with various hardwoods including oak, maple, walnut, cherry, and mahogany, as well as sustainable options like bamboo and reclaimed wood.</p>
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