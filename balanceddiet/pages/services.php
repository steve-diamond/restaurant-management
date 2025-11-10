<?php
// Include configuration
require_once '../core/config.php';

// Page-specific variables
$page_title = "Our Services";
$page_description = "Discover our comprehensive services including dine-in experiences, event catering, takeaway orders, and private venue hire for special occasions.";

// Include header
include '../core/includes/header.php';
?>

<!-- Main Content -->
<main id="main-content" class="pt-16 lg:pt-20">

  <!-- HERO SECTION -->
  <section class="relative py-20 bg-gradient-to-br from-african-600 to-african-800 text-white overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute inset-0" style="background-image: url('data:image/svg+xml;charset=utf-8,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h1 class="text-4xl lg:text-6xl font-display font-bold mb-6">Our Services</h1>
      <p class="text-xl lg:text-2xl text-orange-100 max-w-3xl mx-auto leading-relaxed">
        From intimate dining to grand celebrations, we bring authentic African flavors to every occasion
      </p>
    </div>
  </section>

  <!-- DINE-IN EXPERIENCE -->
  <section id="dining" class="py-20 bg-gradient-to-br from-neutral-50 to-orange-50/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        
        <!-- Content -->
        <div class="animate-fade-in">
          <div class="mb-6">
            <span class="inline-block w-16 h-16 bg-african-600 rounded-2xl flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
              </svg>
            </span>
            <h2 class="text-4xl lg:text-5xl font-display font-bold text-neutral-900 mb-4">Dine-In Experience</h2>
            <p class="text-xl text-neutral-600 leading-relaxed">
              Immerse yourself in the warmth of African hospitality in our beautifully designed restaurant space.
            </p>
          </div>

          <div class="space-y-6 mb-8">
            <div class="flex items-start space-x-4">
              <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-neutral-900 mb-2">Authentic African Atmosphere</h3>
                <p class="text-neutral-600">Decorated with traditional African art and music to enhance your dining experience</p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-neutral-900 mb-2">Expert Service</h3>
                <p class="text-neutral-600">Our knowledgeable staff will guide you through our menu and cultural traditions</p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-neutral-900 mb-2">Fresh, Made-to-Order</h3>
                <p class="text-neutral-600">Every dish is prepared fresh using authentic recipes and premium ingredients</p>
              </div>
            </div>
          </div>

          <div class="flex flex-col sm:flex-row gap-4">
            <button onclick="openBookingModal()" 
                    class="bg-gradient-to-r from-african-500 to-african-600 hover:from-african-600 hover:to-african-700 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
              Reserve Your Table
            </button>
            <a href="menu.php" 
               class="border-2 border-african-600 text-african-600 hover:bg-african-600 hover:text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 text-center focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
              View Our Menu
            </a>
          </div>
        </div>

        <!-- Image -->
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1559847844-d721426d6edc?q=80&w=1200&auto=format&fit=crop" 
               alt="Restaurant Interior" 
               class="w-full h-96 lg:h-[500px] object-cover rounded-3xl shadow-2xl">
          <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-3xl"></div>
        </div>

      </div>
    </div>
  </section>

  <!-- EVENT CATERING -->
  <section id="catering" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        
        <!-- Image -->
        <div class="relative lg:order-1 order-2">
          <img src="https://images.unsplash.com/photo-1555244162-803834f70033?q=80&w=1200&auto=format&fit=crop" 
               alt="Event Catering" 
               class="w-full h-96 lg:h-[500px] object-cover rounded-3xl shadow-2xl">
          <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-3xl"></div>
          <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full">
            <span class="text-african-600 font-semibold">Professional Catering</span>
          </div>
        </div>

        <!-- Content -->
        <div class="animate-fade-in lg:order-2 order-1">
          <div class="mb-6">
            <span class="inline-block w-16 h-16 bg-african-600 rounded-2xl flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
              </svg>
            </span>
            <h2 class="text-4xl lg:text-5xl font-display font-bold text-neutral-900 mb-4">Event Catering</h2>
            <p class="text-xl text-neutral-600 leading-relaxed">
              Bring the taste of Africa to your special events with our professional catering services.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            
            <!-- Corporate Events -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-2xl">
              <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mb-4">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
              </div>
              <h3 class="text-lg font-bold text-neutral-900 mb-2">Corporate Events</h3>
              <p class="text-sm text-neutral-600">Professional catering for business meetings, conferences, and corporate functions</p>
            </div>

            <!-- Weddings -->
            <div class="bg-gradient-to-br from-pink-50 to-pink-100 p-6 rounded-2xl">
              <div class="w-12 h-12 bg-pink-600 rounded-xl flex items-center justify-center mb-4">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
              </div>
              <h3 class="text-lg font-bold text-neutral-900 mb-2">Weddings</h3>
              <p class="text-sm text-neutral-600">Make your special day unforgettable with authentic African cuisine and presentation</p>
            </div>

            <!-- Private Parties -->
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-2xl">
              <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center mb-4">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
              </div>
              <h3 class="text-lg font-bold text-neutral-900 mb-2">Private Parties</h3>
              <p class="text-sm text-neutral-600">Birthdays, anniversaries, and celebrations with customized African menus</p>
            </div>

            <!-- Community Events -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-2xl">
              <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center mb-4">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                </svg>
              </div>
              <h3 class="text-lg font-bold text-neutral-900 mb-2">Community Events</h3>
              <p class="text-sm text-neutral-600">Cultural festivals, fundraisers, and community gatherings with authentic flavors</p>
            </div>

          </div>

          <div class="bg-african-50 border border-african-200 rounded-2xl p-6 mb-8">
            <h4 class="text-lg font-semibold text-african-800 mb-3">What's Included:</h4>
            <ul class="space-y-2 text-african-700">
              <li class="flex items-center space-x-2">
                <svg class="w-4 h-4 text-african-600" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Custom menu planning and tasting sessions</span>
              </li>
              <li class="flex items-center space-x-2">
                <svg class="w-4 h-4 text-african-600" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Professional setup and presentation</span>
              </li>
              <li class="flex items-center space-x-2">
                <svg class="w-4 h-4 text-african-600" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Experienced serving staff available</span>
              </li>
              <li class="flex items-center space-x-2">
                <svg class="w-4 h-4 text-african-600" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Full cleanup and equipment removal</span>
              </li>
            </ul>
          </div>

          <a href="contact.php" 
             class="bg-gradient-to-r from-african-500 to-african-600 hover:from-african-600 hover:to-african-700 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2 inline-block">
            Get Catering Quote
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- TAKEAWAY & DELIVERY -->
  <section id="takeaway" class="py-20 bg-gradient-to-br from-neutral-50 to-orange-50/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        
        <!-- Content -->
        <div class="animate-fade-in">
          <div class="mb-6">
            <span class="inline-block w-16 h-16 bg-african-600 rounded-2xl flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l-1 12H6L5 9z"></path>
              </svg>
            </span>
            <h2 class="text-4xl lg:text-5xl font-display font-bold text-neutral-900 mb-4">Takeaway & Delivery</h2>
            <p class="text-xl text-neutral-600 leading-relaxed">
              Enjoy our authentic African cuisine from the comfort of your home with our takeaway and delivery services.
            </p>
          </div>

          <div class="space-y-8 mb-8">
            
            <!-- Takeaway -->
            <div class="flex items-start space-x-6">
              <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l-1 12H6L5 9z"></path>
                </svg>
              </div>
              <div>
                <h3 class="text-2xl font-bold text-neutral-900 mb-3">Takeaway Orders</h3>
                <p class="text-neutral-600 leading-relaxed mb-4">
                  Call ahead or order online for quick pickup. All meals are freshly prepared and carefully packaged to maintain quality and temperature.
                </p>
                <ul class="space-y-2 text-sm text-neutral-600">
                  <li class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Ready in 15-25 minutes</span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Eco-friendly packaging</span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Special dietary accommodations</span>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Delivery -->
            <div class="flex items-start space-x-6">
              <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
              </div>
              <div>
                <h3 class="text-2xl font-bold text-neutral-900 mb-3">Home Delivery</h3>
                <p class="text-neutral-600 leading-relaxed mb-4">
                  We deliver within a 5-mile radius of our restaurant. Minimum order applies for delivery service.
                </p>
                <ul class="space-y-2 text-sm text-neutral-600">
                  <li class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Delivery within 30-45 minutes</span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>£3.50 delivery fee (free over £25)</span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Real-time order tracking</span>
                  </li>
                </ul>
              </div>
            </div>

          </div>

          <div class="flex flex-col sm:flex-row gap-4">
            <a href="tel:<?php echo SITE_PHONE; ?>" 
               class="bg-gradient-to-r from-african-500 to-african-600 hover:from-african-600 hover:to-african-700 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2 text-center">
              Call to Order: <?php echo SITE_PHONE; ?>
            </a>
            <a href="menu.php" 
               class="border-2 border-african-600 text-african-600 hover:bg-african-600 hover:text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 text-center focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
              Browse Menu
            </a>
          </div>
        </div>

        <!-- Image -->
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?q=80&w=1200&auto=format&fit=crop" 
               alt="Takeaway Food" 
               class="w-full h-96 lg:h-[500px] object-cover rounded-3xl shadow-2xl">
          <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-3xl"></div>
        </div>

      </div>
    </div>
  </section>

  <!-- PRIVATE EVENTS -->
  <section id="private" class="py-20 bg-gradient-to-br from-neutral-900 to-african-900 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><g fill=\"%23ffffff\" fill-opacity=\"0.1\"><path d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/></g></g></svg>');"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <span class="inline-block w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </span>
        <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">Private Events & Venue Hire</h2>
        <p class="text-xl text-orange-100 max-w-3xl mx-auto leading-relaxed">
          Transform our restaurant into your exclusive venue for unforgettable celebrations
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
        
        <!-- Exclusive Venue -->
        <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/10">
          <div class="w-16 h-16 bg-african-600 rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-white mb-4">Exclusive Venue Hire</h3>
          <p class="text-orange-100 mb-6">Book our entire restaurant for your special occasion with complete privacy and personalized service.</p>
          <ul class="space-y-3 text-sm text-orange-200">
            <li class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-african-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>Capacity: Up to 80 guests</span>
            </li>
            <li class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-african-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>Full bar service available</span>
            </li>
            <li class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-african-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>Custom decoration allowed</span>
            </li>
          </ul>
        </div>

        <!-- Cultural Events -->
        <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/10">
          <div class="w-16 h-16 bg-african-600 rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-white mb-4">Cultural Celebrations</h3>
          <p class="text-orange-100 mb-6">Celebrate African heritage and traditions with authentic ceremonies, music, and cultural presentations.</p>
          <ul class="space-y-3 text-sm text-orange-200">
            <li class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-african-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>Traditional music arrangements</span>
            </li>
            <li class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-african-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>Cultural ceremony coordination</span>
            </li>
            <li class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-african-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>Traditional attire recommendations</span>
            </li>
          </ul>
        </div>

        <!-- Business Functions -->
        <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/10">
          <div class="w-16 h-16 bg-african-600 rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-white mb-4">Business Functions</h3>
          <p class="text-orange-100 mb-6">Host memorable corporate events, team building activities, and business dinners in our unique setting.</p>
          <ul class="space-y-3 text-sm text-orange-200">
            <li class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-african-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>AV equipment available</span>
            </li>
            <li class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-african-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>Professional meeting setup</span>
            </li>
            <li class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-african-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span>Corporate packages available</span>
            </li>
          </ul>
        </div>

      </div>

      <div class="text-center">
        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 max-w-2xl mx-auto mb-8">
          <h3 class="text-2xl font-bold text-white mb-4">Planning Your Event?</h3>
          <p class="text-orange-100 mb-6">
            Contact our events team to discuss your requirements and create a memorable African dining experience for your guests.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="contact.php" 
               class="bg-white text-african-600 px-8 py-4 rounded-full font-bold text-lg hover:bg-neutral-100 transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-african-600">
              Plan Your Event
            </a>
            <a href="tel:<?php echo SITE_PHONE; ?>" 
               class="border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-african-600 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-african-600">
              Call <?php echo SITE_PHONE; ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA SECTION -->
  <section class="py-20 bg-gradient-to-r from-african-600 to-african-700 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">Ready to Experience Our Services?</h2>
      <p class="text-xl text-orange-100 mb-10 leading-relaxed">
        From intimate dining to grand celebrations, we're here to make your African culinary dreams come true.
      </p>
      
      <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <button onclick="openBookingModal()" 
                class="bg-white text-african-600 px-10 py-4 rounded-full font-bold text-lg hover:bg-neutral-100 transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-african-600">
          Make a Reservation
        </button>
        <a href="contact.php" 
           class="border-2 border-white text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-african-600 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-african-600">
          Get in Touch
        </a>
      </div>
    </div>
  </section>

</main>

<?php include '../core/includes/footer.php'; ?>