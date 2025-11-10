# Image Update Script for Balanced Diet Cottage

## Completed Updates

✅ index.php - Hero background image  
✅ index.php - About section images  
✅ gallery.php - First gallery image
✅ pages/menu.php - Jollof rice menu item
✅ services.php - Main service image
✅ gallery.php - First testimonial image
✅ about.php - Chef portrait
✅ core/includes/header.php - Meta image

## Remaining Updates Needed

### 1. Gallery Images (gallery.php)
- Line 79: African stew → assets/images/gallery/african-stew.jpg
- Line 91: Grilled meat → assets/images/gallery/grilled-meat.jpg
- Line 103: Plantains → assets/images/gallery/plantains.jpg
- Line 116: Rice beans → assets/images/gallery/rice-beans.jpg
- Line 275: Customer 2 → assets/images/testimonials/customer-2.jpg
- Line 308: Customer 3 → assets/images/testimonials/customer-3.jpg

### 2. Menu Images (pages/menu.php)
- Multiple dish images need local references with ../assets/images/menu/

### 3. About Page Images (about.php & pages/about.php)
- Team member images → assets/images/about/
- Heritage images → assets/images/about/

### 4. Services Images
- Multiple service images → assets/images/services/

### 5. JavaScript References (assets/js/main.js)
- Update image URLs in gallery data

## File Structure Created

```text
assets/images/
├── hero/african-food-hero.jpg
├── gallery/
│   ├── jollof-rice.jpg
│   ├── african-stew.jpg
│   ├── grilled-meat.jpg
│   ├── plantains.jpg
│   └── rice-beans.jpg
├── menu/main-dishes/
│   ├── jollof-rice.jpg
│   ├── egusi-soup.jpg
│   └── suya-skewers.jpg
├── about/chef-portrait.jpg
├── services/
│   ├── catering-service.jpg
│   └── private-dining.jpg
└── testimonials/
    ├── customer-1.jpg
    ├── customer-2.jpg
    └── customer-3.jpg
```

## Benefits of Local Images

✅ Faster loading times
✅ No external dependencies  
✅ Better SEO performance
✅ Consistent branding
✅ Offline functionality
✅ No bandwidth concerns