<?php
// Get current page for active navigation styling
$current_page = basename($_SERVER['PHP_SELF'], '.php');

// Determine base path for navigation links
$base_path = (basename(dirname($_SERVER['PHP_SELF'])) === 'pages') ? '../' : '';
?>

<nav class="fixed top-0 left-0 right-0 z-40 bg-white/95 backdrop-blur-sm shadow-lg" role="navigation" aria-label="Main navigation">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 lg:h-20">
      <!-- Logo/Brand -->
      <div class="flex-shrink-0">
        <a href="<?php echo $base_path; ?>index.php" class="flex items-center space-x-3 group" aria-label="Go to homepage">
          <div class="relative">
            <img src="<?php echo $base_path; ?>assets/images/logo.jpg" 
                 alt="<?php echo SITE_NAME; ?> Logo" 
                 class="w-12 h-12 lg:w-14 lg:h-14 rounded-xl object-cover shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105">
            <div class="absolute -top-1 -right-1 w-4 h-4 bg-green-500 rounded-full animate-pulse" title="Open now"></div>
          </div>
          <div class="hidden sm:block">
            <h1 class="text-xl lg:text-2xl font-display font-bold bg-gradient-to-r from-african-600 to-african-500 bg-clip-text text-transparent">
              <?php echo SITE_NAME; ?>
            </h1>
            <p class="text-xs lg:text-sm text-neutral-600 -mt-1">Authentic African Cuisine</p>
          </div>
        </a>
      </div>

      <!-- Desktop Navigation -->
      <div class="hidden lg:flex items-center space-x-8">
        <a href="<?php echo $base_path; ?>index.php" class="nav-link <?php echo $current_page === 'index' ? 'active' : ''; ?>" data-page="home">
          Home
        </a>
        <a href="<?php echo $base_path; ?>pages/menu.php" class="nav-link <?php echo $current_page === 'menu' ? 'active' : ''; ?>" data-page="menu">
          Menu
        </a>
        <a href="<?php echo $base_path; ?>pages/services.php" class="nav-link <?php echo $current_page === 'services' ? 'active' : ''; ?>" data-page="services">
          Services
        </a>
        <a href="<?php echo $base_path; ?>pages/gallery.php" class="nav-link <?php echo $current_page === 'gallery' ? 'active' : ''; ?>" data-page="gallery">
          Gallery
        </a>
        <a href="<?php echo $base_path; ?>pages/about.php" class="nav-link <?php echo $current_page === 'about' ? 'active' : ''; ?>" data-page="about">
          About Us
        </a>
        <a href="<?php echo $base_path; ?>pages/contact.php" class="nav-link <?php echo $current_page === 'contact' ? 'active' : ''; ?>" data-page="contact">
          Contact
        </a>
        
        <!-- Restaurant Status -->
        <div class="flex items-center space-x-3 pl-4 border-l border-neutral-200">
          <div id="restaurantStatus" class="flex items-center space-x-2">
            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
            <span class="text-sm font-medium text-neutral-700"><?php echo getRestaurantStatus(); ?></span>
          </div>
        </div>

        <!-- Book Table Button -->
        <button onclick="openBookingModal()" 
                class="bg-gradient-to-r from-african-500 to-african-600 hover:from-african-600 hover:to-african-700 text-white px-6 py-2.5 rounded-full font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2"
                aria-label="Book a table">
          Book Table
        </button>
      </div>

      <!-- Mobile menu button -->
      <div class="lg:hidden flex items-center space-x-3">
        <!-- Restaurant Status (Mobile) -->
        <div id="restaurantStatusMobile" class="flex items-center space-x-1">
          <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
          <span class="text-xs font-medium text-neutral-700">Open</span>
        </div>
        
        <button id="mobileMenuBtn" 
                class="p-2 rounded-md text-neutral-600 hover:text-african-600 hover:bg-neutral-100 focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2 transition-colors"
                aria-label="Toggle mobile menu"
                aria-expanded="false">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path id="menuIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            <path id="closeIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" class="hidden"></path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobileMenu" class="lg:hidden hidden border-t border-neutral-200 bg-white">
      <div class="py-4 space-y-2">
        <a href="<?php echo $base_path; ?>index.php" class="mobile-nav-link <?php echo $current_page === 'index' ? 'active' : ''; ?>">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
          </svg>
          Home
        </a>
        <a href="<?php echo $base_path; ?>pages/menu.php" class="mobile-nav-link <?php echo $current_page === 'menu' ? 'active' : ''; ?>">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
          </svg>
          Menu
        </a>
        <a href="<?php echo $base_path; ?>pages/services.php" class="mobile-nav-link <?php echo $current_page === 'services' ? 'active' : ''; ?>">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
          </svg>
          Services
        </a>
        <a href="<?php echo $base_path; ?>pages/gallery.php" class="mobile-nav-link <?php echo $current_page === 'gallery' ? 'active' : ''; ?>">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
          Gallery
        </a>
        <a href="<?php echo $base_path; ?>pages/about.php" class="mobile-nav-link <?php echo $current_page === 'about' ? 'active' : ''; ?>">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
          About Us
        </a>
        <a href="<?php echo $base_path; ?>pages/contact.php" class="mobile-nav-link <?php echo $current_page === 'contact' ? 'active' : ''; ?>">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
          Contact
        </a>
        
        <!-- Mobile Book Table Button -->
        <div class="pt-4 border-t border-neutral-200">
          <button onclick="openBookingModal()" 
                  class="w-full bg-gradient-to-r from-african-500 to-african-600 hover:from-african-600 hover:to-african-700 text-white px-4 py-3 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center space-x-2"
                  aria-label="Book a table">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <span>Book Table</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</nav>

<style>
/* CSS Variables for consistent theming */
:root {
  --color-neutral-600: #4b5563;
  --color-african-600: #c05621;
  --color-neutral-50: #f8fafc;
  --color-african-50: #fff7ed;
}

/* Navigation Styles (expanded from Tailwind @apply for lint compatibility) */
.nav-link {
  color: var(--color-neutral-600);
  padding: 0.5rem 0.75rem; /* px-3 py-2 */
  font-size: 0.875rem; /* text-sm */
  font-weight: 500; /* font-medium */
  position: relative;
  transition: color 0.2s ease; /* transition-colors duration-200 */
}

.nav-link:hover {
  color: var(--color-african-600);
}

.nav-link.active {
  color: var(--color-african-600);
  font-weight: 600; /* font-semibold */
}

.nav-link:after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 50%;
  width: 0;
  height: 2px;
  background: linear-gradient(to right, #f59332, #f2750a);
  transition: all 0.3s ease;
  transform: translateX(-50%);
}

.nav-link:hover:after,
.nav-link.active:after {
  width: 100%;
}

.mobile-nav-link {
  display: flex;
  align-items: center;
  gap: 0.75rem; /* space-x-3 */
  padding: 0.75rem 1rem; /* px-4 py-3 */
  color: var(--color-neutral-600);
  border-radius: 0.5rem; /* rounded-lg */
  transition: background-color 0.2s ease, color 0.2s ease;
  margin: 0 0.5rem; /* mx-2 */
}

.mobile-nav-link:hover {
  color: var(--color-african-600);
  background-color: var(--color-neutral-50);
}

.mobile-nav-link.active {
  color: var(--color-african-600);
  background-color: var(--color-african-50);
  font-weight: 600;
}
</style>