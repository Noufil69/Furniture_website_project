// Simple animations and functionality
document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Smooth scrolling for navigation links (for same-page anchors if any)
    const navLinks = document.querySelectorAll('nav a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId !== '#') {
                e.preventDefault();
                const targetSection = document.querySelector(targetId);
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // 2. Fade-in elements on scroll
    const fadeElements = document.querySelectorAll('.service-card, .project-card');
    
    const fadeOnScroll = function() {
        fadeElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.style.opacity = "1";
                element.style.transform = "translateY(0)";
            }
        });
    };

    // Set initial state for fade elements
    fadeElements.forEach(element => {
        element.style.opacity = "0";
        element.style.transform = "translateY(30px)";
        element.style.transition = "opacity 0.6s ease, transform 0.6s ease";
    });

    // Check on scroll and load
    window.addEventListener('scroll', fadeOnScroll);
    fadeOnScroll(); // Check on initial load

    // 3. Navbar background on scroll
    const navbar = document.querySelector('.navbar');
    
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                navbar.style.backgroundColor = 'rgba(44, 62, 80, 0.95)';
                navbar.style.backdropFilter = 'blur(10px)';
            } else {
                navbar.style.backgroundColor = '#2c3e50';
                navbar.style.backdropFilter = 'none';
            }
        });
    }

    // 4. Simple form input effects
    const formInputs = document.querySelectorAll('input, textarea, select');
    formInputs.forEach(input => {
        // Add focus effect
        input.addEventListener('focus', function() {
            this.style.borderColor = '#d4af37';
            this.style.boxShadow = '0 0 0 3px rgba(212, 175, 55, 0.1)';
        });
        
        // Remove focus effect
        input.addEventListener('blur', function() {
            this.style.borderColor = '#e1e1e1';
            this.style.boxShadow = 'none';
        });
    });

    console.log('The Wood Work website loaded successfully!');
});