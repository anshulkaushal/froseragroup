// Mobile Navigation Toggle - Simple and Robust
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, setting up hamburger menu...');
    
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.querySelector('.nav-menu');
    const navLinks = document.querySelectorAll('.nav-link');

    console.log('Elements found:', { navToggle, navMenu, navLinks: navLinks.length });

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
    
    // Handle escape key for mobile menu
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && navMenu.classList.contains('active')) {
            console.log('Escape pressed, closing menu');
            navToggle.classList.remove('active');
            navMenu.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
    
    console.log('Hamburger menu setup complete');

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

    // Navbar background on scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 100) {
            navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            navbar.style.backdropFilter = 'blur(10px)';
        } else {
            navbar.style.background = '#fff';
            navbar.style.backdropFilter = 'none';
        }
    });

    // Animate elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Add fade-in class to elements and observe them
    const animateElements = document.querySelectorAll('.service-card, .feature, .contact-item, .stat');
    animateElements.forEach(element => {
        element.classList.add('fade-in');
        observer.observe(element);
    });

    // Contact form handling
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            
            submitButton.textContent = 'Sending...';
            submitButton.disabled = true;

            // Send form data to server (PHP endpoint for Hostinger)
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

    // Service cards interactions (hover and touch)
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
            
            // If user is scrolling, reset transform
            if (diffY > 10 || diffX > 10) {
                this.style.transform = '';
            }
        }, { passive: true });
    });

    // Typing effect for hero title (optional enhancement)
    const heroTitle = document.querySelector('.hero-title');
    if (heroTitle) {
        const text = heroTitle.textContent;
        heroTitle.textContent = '';
        let i = 0;

        function typeWriter() {
            if (i < text.length) {
                heroTitle.textContent += text.charAt(i);
                i++;
                setTimeout(typeWriter, 50);
            }
        }

        // Start typing effect after a short delay
        setTimeout(typeWriter, 1000);
    }

    // Stats counter animation
    const stats = document.querySelectorAll('.stat h4');
    const statsObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statElement = entry.target;
                const finalText = statElement.textContent;
                
                // Only animate if it's a number
                if (finalText === '2022') {
                    animateNumber(statElement, 2020, 2022, 1000);
                } else if (finalText === '100%') {
                    animatePercentage(statElement, 0, 100, 1500);
                } else if (finalText === '24/7') {
                    // Keep as is for 24/7
                    return;
                }
                
                statsObserver.unobserve(statElement);
            }
        });
    }, { threshold: 0.5 });

    stats.forEach(stat => {
        statsObserver.observe(stat);
    });

    function animateNumber(element, start, end, duration) {
        const range = end - start;
        const increment = range / (duration / 16);
        let current = start;

        const timer = setInterval(() => {
            current += increment;
            if (current >= end) {
                element.textContent = end;
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current);
            }
        }, 16);
    }

    function animatePercentage(element, start, end, duration) {
        const range = end - start;
        const increment = range / (duration / 16);
        let current = start;

        const timer = setInterval(() => {
            current += increment;
            if (current >= end) {
                element.textContent = end + '%';
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current) + '%';
            }
        }, 16);
    }

    // Add loading animation to page
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });

    // Add parallax effect to hero section (disabled on mobile for performance)
    const isMobile = window.innerWidth <= 768 || /Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    
    if (!isMobile) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const heroSection = document.querySelector('.hero');
            const heroImage = document.querySelector('.hero-image');
            
            if (heroSection && heroImage) {
                const rate = scrolled * -0.5;
                heroImage.style.transform = `translateY(${rate}px)`;
            }
        });
    }
    
    // Mobile-specific optimizations
    if (isMobile) {
        // Disable hover effects on mobile
        document.body.classList.add('mobile-device');
        
        // Optimize scroll performance
        let ticking = false;
        function updateScrollEffects() {
            // Throttled scroll effects for mobile
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.backdropFilter = 'blur(10px)';
            } else {
                navbar.style.background = '#fff';
                navbar.style.backdropFilter = 'none';
            }
            ticking = false;
        }
        
        window.addEventListener('scroll', function() {
            if (!ticking) {
                requestAnimationFrame(updateScrollEffects);
                ticking = true;
            }
        });
    }
    
    // Improve form input experience on mobile
    const formInputs = document.querySelectorAll('.form-group input, .form-group textarea');
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            // Scroll input into view on mobile
            if (isMobile) {
                setTimeout(() => {
                    this.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }, 300);
            }
        });
    });
    
    // Add pull-to-refresh indicator (visual only)
    let startY = 0;
    let pullDistance = 0;
    const pullThreshold = 100;
    
    document.addEventListener('touchstart', function(e) {
        if (window.scrollY === 0) {
            startY = e.touches[0].clientY;
        }
    }, { passive: true });
    
    document.addEventListener('touchmove', function(e) {
        if (window.scrollY === 0 && startY > 0) {
            pullDistance = e.touches[0].clientY - startY;
            if (pullDistance > 0 && pullDistance < pullThreshold) {
                // Visual feedback for pull-to-refresh (optional)
                document.body.style.transform = `translateY(${pullDistance * 0.3}px)`;
            }
        }
    }, { passive: true });
    
    document.addEventListener('touchend', function() {
        if (pullDistance > pullThreshold) {
            // Could trigger refresh here
            console.log('Pull to refresh triggered');
        }
        document.body.style.transform = '';
        startY = 0;
        pullDistance = 0;
    }, { passive: true });
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