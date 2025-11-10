<?php
// Include configuration
require_once '../core/config.php';

// Page-specific variables
$page_title = "Contact Us";
$page_description = "Get in touch with Balanced Diet Cottage. Visit us, call us, or send us a message. We're here to help with reservations, catering, and any questions about our authentic African cuisine.";

// Include header
include '../core/includes/header.php';
?>

<!-- Main Content -->
<main id="main-content" class="pt-16 lg:pt-20">

  <!-- HERO SECTION -->
  <section class="relative py-20 bg-gradient-to-br from-african-600 to-african-800 text-white overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute inset-0 bg-gradient-to-br from-white/5 via-transparent to-white/5"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h1 class="text-4xl lg:text-6xl font-display font-bold mb-6">Get In Touch</h1>
      <p class="text-xl lg:text-2xl text-orange-100 max-w-3xl mx-auto leading-relaxed">
        We'd love to hear from you! Whether you have questions, want to make a reservation, or need catering services, we're here to help.
      </p>
    </div>
  </section>

  <!-- CONTACT INFORMATION -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
        
        <!-- Contact Form -->
        <div>
          <h2 class="text-3xl lg:text-4xl font-display font-bold text-neutral-900 mb-8">Send Us a Message</h2>
          
          <form id="contactForm" class="space-y-6">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label for="firstName" class="block text-sm font-semibold text-neutral-700 mb-2">First Name *</label>
                <input type="text" 
                       id="firstName" 
                       name="firstName" 
                       required
                       class="w-full px-4 py-3 border-2 border-neutral-200 rounded-xl focus:border-african-500 focus:ring-2 focus:ring-african-500/20 transition-all duration-300 outline-none"
                       placeholder="Enter your first name">
              </div>
              <div>
                <label for="lastName" class="block text-sm font-semibold text-neutral-700 mb-2">Last Name *</label>
                <input type="text" 
                       id="lastName" 
                       name="lastName" 
                       required
                       class="w-full px-4 py-3 border-2 border-neutral-200 rounded-xl focus:border-african-500 focus:ring-2 focus:ring-african-500/20 transition-all duration-300 outline-none"
                       placeholder="Enter your last name">
              </div>
            </div>

            <div>
              <label for="email" class="block text-sm font-semibold text-neutral-700 mb-2">Email Address *</label>
              <input type="email" 
                     id="email" 
                     name="email" 
                     required
                     class="w-full px-4 py-3 border-2 border-neutral-200 rounded-xl focus:border-african-500 focus:ring-2 focus:ring-african-500/20 transition-all duration-300 outline-none"
                     placeholder="Enter your email address">
            </div>

            <div>
              <label for="phone" class="block text-sm font-semibold text-neutral-700 mb-2">Phone Number</label>
              <input type="tel" 
                     id="phone" 
                     name="phone"
                     class="w-full px-4 py-3 border-2 border-neutral-200 rounded-xl focus:border-african-500 focus:ring-2 focus:ring-african-500/20 transition-all duration-300 outline-none"
                     placeholder="Enter your phone number">
            </div>

            <div>
              <label for="subject" class="block text-sm font-semibold text-neutral-700 mb-2">Subject *</label>
              <select id="subject" 
                      name="subject" 
                      required
                      class="w-full px-4 py-3 border-2 border-neutral-200 rounded-xl focus:border-african-500 focus:ring-2 focus:ring-african-500/20 transition-all duration-300 outline-none">
                <option value="">Select a subject</option>
                <option value="reservation">Table Reservation</option>
                <option value="catering">Catering Inquiry</option>
                <option value="events">Private Events</option>
                <option value="feedback">Feedback</option>
                <option value="general">General Inquiry</option>
                <option value="other">Other</option>
              </select>
            </div>

            <div>
              <label for="message" class="block text-sm font-semibold text-neutral-700 mb-2">Message *</label>
              <textarea id="message" 
                        name="message" 
                        required
                        rows="6"
                        class="w-full px-4 py-3 border-2 border-neutral-200 rounded-xl focus:border-african-500 focus:ring-2 focus:ring-african-500/20 transition-all duration-300 outline-none resize-vertical"
                        placeholder="Tell us how we can help you..."></textarea>
            </div>

            <div class="flex items-start space-x-3">
              <input type="checkbox" 
                     id="newsletter" 
                     name="newsletter"
                     class="mt-1 w-4 h-4 text-african-600 bg-neutral-100 border-neutral-300 rounded focus:ring-african-500 focus:ring-2">
              <label for="newsletter" class="text-sm text-neutral-600">
                I would like to receive updates about special offers, events, and new menu items.
              </label>
            </div>

            <button type="submit" 
                    class="w-full bg-gradient-to-r from-african-500 to-african-600 hover:from-african-600 hover:to-african-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed">
              <span class="flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                </svg>
                Send Message
              </span>
            </button>

          </form>
        </div>

        <!-- Contact Information & Map -->
        <div class="space-y-8">
          
          <!-- Contact Info Cards -->
          <div class="space-y-6">
            
            <!-- Address -->
            <div class="contact-info-card bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-2xl shadow-lg">
              <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center flex-shrink-0">
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-lg font-bold text-neutral-900 mb-1">Visit Us</h3>
                  <p class="text-neutral-600 leading-relaxed">
                    <?php echo RESTAURANT_ADDRESS; ?>
                  </p>
                  <p class="text-sm text-green-600 font-semibold mt-2">
                    Easy parking available
                  </p>
                </div>
              </div>
            </div>

            <!-- Phone -->
            <div class="contact-info-card bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-2xl shadow-lg">
              <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-lg font-bold text-neutral-900 mb-1">Call Us</h3>
                  <p class="text-neutral-600 leading-relaxed">
                    <a href="tel:<?php echo RESTAURANT_PHONE; ?>" class="hover:text-blue-600 transition-colors">
                      <?php echo RESTAURANT_PHONE; ?>
                    </a>
                  </p>
                  <p class="text-sm text-blue-600 font-semibold mt-2">
                    Available during business hours
                  </p>
                </div>
              </div>
            </div>

            <!-- Email -->
            <div class="contact-info-card bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-2xl shadow-lg">
              <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-lg font-bold text-neutral-900 mb-1">Email Us</h3>
                  <p class="text-neutral-600 leading-relaxed">
                    <a href="mailto:<?php echo RESTAURANT_EMAIL; ?>" class="hover:text-purple-600 transition-colors">
                      <?php echo RESTAURANT_EMAIL; ?>
                    </a>
                  </p>
                  <p class="text-sm text-purple-600 font-semibold mt-2">
                    We respond within 24 hours
                  </p>
                </div>
              </div>
            </div>

          </div>

          <!-- Opening Hours -->
          <div class="bg-gradient-to-br from-african-50 to-yellow-50 p-6 rounded-2xl shadow-lg">
            <h3 class="text-xl font-bold text-neutral-900 mb-4 flex items-center">
              <svg class="w-5 h-5 mr-2 text-african-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              Opening Hours
            </h3>
            <div class="space-y-2">
              <?php foreach (OPENING_HOURS as $day => $hours): ?>
              <div class="flex justify-between items-center py-1">
                <span class="font-semibold text-neutral-700 capitalize"><?php echo $day; ?>:</span>
                <span class="text-neutral-600"><?php echo $hours; ?></span>
              </div>
              <?php endforeach; ?>
            </div>
            <div class="mt-4 p-3 bg-white rounded-lg border border-african-200">
              <div class="flex items-center">
                <div class="w-3 h-3 bg-green-500 rounded-full mr-2 animate-pulse"></div>
                <span class="text-sm font-semibold text-green-700">
                  Currently <?php echo isRestaurantOpen() ? 'Open' : 'Closed'; ?>
                </span>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- MAP SECTION -->
  <section class="py-20 bg-gradient-to-br from-neutral-50 to-orange-50/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center mb-12">
        <h2 class="text-4xl lg:text-5xl font-display font-bold text-neutral-900 mb-4">Find Us</h2>
        <p class="text-xl text-neutral-600 max-w-2xl mx-auto">
          Located in the heart of the city, we're easily accessible by public transport and car
        </p>
      </div>

      <!-- Map Container -->
      <div class="bg-white p-4 rounded-2xl shadow-lg">
        <div class="aspect-w-16 aspect-h-9 bg-neutral-200 rounded-xl overflow-hidden">
          <!-- Placeholder for Google Maps or other map service -->
          <div class="w-full h-96 bg-gradient-to-br from-green-400 to-blue-500 flex items-center justify-center text-white">
            <div class="text-center">
              <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              <h3 class="text-xl font-bold mb-2">Interactive Map</h3>
              <p class="text-sm opacity-90">Click to open in Google Maps</p>
            </div>
          </div>
        </div>
        
        <div class="mt-4 flex flex-wrap justify-center gap-4">
          <a href="https://maps.google.com" target="_blank" rel="noopener noreferrer"
             class="bg-african-600 hover:bg-african-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
            Open in Google Maps
          </a>
          <button onclick="getDirections()"
                  class="border-2 border-african-600 text-african-600 hover:bg-african-600 hover:text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
            Get Directions
          </button>
        </div>
      </div>

    </div>
  </section>

  <!-- FAQ SECTION -->
  <section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center mb-12">
        <h2 class="text-4xl lg:text-5xl font-display font-bold text-neutral-900 mb-4">Frequently Asked Questions</h2>
        <p class="text-xl text-neutral-600">
          Quick answers to common questions
        </p>
      </div>

      <div class="space-y-6">
        
        <!-- FAQ Item 1 -->
        <div class="faq-item bg-gradient-to-r from-white to-african-50/30 border border-neutral-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300">
          <button class="faq-question w-full text-left focus:outline-none" onclick="toggleFAQ(this)">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-bold text-neutral-900">Do you take reservations?</h3>
              <svg class="w-5 h-5 text-african-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </button>
          <div class="faq-answer mt-4 text-neutral-600 leading-relaxed hidden">
            <p>Yes, we highly recommend making reservations, especially for dinner and weekends. You can book online through our website, call us directly, or walk in for immediate seating (subject to availability).</p>
          </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="faq-item bg-gradient-to-r from-white to-african-50/30 border border-neutral-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300">
          <button class="faq-question w-full text-left focus:outline-none" onclick="toggleFAQ(this)">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-bold text-neutral-900">Do you offer vegetarian and vegan options?</h3>
              <svg class="w-5 h-5 text-african-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </button>
          <div class="faq-answer mt-4 text-neutral-600 leading-relaxed hidden">
            <p>Absolutely! We have a variety of vegetarian and vegan dishes featuring traditional African vegetables, legumes, and grains. Our menu clearly marks all dietary options, and our staff can help you choose the perfect meal.</p>
          </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="faq-item bg-gradient-to-r from-white to-african-50/30 border border-neutral-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300">
          <button class="faq-question w-full text-left focus:outline-none" onclick="toggleFAQ(this)">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-bold text-neutral-900">Can you accommodate food allergies?</h3>
              <svg class="w-5 h-5 text-african-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </button>
          <div class="faq-answer mt-4 text-neutral-600 leading-relaxed hidden">
            <p>Yes, we take food allergies very seriously. Please inform your server about any allergies or dietary restrictions when ordering, and our kitchen team will ensure your meal is prepared safely. We can accommodate most common allergies including nuts, dairy, and gluten.</p>
          </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="faq-item bg-gradient-to-r from-white to-african-50/30 border border-neutral-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300">
          <button class="faq-question w-full text-left focus:outline-none" onclick="toggleFAQ(this)">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-bold text-neutral-900">Do you offer catering services?</h3>
              <svg class="w-5 h-5 text-african-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </button>
          <div class="faq-answer mt-4 text-neutral-600 leading-relaxed hidden">
            <p>Yes! We provide full catering services for events of all sizes - from intimate gatherings to large corporate events. Our catering menu includes our most popular dishes, and we can customize options to fit your needs and budget.</p>
          </div>
        </div>

        <!-- FAQ Item 5 -->
        <div class="faq-item bg-gradient-to-r from-white to-african-50/30 border border-neutral-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300">
          <button class="faq-question w-full text-left focus:outline-none" onclick="toggleFAQ(this)">
            <div class="flex justify-between items-center">
              <h3 class="text-lg font-bold text-neutral-900">Is parking available?</h3>
              <svg class="w-5 h-5 text-african-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </button>
          <div class="faq-answer mt-4 text-neutral-600 leading-relaxed hidden">
            <p>We have dedicated parking spaces available for our customers, including accessible parking spots. Additionally, there's street parking nearby and public transportation options within walking distance.</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- CTA SECTION -->
  <section class="py-20 bg-gradient-to-r from-african-600 to-african-700 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">Ready to Experience Authentic African Cuisine?</h2>
      <p class="text-xl text-orange-100 mb-10 leading-relaxed">
        Visit us today and discover why we're the premier destination for traditional African flavors in the city.
      </p>
      
      <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <button onclick="openBookingModal()" 
                class="bg-white text-african-600 px-10 py-4 rounded-full font-bold text-lg hover:bg-neutral-100 transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-african-600">
          Make a Reservation
        </button>
        <a href="tel:<?php echo RESTAURANT_PHONE; ?>" 
           class="border-2 border-white text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-african-600 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-african-600">
          Call Now
        </a>
      </div>
    </div>
  </section>

</main>

<?php include '../core/includes/footer.php'; ?>

<script>
// Contact form handling
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    // Show loading state
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<svg class="w-5 h-5 animate-spin mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>';
    
    // Get form data
    const formData = new FormData(this);
    const data = Object.fromEntries(formData);
    
    // Simulate form submission (replace with actual EmailJS or server-side handling)
    setTimeout(() => {
        // Show success message
        showNotification('Message sent successfully! We\'ll get back to you soon.', 'success');
        
        // Reset form
        this.reset();
        
        // Reset button
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
    }, 2000);
});

// FAQ toggle functionality
function toggleFAQ(button) {
    const faqItem = button.closest('.faq-item');
    const answer = faqItem.querySelector('.faq-answer');
    const icon = button.querySelector('svg');
    
    // Close all other FAQ items
    document.querySelectorAll('.faq-item').forEach(item => {
        if (item !== faqItem) {
            item.querySelector('.faq-answer').classList.add('hidden');
            item.querySelector('svg').classList.remove('rotate-180');
        }
    });
    
    // Toggle current FAQ item
    answer.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
}

// Directions functionality
function getDirections() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            const userLat = position.coords.latitude;
            const userLng = position.coords.longitude;
            const restaurantAddress = encodeURIComponent("<?php echo RESTAURANT_ADDRESS; ?>");
            const directionsUrl = `https://www.google.com/maps/dir/${userLat},${userLng}/${restaurantAddress}`;
            window.open(directionsUrl, '_blank');
        }, function(error) {
            // Fallback to just opening the restaurant location
            const restaurantAddress = encodeURIComponent("<?php echo RESTAURANT_ADDRESS; ?>");
            const mapsUrl = `https://www.google.com/maps/search/${restaurantAddress}`;
            window.open(mapsUrl, '_blank');
        });
    } else {
        // Geolocation not supported, open restaurant location
        const restaurantAddress = encodeURIComponent("<?php echo RESTAURANT_ADDRESS; ?>");
        const mapsUrl = `https://www.google.com/maps/search/${restaurantAddress}`;
        window.open(mapsUrl, '_blank');
    }
}

// Notification function
function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg max-w-sm transition-all duration-300 transform translate-x-full ${
        type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
    }`;
    notification.innerHTML = `
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                ${type === 'success' 
                    ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>'
                    : '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>'
                }
            </svg>
            <span>${message}</span>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // Slide in
    setTimeout(() => notification.classList.remove('translate-x-full'), 100);
    
    // Slide out and remove
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => notification.remove(), 300);
    }, 5000);
}
</script>