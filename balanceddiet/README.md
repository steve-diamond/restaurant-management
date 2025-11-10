# Balanced Diet Cottage Website

A professional African restaurant website featuring authentic Nigerian, Ghanaian, and Cameroonian cuisine.

## 🏗️ Project Structure

```text
balanceddiet/
├── index.php                      # Homepage (Root level)
├── pages/                         # All main pages
│   ├── about.php                  # About Us page
│   ├── contact.php                # Contact & Booking page
│   ├── gallery.php                # Photo Gallery
│   ├── menu.php                   # Food Menu
│   └── services.php               # Restaurant Services
├── core/                          # Core functionality
│   ├── config.php                 # Site configuration
│   └── includes/                  # Reusable components
│       ├── header.php             # Site header
│       ├── navigation.php         # Main navigation
│       ├── footer.php             # Site footer
│       └── booking-modal.php      # Booking modal
├── assets/                        # Static assets
│   ├── css/
│   │   └── styles.css            # Custom styles
│   ├── js/
│   │   └── main.js               # JavaScript functionality
│   └── images/                   # Image files
├── foodie-delight.code-workspace  # VS Code workspace
└── README.md                     # This file
```

## 🚀 Features

- **Professional Design**: Modern, mobile-responsive design with African cultural elements
- **Dynamic Navigation**: Smart navigation system that works across all pages
- **Modular Architecture**: Clean separation of concerns with reusable components
- **SEO Optimized**: Proper meta tags, structured data, and semantic HTML
- **Performance**: Optimized loading with Tailwind CSS and minimal JavaScript

## 🔧 Technical Stack

- **Backend**: PHP 8.0+
- **Frontend**: HTML5, Tailwind CSS, Vanilla JavaScript
- **Server**: Apache/Nginx (XAMPP compatible)
- **Development**: VS Code with PHP extensions

## 📝 Development Setup

1. Place the project in your web server directory (e.g., `htdocs/balanceddiet/`)
2. Open `foodie-delight.code-workspace` in VS Code
3. Start your local server (XAMPP, WAMP, etc.)
4. Access via `http://localhost/balanceddiet/`

## 🎨 Customization

- **Colors**: Modify the African color palette in Tailwind classes
- **Content**: Update text content in individual page files
- **Navigation**: Edit `core/includes/navigation.php`
- **Configuration**: Adjust settings in `core/config.php`

## 📱 Page URLs

- Homepage: `/index.php`
- Menu: `/pages/menu.php`
- Services: `/pages/services.php`
- Gallery: `/pages/gallery.php`
- About: `/pages/about.php`
- Contact: `/pages/contact.php`

## 🔗 Navigation System

The navigation system automatically adjusts paths based on the current location:

- When on homepage (`index.php`): Links to `pages/` folder
- When in `pages/` folder: Links use `../` relative paths

## 📦 Dependencies

- Tailwind CSS (CDN)
- Google Fonts (Inter & Playfair Display)
- EmailJS (for contact forms)
- No additional PHP dependencies required
