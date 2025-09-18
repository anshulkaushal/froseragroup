# Froserra Group Website

A modern, responsive Node.js web application for Froserra Group - Import & Distribution Experts in Wellington, New Zealand.

## About Froserra Group

Founded in 2022, Froserra Group is a Wellington-based company focused on importing and distributing premium products from around the world. Our mission is to bring diversity, quality, and innovation to New Zealand's retail and food service sectors.

## Website Features

- **Node.js Backend**: Express.js server with EJS templating
- **Responsive Design**: Fully responsive layout that works on all devices
- **Modern UI/UX**: Clean, professional design with smooth animations
- **Interactive Navigation**: Mobile-friendly navigation with smooth scrolling
- **Server-side Contact Form**: Functional contact form with server-side validation
- **Performance Optimized**: Fast loading with optimized assets
- **Error Handling**: Custom 404 and 500 error pages

## Services Highlighted

- 🚢 **Importing Services**: Working with vetted international suppliers
- 🚚 **Distribution Services**: Nationwide delivery network
- 🏷️ **Private Label Solutions**: Custom sourcing and branding options

## Product Categories

- 🌍 Ethnic & Specialty Foods
- 🥤 Beverages
- 🧼 Household Essentials
- 🍫 Packaged Goods

## Technology Stack

- **Node.js**: Server-side JavaScript runtime
- **Express.js**: Web application framework
- **EJS**: Embedded JavaScript templating engine
- **HTML5**: Semantic markup with modern structure
- **CSS3**: Advanced styling with Flexbox, Grid, and animations
- **JavaScript**: Interactive features and smooth user experience
- **Font Awesome**: Professional icons
- **Google Fonts**: Inter font family for clean typography

## File Structure

```
froseragroup/
├── server.js           # Main Express server
├── package.json        # Node.js dependencies and scripts
├── public/            # Static assets
│   ├── css/
│   │   └── styles.css  # CSS styles and responsive design
│   ├── js/
│   │   └── script.js   # Client-side JavaScript
│   └── images/
│       └── Logo.jpg    # Company logo
├── views/             # EJS templates
│   ├── index.ejs      # Main page template
│   ├── 404.ejs        # 404 error page
│   └── 500.ejs        # 500 error page
└── README.md          # This file
```

## Setup Instructions

### Prerequisites
- Node.js (version 14 or higher)
- npm (comes with Node.js)

### Installation

1. **Clone or download the project** to your local machine

2. **Install dependencies**:
   ```bash
   npm install
   ```

3. **Start the development server**:
   ```bash
   npm run dev
   ```
   Or for production:
   ```bash
   npm start
   ```

4. **Open your browser** and navigate to:
   ```
   http://localhost:3000
   ```

### Available Scripts

- `npm start` - Start the production server
- `npm run dev` - Start the development server with auto-restart (nodemon)

### Environment Variables

Create a `.env` file in the root directory for environment configuration:

```env
# Server Configuration
PORT=3000
NODE_ENV=development

# Email Configuration (for contact form)
# EMAIL_HOST=smtp.gmail.com
# EMAIL_PORT=587
# EMAIL_USER=your-email@gmail.com
# EMAIL_PASS=your-app-password
# EMAIL_FROM=noreply@froseragroup.com
# EMAIL_TO=froserag@gmail.com
```

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Contact Information

- **Website**: www.froserragroup.co.nz
- **Email**: froserag@gmail.com
- **Location**: Wellington, New Zealand

## Key Features

### Responsive Navigation
- Mobile-friendly hamburger menu
- Smooth scrolling to sections
- Active link highlighting

### Hero Section
- Compelling headline and description
- Feature highlights with checkmarks
- Call-to-action buttons
- Animated background elements

### Services Section
- Grid layout for services
- Hover effects and animations
- Distinct styling for product categories
- Professional icons

### Contact Section
- Functional contact form
- Form validation
- Company contact information
- Responsive layout

### Performance Features
- Optimized images and assets
- Smooth animations
- Fast loading times
- SEO-friendly structure

## Customization

### Colors
The website uses a consistent color scheme:
- Primary Blue: `#2563eb`
- Green (Leaf): `#22c55e`
- Gold (Flame): `#f59e0b`
- Background: `#f8fafc`

### Fonts
- Primary Font: Inter (Google Fonts)
- Fallback: System fonts

### Logo
The logo combines:
- 🍃 Green leaf (sustainability)
- 🔥 Golden flame (excellence)

## License

© 2024 Froserra Group. All rights reserved.

## Support

For technical support or questions about the website, please contact the development team or Froserra Group directly.
