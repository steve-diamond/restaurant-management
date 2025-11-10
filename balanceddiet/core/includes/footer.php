  <!-- FOOTER -->
  <footer class="bg-neutral-900 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute inset-0 bg-gradient-to-br from-white/5 via-transparent to-white/5"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-12 lg:gap-8">
        
        <!-- Brand Section -->
        <div class="lg:col-span-1 space-y-6">
          <div class="flex items-center space-x-3">
            <img src="<?php echo $base_path; ?>assets/images/logo.jpg" 
                 alt="<?php echo SITE_NAME; ?> Logo" 
                 class="w-14 h-14 rounded-xl object-cover shadow-lg">
            <div>
              <h3 class="text-xl font-display font-bold text-white"><?php echo SITE_NAME; ?></h3>
              <p class="text-sm text-neutral-400">Authentic African Cuisine</p>
            </div>
          </div>
          
          <p class="text-neutral-300 leading-relaxed">
            Experience the rich flavors and cultural heritage of Africa through our carefully crafted traditional dishes from Nigeria, Ghana, and Cameroon.
          </p>

          <!-- Social Media Links -->
          <div class="flex space-x-4">
            <?php foreach (SOCIAL_MEDIA as $platform => $url): ?>
            <a href="<?php echo $url; ?>" 
               class="w-10 h-10 bg-neutral-800 hover:bg-african-600 rounded-lg flex items-center justify-center transition-colors duration-300 group"
               aria-label="Follow us on <?php echo ucfirst($platform); ?>"
               target="_blank" rel="noopener noreferrer">
              <?php if ($platform === 'facebook'): ?>
                <svg class="w-5 h-5 text-neutral-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
              <?php elseif ($platform === 'instagram'): ?>
                <svg class="w-5 h-5 text-neutral-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.618 5.367 11.986 11.988 11.986 6.618 0 11.986-5.368 11.986-11.986C24.003 5.367 18.635.001 12.017.001zM8.948 16.965c-2.405 0-4.354-1.949-4.354-4.354 0-2.405 1.949-4.354 4.354-4.354 2.405 0 4.354 1.949 4.354 4.354 0 2.405-1.949 4.354-4.354 4.354z"/>
                </svg>
              <?php elseif ($platform === 'twitter'): ?>
                <svg class="w-5 h-5 text-neutral-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                </svg>
              <?php elseif ($platform === 'youtube'): ?>
                <svg class="w-5 h-5 text-neutral-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
              <?php endif; ?>
            </a>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="space-y-6">
          <h4 class="text-lg font-semibold text-white">Quick Links</h4>
          <div class="space-y-3">
            <?php 
            $base_path = (basename(dirname(dirname($_SERVER['PHP_SELF']))) === 'balanceddiet' && basename(dirname($_SERVER['PHP_SELF'])) === 'pages') ? '../' : '';
            ?>
            <a href="<?php echo $base_path; ?>index.php" class="footer-link">Home</a>
            <a href="<?php echo $base_path; ?>pages/menu.php" class="footer-link">Our Menu</a>
            <a href="<?php echo $base_path; ?>pages/services.php" class="footer-link">Services</a>
            <a href="<?php echo $base_path; ?>pages/gallery.php" class="footer-link">Gallery</a>
            <a href="<?php echo $base_path; ?>pages/about.php" class="footer-link">About Us</a>
            <a href="<?php echo $base_path; ?>pages/contact.php" class="footer-link">Contact</a>
          </div>
        </div>

        <!-- Services -->
        <div class="space-y-6">
          <h4 class="text-lg font-semibold text-white">Our Services</h4>
          <div class="space-y-3">
            <a href="<?php echo $base_path; ?>pages/services.php#dining" class="footer-link">Dine-In Experience</a>
            <a href="<?php echo $base_path; ?>pages/services.php#catering" class="footer-link">Event Catering</a>
            <a href="<?php echo $base_path; ?>pages/services.php#takeaway" class="footer-link">Takeaway Orders</a>
            <a href="<?php echo $base_path; ?>pages/services.php#delivery" class="footer-link">Home Delivery</a>
            <a href="<?php echo $base_path; ?>pages/services.php#private" class="footer-link">Private Events</a>
            <a href="<?php echo $base_path; ?>pages/contact.php#booking" class="footer-link">Table Reservations</a>
          </div>
        </div>

        <!-- Contact Info -->
        <div class="space-y-6">
          <h4 class="text-lg font-semibold text-white">Get In Touch</h4>
          <div class="space-y-4">
            <div class="flex items-start space-x-3">
              <div class="w-5 h-5 text-african-500 mt-0.5 flex-shrink-0">
                <svg fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                </svg>
              </div>
              <div>
                <p class="text-neutral-300 text-sm leading-relaxed">
                  <?php echo RESTAURANT_ADDRESS; ?><br>
                  <?php echo RESTAURANT_POSTCODE; ?>
                </p>
              </div>
            </div>

            <div class="flex items-center space-x-3">
              <div class="w-5 h-5 text-african-500 flex-shrink-0">
                <svg fill="currentColor" viewBox="0 0 24 24">
                  <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                </svg>
              </div>
              <a href="tel:<?php echo SITE_PHONE; ?>" class="text-neutral-300 hover:text-african-500 transition-colors">
                <?php echo SITE_PHONE; ?>
              </a>
            </div>

            <div class="flex items-center space-x-3">
              <div class="w-5 h-5 text-african-500 flex-shrink-0">
                <svg fill="currentColor" viewBox="0 0 24 24">
                  <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
              </div>
              <a href="mailto:<?php echo SITE_EMAIL; ?>" class="text-neutral-300 hover:text-african-500 transition-colors">
                <?php echo SITE_EMAIL; ?>
              </a>
            </div>

            <!-- Opening Hours -->
            <div class="mt-6 p-4 bg-neutral-800 rounded-lg">
              <h5 class="text-sm font-semibold text-white mb-3 flex items-center">
                <svg class="w-4 h-4 mr-2 text-african-500" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.9L16.2,16.2Z"/>
                </svg>
                Opening Hours
              </h5>
              <div class="space-y-1 text-xs">
                <?php foreach (OPENING_HOURS as $day => $hours): ?>
                <div class="flex justify-between">
                  <span class="text-neutral-400"><?php echo $day; ?>:</span>
                  <span class="text-neutral-300"><?php echo $hours; ?></span>
                </div>
                <?php endforeach; ?>
              </div>
              <div id="currentStatus" class="mt-3 px-3 py-2 bg-green-900 text-green-300 rounded text-xs font-medium text-center">
                <?php echo getRestaurantStatus(); ?>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Newsletter Signup -->
      <div class="mt-16 pt-8 border-t border-neutral-700">
        <div class="max-w-2xl mx-auto text-center">
          <h4 class="text-2xl font-display font-bold text-white mb-4">Stay Connected with Us</h4>
          <p class="text-neutral-300 mb-8">Subscribe to our newsletter for exclusive offers, new menu items, and upcoming events.</p>
          
          <form id="newsletterForm" class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
            <input type="email" 
                   id="newsletterEmail" 
                   placeholder="Enter your email address" 
                   required
                   class="flex-1 px-4 py-3 bg-neutral-800 border border-neutral-600 rounded-lg text-white placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-african-500 focus:border-transparent">
            <button type="submit" 
                    class="px-8 py-3 bg-gradient-to-r from-african-500 to-african-600 hover:from-african-600 hover:to-african-700 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2 focus:ring-offset-neutral-900">
              Subscribe
            </button>
          </form>
          <p class="text-xs text-neutral-500 mt-3">We respect your privacy. Unsubscribe at any time.</p>
        </div>
      </div>

      <!-- Bottom Section -->
      <div class="mt-16 pt-8 border-t border-neutral-700 flex flex-col lg:flex-row justify-between items-center space-y-4 lg:space-y-0">
        <div class="flex flex-col lg:flex-row items-center space-y-2 lg:space-y-0 lg:space-x-6">
          <p class="text-neutral-400 text-sm">
            &copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.
          </p>
          <div class="flex space-x-4 text-xs">
            <a href="#" class="text-neutral-500 hover:text-neutral-300 transition-colors">Privacy Policy</a>
            <a href="#" class="text-neutral-500 hover:text-neutral-300 transition-colors">Terms of Service</a>
            <a href="#" class="text-neutral-500 hover:text-neutral-300 transition-colors">Cookie Policy</a>
          </div>
        </div>
        
        <div class="flex items-center space-x-4">
          <span class="text-neutral-500 text-sm">Powered by authentic African tradition</span>
          <div class="flex space-x-2">
            <span class="w-2 h-2 bg-yellow-500 rounded-full animate-pulse"></span>
            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse" style="animation-delay: 0.2s"></span>
            <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse" style="animation-delay: 0.4s;"></span>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Booking Modal -->
  <?php include 'booking-modal.php'; ?>

  <!-- JavaScript Files -->
  <?php 
  $asset_path = (basename(dirname(dirname($_SERVER['PHP_SELF']))) === 'balanceddiet' && basename(dirname($_SERVER['PHP_SELF'])) === 'pages') ? '../' : '';
  ?>
  <script src="<?php echo $asset_path; ?>assets/js/main.js"></script>
  
  <!-- EmailJS SDK -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
  
  <!-- Initialize EmailJS -->
  <script type="text/javascript">
    (function(){
      emailjs.init({
        publicKey: "pJh4_0CUoQwzHQD5w",
      });
    })();
  </script>

</body>
</html>

<style>
/* CSS Variables for consistent theming */
:root {
  --color-neutral-300: #d1d5db;
  --color-african-500: #ea580c;
}

/* Footer link styles (expanded from Tailwind @apply for lint compatibility) */
.footer-link {
  display: block;
  color: var(--color-neutral-300);
  font-size: 0.875rem; /* text-sm */
  transition: color 0.2s ease; /* transition-colors duration-200 */
}

.footer-link:hover {
  color: var(--color-african-500);
  padding-left: 0.5rem; /* pl-2 */
  transition: all 0.2s ease;
}
</style>