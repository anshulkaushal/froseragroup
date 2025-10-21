<?php
$title = 'Importing Services | Frosera Group';
$description = 'Explore products imported by Frosera Group: Cashew Nuts, Chia Seeds, Quinoa, Fox Nuts.';
$currentYear = date('Y');
$version = '1.2.2';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="stylesheet" href="public/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/jpeg" href="public/images/Logo.jpg">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <div class="logo-container">
                    <img src="public/images/Logo.jpg" alt="Frosera Group Logo" class="logo-image">
                    <h2>Frosera Group</h2>
                </div>
            </div>
            <ul class="nav-menu">
                <li class="nav-item"><a href="index.php#home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="index.php#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="index.php#services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="index.php#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="nav-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <section class="services" style="padding-top: 120px;">
        <div class="container">
            <div class="section-header">
                <h2>Importing Services</h2>
                <p>Explore some of our imported products</p>
            </div>

            <div class="services-grid">
                <div class="service-card product-category">
                    <div class="service-icon"><i class="fas fa-seedling"></i></div>
                    <h3>Cashew Nuts</h3>
                    <p>Premium quality cashew nuts sourced from trusted growers.</p>
                </div>
                <div class="service-card product-category">
                    <div class="service-icon"><i class="fas fa-seedling"></i></div>
                    <h3>Chia Seeds</h3>
                    <p>Nutrient-rich chia seeds for health-conscious consumers.</p>
                </div>
                <div class="service-card product-category">
                    <div class="service-icon"><i class="fas fa-seedling"></i></div>
                    <h3>Quinoa</h3>
                    <p>High-protein quinoa varieties imported to meet NZ standards.</p>
                </div>
                <div class="service-card product-category">
                    <div class="service-icon"><i class="fas fa-seedling"></i></div>
                    <h3>Fox Nuts</h3>
                    <p>Also known as makhana, a light and healthy snack option.</p>
                </div>
            </div>

            <div style="margin-top: 2rem; text-align: center;">
                <a href="index.php#services" class="btn btn-secondary">Back to Services</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-bottom">
                <p>&copy; <?php echo htmlspecialchars($currentYear, ENT_QUOTES, 'UTF-8'); ?> Frosera Group. All rights reserved. | Version <?php echo htmlspecialchars($version, ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
        </div>
    </footer>

    <script>
    // Minimal inline script for menu toggle on this page
    document.addEventListener('DOMContentLoaded', function() {
        const navToggle = document.querySelector('.nav-toggle');
        const navMenu = document.querySelector('.nav-menu');
        if (navToggle && navMenu) {
            navToggle.addEventListener('click', function(e) {
                e.preventDefault();
                navToggle.classList.toggle('active');
                navMenu.classList.toggle('active');
            });
        }
    });
    </script>
</body>
</html>
