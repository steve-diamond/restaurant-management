<?php
// Balanced Diet Cottage - Header Include
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?php echo isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_NAME . ' — Authentic African Cuisine | Nigerian, Ghanaian & Cameroonian Restaurant'; ?></title>
  <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Experience authentic African flavors at Balanced Diet Cottage. Premium Nigerian, Ghanaian & Cameroonian cuisine, professional catering services, and cultural dining experiences in the heart of the UK.'; ?>" />
  <meta name="keywords" content="African restaurant, Nigerian food, Ghanaian cuisine, Cameroonian dishes, authentic African food, catering services, African culture, balanced diet, healthy African meals" />
  <meta property="og:title" content="<?php echo SITE_NAME; ?> — Authentic African Cuisine" />
  <meta property="og:description" content="Premium African dining experience featuring traditional Nigerian, Ghanaian & Cameroonian dishes" />
  <meta property="og:type" content="restaurant" />
  <meta property="og:url" content="<?php echo SITE_URL; ?>" />
  <meta property="og:image" content="<?php echo SITE_URL; ?>assets/images/hero/african-food-hero.jpg" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@BalancedDietCottage" />
  <link rel="canonical" href="<?php echo SITE_URL; ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="<?php echo SITE_NAME; ?>" />
  <meta name="language" content="en-GB" />
  <meta name="theme-color" content="#f59332" />
  <link rel="icon" type="image/jpeg" href="<?php echo SITE_URL; ?>assets/images/logo.jpg" />
  <link rel="apple-touch-icon" href="<?php echo SITE_URL; ?>assets/images/logo.jpg" />
  
  <!-- Structured Data for Restaurant -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Restaurant",
    "name": "<?php echo SITE_NAME; ?>",
    "description": "Authentic African cuisine featuring Nigerian, Ghanaian & Cameroonian dishes",
    "url": "<?php echo SITE_URL; ?>",
    "telephone": "<?php echo SITE_PHONE; ?>",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?php echo RESTAURANT_ADDRESS; ?>",
      "postalCode": "<?php echo RESTAURANT_POSTCODE; ?>",
      "addressCountry": "GB"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "51.5074",
      "longitude": "-0.1278"
    },
    "openingHours": [
      "Mo-Th 12:00-22:00",
      "Fr-Sa 12:00-23:00", 
      "Su 14:00-21:00"
    ],
    "servesCuisine": ["Nigerian", "Ghanaian", "Cameroonian", "African"],
    "priceRange": "££",
    "acceptsReservations": true,
    "hasMenu": true,
    "menu": "<?php echo SITE_URL; ?>#menu",
    "image": "<?php echo SITE_URL; ?>assets/images/logo.jpg",
    "logo": "<?php echo SITE_URL; ?>assets/images/logo.jpg",
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.8",
      "reviewCount": "127"
    }
  }
  </script>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- Browser Compatibility Polyfills for IE11+ -->
  <script nomodule>
    // Polyfill for Internet Explorer and older browsers
    if (!Element.prototype.closest) {
      Element.prototype.closest = function(s) {
        var el = this;
        if (!document.documentElement.contains(el)) return null;
        do {
          if (el.matches(s)) return el;
          el = el.parentElement || el.parentNode;
        } while (el !== null && el.nodeType === 1);
        return null;
      };
    }
    
    // Polyfill for forEach on NodeList
    if (window.NodeList && !NodeList.prototype.forEach) {
      NodeList.prototype.forEach = Array.prototype.forEach;
    }
    
    // Polyfill for Object.fromEntries
    if (!Object.fromEntries) {
      Object.fromEntries = function(entries) {
        var obj = {};
        for (var i = 0; i < entries.length; i++) {
          obj[entries[i][0]] = entries[i][1];
        }
        return obj;
      };
    }
  </script>
  
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Custom Tailwind Configuration -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            'sans': ['Inter', 'system-ui', 'sans-serif'],
            'display': ['Playfair Display', 'serif']
          },
          colors: {
            'african': {
              50: '#fef7ed',
              100: '#fdedd3',
              200: '#fbd6a5',
              300: '#f8b96d',
              400: '#f59332',
              500: '#f2750a',
              600: '#e35d00',
              700: '#bc4502',
              800: '#953708',
              900: '#792e0a'
            }
          },
          animation: {
            'fade-in': 'fadeIn 0.6s ease-in-out',
            'slide-up': 'slideUp 0.8s ease-out',
            'float': 'float 3s ease-in-out infinite',
          },
          keyframes: {
            fadeIn: {
              '0%': { opacity: '0', transform: 'translateY(20px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' }
            },
            slideUp: {
              '0%': { opacity: '0', transform: 'translateY(40px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' }
            },
            float: {
              '0%, 100%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(-10px)' }
            }
          }
        }
      }
    }
  </script>
  
  <!-- CSS Browser Compatibility -->
  <style>
    /* Fallback for older browsers that don't support CSS Grid */
    @supports not (display: grid) {
      .grid { display: block; }
      .grid > * { margin-bottom: 1rem; }
    }
    
    /* Fallback for browsers without flexbox support */
    @supports not (display: flex) {
      .flex { display: block; }
      .items-center { vertical-align: middle; }
    }
    
    /* Ensure minimum viewport for mobile compatibility */
    @media screen and (max-width: 480px) {
      body { min-width: 320px; }
    }
  </style>
  
  <!-- Custom CSS -->
  <?php 
  $asset_path = (basename(dirname(dirname($_SERVER['PHP_SELF']))) === 'balanceddiet' && basename(dirname($_SERVER['PHP_SELF'])) === 'pages') ? '../' : '';
  ?>
  <link rel="stylesheet" href="<?php echo $asset_path; ?>assets/css/styles.css">
</head>

<body class="antialiased bg-gradient-to-br from-neutral-50 to-orange-50/30 text-neutral-800 font-sans smooth-scroll">
  <!-- Skip to main content for accessibility -->
  <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-african-600 text-white px-4 py-2 rounded z-50">
    Skip to main content
  </a>

  <!-- LOADING SCREEN -->
  <div id="loadingScreen" class="fixed inset-0 z-50 bg-gradient-to-br from-african-600 to-african-800 flex items-center justify-center">
    <div class="text-center">
      <div class="relative mb-8">
        <div class="w-24 h-24 border-4 border-white/20 rounded-full animate-spin"></div>
        <div class="absolute top-0 left-0 w-24 h-24 border-4 border-white border-t-transparent rounded-full animate-spin"></div>
        <div class="absolute top-3 left-3 w-16 h-16 bg-white rounded-full flex items-center justify-center p-1">
          <img src="<?php echo SITE_URL; ?>assets/images/logo.jpg" 
               alt="<?php echo SITE_NAME; ?>" 
               class="w-full h-full rounded-full object-cover">
        </div>
      </div>
      <h2 class="text-2xl font-display font-bold text-white mb-2"><?php echo SITE_NAME; ?></h2>
      <p class="text-orange-200 animate-pulse">Preparing your authentic African experience...</p>
    </div>
  </div>

  <!-- NAVIGATION -->
  <?php include 'navigation.php'; ?>