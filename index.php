<?php
// Basic PHP entry point for Hostinger PHP hosting.
// Adjust variables below as needed.
$title = 'Frosera Group | Import & Distribution Experts in Wellington';
$description = 'Frosera Group is a trusted importer and distributor based in Wellington, New Zealand. Connecting global products with New Zealand markets since 2022.';
$currentYear = date('Y');
$version = '1.2.3'; // Update this when deploying changes
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>">
    
    <!-- Mobile-specific meta tags -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="Frosera Group">
    <meta name="theme-color" content="#2563eb">
    <meta name="msapplication-navbutton-color" content="#2563eb">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="version" content="<?php echo htmlspecialchars($version, ENT_QUOTES, 'UTF-8'); ?>">
    
    <!-- Preload critical resources -->
    <link rel="preload" href="public/css/styles.css" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" as="style">
    
    <!-- DNS prefetch for external resources -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    
    <link rel="stylesheet" href="public/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Favicon for browser tab and mobile -->
    <link rel="icon" type="image/jpeg" href="public/images/Logo.jpg">
    <link rel="shortcut icon" type="image/jpeg" href="public/images/Logo.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="public/images/Logo.jpg">
    <link rel="icon" type="image/jpeg" sizes="32x32" href="public/images/Logo.jpg">
    <link rel="icon" type="image/jpeg" sizes="16x16" href="public/images/Logo.jpg">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <div class="logo-container">
                    <img src="public/images/Logo.jpg" alt="Frosera Group Logo" class="logo-image">
                    <h2>Frosera Group</h2>
                </div>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#services" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="nav-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Connecting Global Products with New Zealand Markets</h1>
                <p class="hero-description">
                    Frosera Group is a trusted importer and distributor based in Wellington, New Zealand. 
                    Since our founding in November 2022, we've specialized in sourcing high-quality international 
                    products and delivering them efficiently to retailers, supermarkets, and food service providers across Aotearoa.
                </p>
                <div class="hero-features">
                    <div class="hero-feature">✅ Reliable Import Services</div>
                    <div class="hero-feature">✅ Nationwide Distribution Network</div>
                    <div class="hero-feature">✅ Ethical Sourcing & Quality Assurance</div>
                </div>
                <div class="hero-buttons">
                    <a href="#services" class="btn btn-primary">Our Services</a>
                    <a href="#contact" class="btn btn-secondary">Get in Touch</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-placeholder">
                    <i class="fas fa-globe"></i>
                    <i class="fas fa-truck"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-header">
                <h2>About Frosera Group</h2>
                <p>Your trusted partner for importing and distribution in New Zealand</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Who We Are</h3>
                    <p>
                        Founded in 2022, Frosera Group is a Wellington-based company focused on importing and 
                        distributing premium products from around the world. Our mission is to bring diversity, 
                        quality, and innovation to New Zealand's retail and food service sectors.
                    </p>
                    <p>
                        Our logo—a green leaf and golden flame—symbolizes our commitment to sustainability and excellence. 
                        Whether you're looking for ethnic foods, specialty beverages, or household essentials, 
                        Frosera Group is your go-to partner for global sourcing and local delivery.
                    </p>
                    <div class="stats">
                        <div class="stat">
                            <h4>2022</h4>
                            <p>Founded</p>
                        </div>
                        <div class="stat">
                            <h4>100%</h4>
                            <p>NZ Based</p>
                        </div>
                        <div class="stat">
                            <h4>24/7</h4>
                            <p>Support</p>
                        </div>
                    </div>
                </div>
                <div class="about-features">
                    <div class="feature">
                        <i class="fas fa-leaf"></i>
                        <h4>🌿 Ethical & Sustainable Sourcing</h4>
                        <p>We prioritize environmentally responsible and ethically sourced products</p>
                    </div>
                    <div class="feature">
                        <i class="fas fa-truck"></i>
                        <h4>🚚 Fast & Reliable Distribution</h4>
                        <p>Nationwide delivery network ensuring timely product distribution</p>
                    </div>
                    <div class="feature">
                        <i class="fas fa-handshake"></i>
                        <h4>🤝 Strong Supplier Relationships</h4>
                        <p>Trusted partnerships with international suppliers worldwide</p>
                    </div>
                    <div class="feature">
                        <i class="fas fa-box"></i>
                        <h4>📦 Custom Solutions</h4>
                        <p>Tailored solutions for retailers, wholesalers, and food service providers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2>Our Services</h2>
                <p>Importing & Distribution Solutions for New Zealand</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h3><a href="importing-services.php" class="nav-link">Importing Services</a></h3>
                    <p>We work with vetted international suppliers to bring in high-quality products that meet New Zealand's regulatory standards.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Distribution Services</h3>
                    <p>Our logistics team ensures timely delivery to stores, supermarkets, and food service providers across the country.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tags"></i>
                    </div>
                    <h3>Private Label Solutions</h3>
                    <p>Want to launch your own brand? Frosera Group offers private label and custom sourcing options tailored to your business needs.</p>
                </div>
                <div class="service-card product-category">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>🌍 Ethnic & Specialty Foods</h3>
                    <p>Authentic international cuisine and specialty food products from around the world.</p>
                </div>
                <div class="service-card product-category">
                    <div class="service-icon">
                        <i class="fas fa-wine-bottle"></i>
                    </div>
                    <h3>🥤 Beverages</h3>
                    <p>International beverages, specialty drinks, and unique beverage products.</p>
                </div>
                <div class="service-card product-category">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>🧼 Household Essentials</h3>
                    <p>Quality household products and daily essentials for New Zealand homes.</p>
                </div>
                <div class="service-card product-category">
                    <div class="service-icon">
                        <i class="fas fa-box"></i>
                    </div>
                    <h3>🍫 Packaged Goods</h3>
                    <p>Premium packaged foods, snacks, and consumer goods from international markets.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Get in Touch</h2>
                <p>Ready to take your business to the next level?</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Address</h4>
                            <p>Wellington, New Zealand<br>Importer & Distributor</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-globe"></i>
                        <div>
                            <h4>Website</h4>
                            <p>froseragroup.co.nz</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p>sales@froseragroup.co.nz</p>
                        </div>
                    </div>
                </div>
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Frosera Group</h3>
                    <p>Connecting Global Products with New Zealand Markets</p>
                    <div class="social-links">
                        <a href="https://www.instagram.com/froseragroup" target="_blank" rel="noopener noreferrer" title="Follow us on Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.tiktok.com/@froseragroup" target="_blank" rel="noopener noreferrer" title="Follow us on TikTok"><i class="fab fa-tiktok"></i></a>
                        <a href="https://www.linkedin.com/in/frosera-group-5a77ba390" target="_blank" rel="noopener noreferrer" title="Connect on LinkedIn"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#services">Importing Services</a></li>
                        <li><a href="#services">Distribution Services</a></li>
                        <li><a href="#services">Private Label Solutions</a></li>
                        <li><a href="#services">Product Categories</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo htmlspecialchars($currentYear, ENT_QUOTES, 'UTF-8'); ?> Frosera Group. All rights reserved. | Version <?php echo htmlspecialchars($version, ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
        </div>
    </footer>

    <!-- Complete inline script to avoid caching issues -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM loaded - complete inline script');
        
        const navToggle = document.querySelector('.nav-toggle');
        const navMenu = document.querySelector('.nav-menu');
        const navLinks = document.querySelectorAll('.nav-link');

        console.log('Elements found:', { navToggle: !!navToggle, navMenu: !!navMenu, navLinks: navLinks.length });

        if (!navToggle || !navMenu) {
            console.error('Required navigation elements not found!');
            return;
        }

        // Toggle mobile menu
        navToggle.addEventListener('click', function(e) {
            console.log('Hamburger clicked!');
            e.preventDefault();
            e.stopPropagation();
            
            const isActive = navToggle.classList.contains('active');
            console.log('Menu currently active:', isActive);
            
            if (isActive) {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
                console.log('Menu closed');
            } else {
                navToggle.classList.add('active');
                navMenu.classList.add('active');
                document.body.style.overflow = 'hidden';
                console.log('Menu opened');
            }
        });

        // Close mobile menu when clicking on a link
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                console.log('Nav link clicked, closing menu');
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (navMenu.classList.contains('active') && 
                !navMenu.contains(e.target) && 
                !navToggle.contains(e.target)) {
                console.log('Clicked outside, closing menu');
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
        
        // Smooth scrolling for in-page hash links only
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (!href || !href.startsWith('#')) {
                    // Allow normal navigation for non-hash links (e.g., .php pages)
                    return;
                }
                e.preventDefault();
                const targetSection = document.querySelector(href);
                if (targetSection) {
                    targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Contact form handling
        const contactForm = document.querySelector('.contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const formData = new FormData(this);
                const submitButton = this.querySelector('button[type="submit"]');
                const originalText = submitButton.textContent;
                
                submitButton.textContent = 'Sending...';
                submitButton.disabled = true;

                fetch('contact.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        name: formData.get('name'),
                        email: formData.get('email'),
                        subject: formData.get('subject'),
                        message: formData.get('message')
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                        this.reset();
                    } else {
                        alert(data.message || 'An error occurred. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                })
                .finally(() => {
                    submitButton.textContent = originalText;
                    submitButton.disabled = false;
                });
            });
        }

        // Service cards interactions (combined hover and touch)
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach(card => {
            // Hover effects for desktop
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
            
            // Touch effects for mobile
            let startY = 0;
            let startX = 0;
            
            card.addEventListener('touchstart', function(e) {
                startY = e.touches[0].clientY;
                startX = e.touches[0].clientX;
                this.style.transform = 'scale(0.98)';
            }, { passive: true });
            
            card.addEventListener('touchend', function(e) {
                this.style.transform = '';
            }, { passive: true });
            
            card.addEventListener('touchmove', function(e) {
                const currentY = e.touches[0].clientY;
                const currentX = e.touches[0].clientX;
                const diffY = Math.abs(currentY - startY);
                const diffX = Math.abs(currentX - startX);
                
                if (diffY > 10 || diffX > 10) {
                    this.style.transform = '';
                }
            }, { passive: true });
        });

        // Auto-detect device and screen size for navigation
        function updateNavigationDisplay() {
            const navToggle = document.querySelector('.nav-toggle');
            const navMenu = document.querySelector('.nav-menu');
            const isMobile = window.innerWidth <= 1024 || /Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
            
            if (isMobile) {
                // Show hamburger menu
                navToggle.style.display = 'flex';
                navMenu.style.display = 'flex';
                console.log('Mobile detected - hamburger menu enabled');
            } else {
                // Show desktop menu
                navToggle.style.display = 'none';
                navMenu.style.display = 'flex';
                navMenu.style.position = 'static';
                navMenu.style.left = 'auto';
                navMenu.style.width = 'auto';
                navMenu.style.flexDirection = 'row';
                navMenu.style.background = 'transparent';
                navMenu.style.boxShadow = 'none';
                navMenu.style.padding = '0';
                console.log('Desktop detected - horizontal menu enabled');
            }
        }
        
        // Initial check
        updateNavigationDisplay();
        
        // Update on window resize
        window.addEventListener('resize', updateNavigationDisplay);
        
        console.log('All scripts loaded successfully');
    });

    // Add CSS for loaded state
    const style = document.createElement('style');
    style.textContent = `
        body {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
        
        body.loaded {
            opacity: 1;
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    `;
    document.head.appendChild(style);

    // Add loading animation
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });
    </script>
</body>
</html>
