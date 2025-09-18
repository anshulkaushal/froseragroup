const express = require('express');
const path = require('path');
const bodyParser = require('body-parser');
require('dotenv').config();

const app = express();
const PORT = process.env.PORT || 3000;

// Set EJS as template engine
app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, 'views'));

// Middleware
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());
app.use(express.static(path.join(__dirname, 'public')));

// Routes
app.get('/', (req, res) => {
    res.render('index', {
        title: 'Frosera Group | Import & Distribution Experts in Wellington',
        description: 'Frosera Group is a trusted importer and distributor based in Wellington, New Zealand. Connecting global products with New Zealand markets since 2022.',
        currentYear: new Date().getFullYear()
    });
});

// Contact form handling
app.post('/contact', (req, res) => {
    const { name, email, subject, message } = req.body;
    
    // Basic validation
    if (!name || !email || !subject || !message) {
        return res.status(400).json({
            success: false,
            message: 'Please fill in all fields.'
        });
    }
    
    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        return res.status(400).json({
            success: false,
            message: 'Please enter a valid email address.'
        });
    }
    
    // TODO: Implement actual email sending with nodemailer
    // For now, just log the form data
    console.log('Contact form submission:', {
        name,
        email,
        subject,
        message,
        timestamp: new Date().toISOString()
    });
    
    // Simulate processing delay
    setTimeout(() => {
        res.json({
            success: true,
            message: 'Thank you for your message! We will get back to you soon.'
        });
    }, 1000);
});

// 404 handler
app.use((req, res) => {
    res.status(404).render('404', {
        title: '404 - Page Not Found | Frosera Group'
    });
});

// Error handler
app.use((err, req, res, next) => {
    console.error(err.stack);
    res.status(500).render('500', {
        title: '500 - Server Error | Frosera Group'
    });
});

// Start server
app.listen(PORT, () => {
    console.log(`🚀 Frosera Group website running on http://localhost:${PORT}`);
    console.log(`📁 Serving static files from: ${path.join(__dirname, 'public')}`);
    console.log(`📋 Views directory: ${path.join(__dirname, 'views')}`);
});

module.exports = app;
