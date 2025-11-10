<?php
// Include configuration
require_once 'core/config.php';

// Page-specific variables
$page_title = "Home";
$page_description = "Experience authentic African flavors at Balanced Diet Cottage. Premium Nigerian, Ghanaian & Cameroonian cuisine, professional catering services, and cultural dining experiences in the heart of the UK.";

// Include header
include 'core/includes/header.php';
?>

<!-- Main Content -->
<main id="main-content" class="pt-16 lg:pt-20">

  <!-- HERO SECTION -->
  <section class="relative min-h-screen flex items-center justify-center overflow-hidden hero-bg" 
           style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(245, 147, 50, 0.3)), url('assets/images/hero/african-food-hero.jpg');">
    
    <!-- Floating Elements -->
    <div class="absolute inset-0 pointer-events-none">
      <div class="floating absolute top-20 left-10 w-4 h-4 bg-yellow-400 rounded-full opacity-70"></div>
      <div class="floating absolute top-40 right-20 w-6 h-6 bg-green-400 rounded-full opacity-60"></div>
      <div class="floating absolute bottom-32 left-20 w-5 h-5 bg-red-400 rounded-full opacity-50"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="animate-slide-up">
        <!-- Brand Identity Badge -->
        <div class="inline-flex items-center bg-white/10 backdrop-blur-sm text-white px-6 py-3 rounded-full text-sm font-bold mb-8 border border-white/20">
          <svg class="w-5 h-5 mr-3 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          Premium African Heritage Restaurant • Est. 2019
        </div>

        <!-- Main Heading -->
        <h1 class="text-4xl sm:text-6xl lg:text-8xl font-display font-bold text-white mb-8 drop-shadow-xl">
          <span class="block text-xl sm:text-2xl lg:text-3xl font-normal text-orange-200 mb-3 tracking-wide">AUTHENTIC TASTE OF</span>
          <span class="gradient-text bg-gradient-to-r from-yellow-400 via-orange-400 to-red-400 bg-clip-text text-transparent leading-tight">
            <?php echo SITE_NAME; ?>
          </span>
          <span class="block text-base sm:text-lg lg:text-xl font-medium text-orange-100 mt-4 tracking-widest uppercase border-t border-white/30 pt-4">"Where Tradition Meets Excellence"</span>
        </h1>
        
        <!-- Enhanced Subtitle with Mission Statement -->
        <div class="max-w-5xl mx-auto mb-8">
          <p class="text-lg sm:text-xl lg:text-2xl text-neutral-200 mb-6 leading-relaxed drop-shadow-lg font-medium">
            Experience the <span class="text-yellow-400 font-bold">authentic soul of Africa</span> through our carefully curated culinary masterpieces. 
            We are the UK's premier destination for traditional recipes, lovingly prepared by master chefs and passed down through generations.
          </p>
          
          <!-- Country Heritage Showcase -->
          <div class="flex flex-wrap justify-center gap-4 mb-6">
            <div class="group bg-gradient-to-br from-green-600 to-green-700 px-6 py-3 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
              <div class="flex items-center text-white">
                <span class="text-2xl mr-3">🇳🇬</span>
                <div>
                  <div class="font-bold text-lg">Nigeria</div>
                  <div class="text-sm opacity-90">Jollof • Pepper Soup • Suya</div>
                </div>
              </div>
            </div>
            
            <div class="group bg-gradient-to-br from-yellow-500 to-yellow-600 px-6 py-3 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
              <div class="flex items-center text-white">
                <span class="text-2xl mr-3">🇬🇭</span>
                <div>
                  <div class="font-bold text-lg">Ghana</div>
                  <div class="text-sm opacity-90">Banku • Kelewele • Fufu</div>
                </div>
              </div>
            </div>
            
            <div class="group bg-gradient-to-br from-red-600 to-red-700 px-6 py-3 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
              <div class="flex items-center text-white">
                <span class="text-2xl mr-3">🇨🇲</span>
                <div>
                  <div class="font-bold text-lg">Cameroon</div>
                  <div class="text-sm opacity-90">Ndole • Poulet DG • Koki</div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Value Proposition -->
          <p class="text-base sm:text-lg text-orange-100 italic border-l-4 border-yellow-400 pl-6 bg-black/20 py-4 rounded-r-lg">
            "More than a restaurant - we're cultural ambassadors bringing the warmth, hospitality, and rich flavors of Africa to your table."
          </p>
        </div>

        <!-- Professional CTA Section -->
        <div class="flex flex-col lg:flex-row gap-6 justify-center items-center mb-16">
          <!-- Primary CTA - Explore Menu -->
          <a href="pages/menu.php" 
             class="group relative bg-gradient-to-r from-african-500 via-african-600 to-african-700 hover:from-african-600 hover:via-african-700 hover:to-african-800 text-white px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-500 shadow-2xl hover:shadow-african-500/50 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-african-500/50 focus:ring-offset-2 min-w-64">
            <div class="flex items-center justify-center">
              <svg class="w-6 h-6 mr-3 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
              </svg>
              Explore Our Authentic Menu
            </div>
            <div class="absolute inset-0 rounded-2xl bg-white/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
          </a>
          
          <!-- Secondary CTA - Reserve Table -->
          <button onclick="openBookingModal()" 
                  class="group relative bg-white/10 backdrop-blur-md border-2 border-white/40 text-white px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-500 hover:bg-white/20 hover:border-white/60 hover:backdrop-blur-lg transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-white/50 focus:ring-offset-2 focus:ring-offset-transparent min-w-64">
            <div class="flex items-center justify-center">
              <svg class="w-6 h-6 mr-3 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
              Reserve Your Experience
            </div>
            <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-yellow-400/20 to-orange-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
          </button>
          
          <!-- Contact CTA -->
          <a href="tel:<?php echo SITE_PHONE; ?>" 
             class="group bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white px-8 py-5 rounded-2xl font-bold text-lg transition-all duration-500 shadow-xl hover:shadow-yellow-500/50 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-yellow-500/50 focus:ring-offset-2">
            <div class="flex items-center justify-center">
              <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
              </svg>
              Call Now
            </div>
          </a>
        </div>

        <!-- Professional Brand Promise -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-w-7xl mx-auto text-white mt-12">
          <!-- Heritage Excellence -->
          <div class="group relative bg-gradient-to-br from-white/15 to-white/5 backdrop-blur-md rounded-3xl p-8 hover:bg-white/20 transition-all duration-500 transform hover:-translate-y-2 border border-white/20 hover:border-white/40">
            <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-yellow-400/20 to-orange-500/20 rounded-full -translate-y-6 translate-x-6"></div>
            <div class="relative">
              <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-xl">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                </svg>
              </div>
              <h3 class="font-bold text-xl mb-3 text-center">Heritage Excellence</h3>
              <p class="text-sm text-neutral-200 leading-relaxed text-center">5+ generations of culinary mastery, authentic recipes from grandmother's kitchen to your table</p>
            </div>
          </div>
          
          <!-- Premium Sourcing -->
          <div class="group relative bg-gradient-to-br from-white/15 to-white/5 backdrop-blur-md rounded-3xl p-8 hover:bg-white/20 transition-all duration-500 transform hover:-translate-y-2 border border-white/20 hover:border-white/40">
            <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-green-400/20 to-emerald-500/20 rounded-full -translate-y-6 translate-x-6"></div>
            <div class="relative">
              <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-xl">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                </svg>
              </div>
              <h3 class="font-bold text-xl mb-3 text-center">Premium Sourcing</h3>
              <p class="text-sm text-neutral-200 leading-relaxed text-center">Hand-picked ingredients from trusted African suppliers, ensuring authenticity in every bite</p>
            </div>
          </div>
          
          <!-- Master Chefs -->
          <div class="group relative bg-gradient-to-br from-white/15 to-white/5 backdrop-blur-md rounded-3xl p-8 hover:bg-white/20 transition-all duration-500 transform hover:-translate-y-2 border border-white/20 hover:border-white/40">
            <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-red-400/20 to-rose-500/20 rounded-full -translate-y-6 translate-x-6"></div>
            <div class="relative">
              <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-rose-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-xl">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                </svg>
              </div>
              <h3 class="font-bold text-xl mb-3 text-center">Master Chefs</h3>
              <p class="text-sm text-neutral-200 leading-relaxed text-center">Award-winning chefs trained in traditional African culinary arts, bringing expertise to every dish</p>
            </div>
          </div>
          
          <!-- Cultural Ambassador -->
          <div class="group relative bg-gradient-to-br from-white/15 to-white/5 backdrop-blur-md rounded-3xl p-8 hover:bg-white/20 transition-all duration-500 transform hover:-translate-y-2 border border-white/20 hover:border-white/40">
            <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-blue-400/20 to-indigo-500/20 rounded-full -translate-y-6 translate-x-6"></div>
            <div class="relative">
              <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-xl">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
              </div>
              <h3 class="font-bold text-xl mb-3 text-center">Cultural Bridge</h3>
              <p class="text-sm text-neutral-200 leading-relaxed text-center">Connecting communities through food, sharing African warmth and hospitality with the UK</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
      <div class="w-6 h-10 border-2 border-white/50 rounded-full flex justify-center">
        <div class="w-1 h-3 bg-white/70 rounded-full mt-2 animate-pulse"></div>
      </div>
    </div>
  </section>

  <!-- CHEF'S SPECIAL SECTION -->
  <section class="py-20 bg-gradient-to-br from-neutral-50 to-orange-50/30 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
      <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=%2260%22 height=%2260%22 viewBox=%220 0 60 60%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%23f59332%22 fill-opacity=%220.1%22%3E%3Cpath d=%22M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <div class="inline-flex items-center bg-african-100 text-african-800 px-
        4 py-2 rounded-full text-sm font-semibold mb-4">
          <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          Chef's Signature Creation
        </div>
        <h2 class="text-4xl lg:text-5xl font-display font-bold gradient-text mb-4">Today's Featured Masterpiece</h2>
        <p class="text-xl text-neutral-600 max-w-3xl mx-auto">Expertly crafted by our head chef using time-honored techniques and the finest African spices, each dish tells a story of cultural heritage and culinary excellence.</p>
      </div>

      <div class="max-w-4xl mx-auto">
        <div id="chef-special-card" class="bg-white rounded-3xl shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-500">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 p-8">
            
            <!-- Image -->
            <div class="relative">
              <img src="assets/images/gallery/jollof-rice.jpg" 
                   alt="Chef's Special" 
                   class="w-full h-64 lg:h-80 object-cover rounded-2xl shadow-lg">
              <div class="absolute top-4 left-4 bg-african-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                Today's Special
              </div>
            </div>

            <!-- Content -->
            <div class="flex flex-col justify-center">
              <div class="flex items-center mb-4">
                <span class="text-xs uppercase tracking-wider text-african-600 font-semibold bg-african-50 px-3 py-1 rounded-full">🇳🇬 Nigerian Cuisine</span>
                <span class="ml-3 text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Limited Time</span>
              </div>
              <h4 class="text-2xl lg:text-3xl font-display font-bold text-neutral-900 mb-4">Jollof Rice Royale</h4>
              <p class="text-neutral-600 leading-relaxed mb-4">A magnificent celebration of Nigerian heritage - premium aromatic jollof rice masterfully prepared with succulent jumbo prawns, tender free-range chicken, and our secret blend of traditional spices. Served with plantain and fresh salad.</p>
              
              <!-- Features -->
              <div class="grid grid-cols-2 gap-3 mb-6 text-sm">
                <div class="flex items-center text-neutral-600">
                  <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  Gluten-Free Option
                </div>
                <div class="flex items-center text-neutral-600">
                  <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  Halal Certified
                </div>
                <div class="flex items-center text-neutral-600">
                  <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  Serves 2 People
                </div>
                <div class="flex items-center text-neutral-600">
                  <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  Chef's Special
                </div>
              </div>
              
              <div class="flex items-center justify-between mb-6">
                <div>
                  <div class="text-3xl font-bold text-african-600">£24.99</div>
                  <div class="text-sm text-neutral-500 line-through">£28.99</div>
                </div>
                <div class="flex items-center space-x-2">
                  <div class="flex text-yellow-400">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                  </div>
                  <span class="text-sm text-neutral-500 font-medium">4.9 (127 reviews)</span>
                </div>
              </div>

              <div class="grid grid-cols-2 gap-3">
                <button onclick="openBookingModal()" 
                        class="bg-gradient-to-r from-african-500 to-african-600 hover:from-african-600 hover:to-african-700 text-white py-3 px-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
                  Reserve & Dine
                </button>
                <a href="menu.php" 
                   class="border-2 border-african-500 text-african-600 hover:bg-african-500 hover:text-white py-3 px-4 rounded-xl font-semibold text-center transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
                  Full Menu
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- QUICK MENU PREVIEW -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-20">
        <!-- Premium Brand Badge -->
        <div class="inline-flex items-center bg-gradient-to-r from-african-100 via-yellow-100 to-red-100 text-african-800 px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-xl border-2 border-african-200">
          <svg class="w-5 h-5 mr-3 text-african-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          UK's Premier African Heritage Restaurant Experience
        </div>
        
        <!-- Professional Heading -->
        <h2 class="text-5xl lg:text-7xl font-display font-bold text-neutral-900 mb-8 leading-tight">
          <span class="block text-2xl lg:text-3xl font-medium text-neutral-600 mb-4 tracking-wide uppercase">Discover The Authentic Flavors Of</span>
          <span class="gradient-text bg-gradient-to-r from-green-600 via-yellow-500 to-red-500 bg-clip-text text-transparent">Three Nations</span>
          <span class="block text-lg lg:text-xl font-normal text-neutral-500 mt-4 italic">Nigeria • Ghana • Cameroon</span>
        </h2>
        
        <!-- Enhanced Description -->
        <div class="max-w-5xl mx-auto mb-12">
          <p class="text-xl lg:text-2xl text-neutral-700 leading-relaxed mb-6 font-medium">
            Embark on an extraordinary <span class="text-african-600 font-bold">gastronomic journey</span> that celebrates centuries of West and Central African culinary mastery. 
            Each dish tells a story of <span class="text-african-600 font-bold">cultural heritage, family traditions,</span> and the vibrant spirit of our ancestral homelands.
          </p>
          
          <div class="bg-gradient-to-r from-african-50 to-yellow-50 rounded-2xl p-8 border-l-4 border-african-500">
            <p class="text-lg text-neutral-600 leading-relaxed italic">
              "We don't just serve food - we share stories, preserve traditions, and create bridges between cultures. 
              Every meal is a celebration of our rich African heritage, prepared with love and served with pride."
            </p>
            <div class="mt-4 text-right">
              <span class="text-african-600 font-semibold">- Chef Amara, Head of Culinary Excellence</span>
            </div>
          </div>
        </div>
        
        <!-- Professional Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
          <div class="text-center bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
            <div class="text-4xl font-bold text-green-600 mb-2">75+</div>
            <div class="text-sm text-neutral-600 font-medium uppercase tracking-wide">Traditional Recipes</div>
          </div>
          <div class="text-center bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
            <div class="text-4xl font-bold text-yellow-600 mb-2">3</div>
            <div class="text-sm text-neutral-600 font-medium uppercase tracking-wide">African Nations</div>
          </div>
          <div class="text-center bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
            <div class="text-4xl font-bold text-red-600 mb-2">15+</div>
            <div class="text-sm text-neutral-600 font-medium uppercase tracking-wide">Master Chefs</div>
          </div>
          <div class="text-center bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
            <div class="text-4xl font-bold text-african-600 mb-2">100%</div>
            <div class="text-sm text-neutral-600 font-medium uppercase tracking-wide">Authentic Guarantee</div>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Nigerian Cuisine -->
        <div class="group relative bg-gradient-to-br from-green-50 to-green-100 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="text-center">
            <div class="w-20 h-20 mx-auto mb-6 bg-green-500 rounded-2xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
              <span class="text-2xl">🇳🇬</span>
            </div>
            <h3 class="text-2xl font-display font-bold text-neutral-900 mb-4">Nigerian Delights</h3>
            <p class="text-neutral-600 mb-6">Experience the bold flavors of Nigeria with our signature jollof rice, pepper soup, and suya</p>
            <ul class="text-sm text-neutral-500 space-y-2 mb-6">
              <li>• Jollof Rice & Fried Rice</li>
              <li>• Pepper Soup & Egusi Soup</li>
              <li>• Suya & Kilishi</li>
              <li>• Pounded Yam & Fufu</li>
            </ul>
            <a href="menu.php#nigerian" class="inline-flex items-center text-green-600 hover:text-green-700 font-semibold">
              Explore Nigerian Menu
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>

        <!-- Ghanaian Cuisine -->
        <div class="group relative bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="text-center">
            <div class="w-20 h-20 mx-auto mb-6 bg-yellow-500 rounded-2xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
              <span class="text-2xl">🇬🇭</span>
            </div>
            <h3 class="text-2xl font-display font-bold text-neutral-900 mb-4">Ghanaian Classics</h3>
            <p class="text-neutral-600 mb-6">Savor the hearty and comforting dishes from Ghana, rich in tradition and flavor</p>
            <ul class="text-sm text-neutral-500 space-y-2 mb-6">
              <li>• Banku & Tilapia</li>
              <li>• Kelewele & Bofrot</li>
              <li>• Waakye & Red Red</li>
              <li>• Fufu & Light Soup</li>
            </ul>
            <a href="menu.php#ghanaian" class="inline-flex items-center text-yellow-600 hover:text-yellow-700 font-semibold">
              Explore Ghanaian Menu
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>

        <!-- Cameroonian Cuisine -->
        <div class="group relative bg-gradient-to-br from-red-50 to-red-100 rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
          <div class="text-center">
            <div class="w-20 h-20 mx-auto mb-6 bg-red-500 rounded-2xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
              <span class="text-2xl">🇨🇲</span>
            </div>
            <h3 class="text-2xl font-display font-bold text-neutral-900 mb-4">Cameroonian Favorites</h3>
            <p class="text-neutral-600 mb-6">Discover the unique and flavorful cuisine of Cameroon, a true culinary adventure</p>
            <ul class="text-sm text-neutral-500 space-y-2 mb-6">
              <li>• Ndole & Achu Soup</li>
              <li>• Jambo & Koki Beans</li>
              <li>• Poulet DG & Fish Stew</li>
              <li>• Plantain & Cassava</li>
            </ul>
            <a href="menu.php#cameroonian" class="inline-flex items-center text-red-600 hover:text-red-700 font-semibold">
              Explore Cameroonian Menu
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SERVICES PREVIEW -->
  <section class="py-20 bg-gradient-to-br from-neutral-900 to-african-900 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><g fill=\"%23ffffff\" fill-opacity=\"0.1\"><path d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/></g></g></svg>');"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <div class="inline-flex items-center bg-white/10 backdrop-blur-sm text-white px-6 py-3 rounded-full text-sm font-bold mb-6">
          <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
          </svg>
          Professional African Dining Services
        </div>
        <h2 class="text-4xl lg:text-5xl font-display font-bold text-white mb-6">
          Excellence in Every 
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-400">Experience</span>
        </h2>
        <p class="text-xl text-neutral-300 max-w-4xl mx-auto leading-relaxed">
          Whether you're seeking an intimate cultural dining experience or planning a grand celebration, we deliver exceptional service that honors African hospitality traditions while exceeding modern expectations.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        
        <!-- Dine-In -->
        <div class="group relative bg-white/10 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/20 transition-all duration-500 transform hover:-translate-y-2">
          <div class="text-center">
            <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-xl">
              <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
              </svg>
            </div>
            <h3 class="text-2xl font-display font-bold text-white mb-4">Premium Dine-In</h3>
            <p class="text-neutral-200 leading-relaxed mb-6">Immerse yourself in authentic African hospitality with our curated dining experience featuring traditional music and cultural ambiance</p>
            <div class="inline-flex items-center text-yellow-300 font-semibold">
              <span class="w-2 h-2 bg-yellow-400 rounded-full mr-2"></span>
              Reservation Recommended
            </div>
          </div>
        </div>

        <!-- Catering -->
        <div class="group relative bg-white/10 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/20 transition-all duration-500 transform hover:-translate-y-2">
          <div class="text-center">
            <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-xl">
              <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
              </svg>
            </div>
            <h3 class="text-2xl font-display font-bold text-white mb-4">Event Catering</h3>
            <p class="text-neutral-200 leading-relaxed mb-6">Professional catering services for weddings, corporate events, and celebrations with authentic African cuisine and exceptional presentation</p>
            <div class="inline-flex items-center text-green-300 font-semibold">
              <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
              Custom Menu Available
            </div>
          </div>
        </div>

        <!-- Takeaway -->
        <div class="group relative bg-white/10 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/20 transition-all duration-500 transform hover:-translate-y-2">
          <div class="text-center">
            <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-2xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-xl">
              <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l-1 12H6L5 9z"></path>
              </svg>
            </div>
            <h3 class="text-2xl font-display font-bold text-white mb-4">Takeaway Orders</h3>
            <p class="text-neutral-200 leading-relaxed mb-6">Enjoy our signature dishes from home with carefully packaged meals that preserve authentic flavors and traditional presentation</p>
            <div class="inline-flex items-center text-blue-300 font-semibold">
              <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
              Quick Order Available
            </div>
          </div>
        </div>

        <!-- Private Events -->
        <div class="group relative bg-white/10 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/20 transition-all duration-500 transform hover:-translate-y-2">
          <div class="text-center">
            <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-purple-400 to-pink-500 rounded-2xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-xl">
              <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
              </svg>
            </div>
            <h3 class="text-2xl font-display font-bold text-white mb-4">Private Events</h3>
            <p class="text-neutral-200 leading-relaxed mb-6">Exclusive venue hire for intimate celebrations with personalized service, custom décor, and bespoke African cultural experiences</p>
            <div class="inline-flex items-center text-purple-300 font-semibold">
              <span class="w-2 h-2 bg-purple-400 rounded-full mr-2"></span>
              Full Venue Available
            </div>
          </div>
        </div>

      </div>

      <!-- CTA -->
      <div class="text-center mt-12">
        <a href="services.php" 
           class="inline-flex items-center bg-white text-african-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-neutral-100 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-african-600">
          View All Services
          <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>

  <!-- BRAND STORY SECTION -->
  <section class="py-20 bg-gradient-to-br from-african-900 via-neutral-900 to-african-800 text-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 opacity-5">
      <div class="absolute top-0 left-0 w-64 h-64 bg-yellow-500 rounded-full -translate-x-32 -translate-y-32"></div>
      <div class="absolute bottom-0 right-0 w-96 h-96 bg-red-500 rounded-full translate-x-48 translate-y-48"></div>
      <div class="absolute top-1/2 left-1/2 w-32 h-32 bg-green-500 rounded-full -translate-x-16 -translate-y-16"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        
        <!-- Content -->
        <div>
          <div class="inline-flex items-center bg-white/10 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-semibold mb-6">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
            </svg>
            Our Heritage & Mission
          </div>
          
          <h2 class="text-4xl lg:text-5xl font-display font-bold mb-8">
            <span class="gradient-text bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent">Preserving Traditions,</span>
            <br>Creating Connections
          </h2>
          
          <div class="space-y-6 text-lg text-neutral-300 leading-relaxed">
            <p>
              <strong class="text-white">Founded with passion and purpose</strong>, Balanced Diet Cottage represents more than just a restaurant—we are cultural ambassadors, bridging continents through the universal language of food.
            </p>
            
            <p>
              Our journey began with a simple belief: that authentic African cuisine deserves to be celebrated on the global stage. Each recipe in our kitchen has been carefully preserved, passed down through generations of skilled cooks who understood that food is memory, culture, and love served on a plate.
            </p>
            
            <p>
              <strong class="text-yellow-400">From Lagos to London</strong>, <strong class="text-green-400">Accra to your table</strong>, <strong class="text-red-400">Yaoundé to your heart</strong> — we bring you an uncompromising commitment to authenticity, quality, and the warm hospitality that defines African culture.
            </p>
          </div>
          
          <div class="grid grid-cols-2 gap-8 mt-10">
            <div class="text-center">
              <div class="text-3xl font-bold text-yellow-400 mb-2">Heritage</div>
              <p class="text-sm text-neutral-400">Authentic recipes from our ancestral homeland</p>
            </div>
            <div class="text-center">
              <div class="text-3xl font-bold text-green-400 mb-2">Quality</div>
              <p class="text-sm text-neutral-400">Premium ingredients, traditional methods</p>
            </div>
            <div class="text-center">
              <div class="text-3xl font-bold text-red-400 mb-2">Community</div>
              <p class="text-sm text-neutral-400">Bringing people together through food</p>
            </div>
            <div class="text-center">
              <div class="text-3xl font-bold text-orange-400 mb-2">Excellence</div>
              <p class="text-sm text-neutral-400">Exceeding expectations, every single time</p>
            </div>
          </div>
        </div>

        <!-- Visual Elements -->
        <div class="relative">
          <div class="grid grid-cols-2 gap-6">
            <div class="space-y-6">
              <img src="assets/images/about/chef-portrait.jpg" 
                   alt="African cuisine preparation" 
                   class="w-full h-48 object-cover rounded-2xl shadow-2xl transform rotate-2 hover:rotate-0 transition-transform duration-500">
              <img src="assets/images/gallery/jollof-rice.jpg" 
                   alt="Traditional African spices" 
                   class="w-full h-32 object-cover rounded-2xl shadow-2xl transform -rotate-2 hover:rotate-0 transition-transform duration-500">
            </div>
            <div class="space-y-6 mt-8">
              <img src="assets/images/gallery/african-stew.jpg" 
                   alt="Restaurant ambiance" 
                   class="w-full h-32 object-cover rounded-2xl shadow-2xl transform rotate-1 hover:rotate-0 transition-transform duration-500">
              <img src="assets/images/gallery/grilled-meat.jpg" 
                   alt="Chef at work" 
                   class="w-full h-48 object-cover rounded-2xl shadow-2xl transform -rotate-1 hover:rotate-0 transition-transform duration-500">
            </div>
          </div>
          
          <!-- Floating Badge -->
          <div class="absolute -top-4 -right-4 bg-gradient-to-r from-yellow-500 to-orange-500 text-white p-4 rounded-2xl shadow-2xl transform rotate-12 hover:rotate-0 transition-transform duration-300">
            <div class="text-center">
              <div class="text-xs font-semibold">Est. 2018</div>
              <div class="text-lg font-bold">5+ Years</div>
              <div class="text-xs">of Excellence</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- TESTIMONIALS SECTION -->
  <section class="py-20 bg-gradient-to-br from-orange-50 to-neutral-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <div class="inline-flex items-center bg-gradient-to-r from-orange-100 to-red-100 text-orange-800 px-6 py-3 rounded-full text-sm font-bold mb-6">
          <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
          </svg>
          Trusted by Thousands of Happy Guests
        </div>
        <h2 class="text-4xl lg:text-5xl font-display font-bold text-neutral-900 mb-6">
          Voices of Our 
          <span class="gradient-text bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">Community</span>
        </h2>
        <p class="text-xl text-neutral-600 max-w-3xl mx-auto leading-relaxed">
          Don't just take our word for it - hear from our cherished guests who have experienced the warmth of African hospitality and the authenticity of our traditional cuisine.
        </p>
        
        <!-- Trust indicators -->
        <div class="flex justify-center items-center space-x-8 mt-8 text-sm text-neutral-500">
          <div class="flex items-center">
            <div class="flex text-yellow-400 mr-2">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
            </div>
            <span class="font-semibold">4.9/5 Average Rating</span>
          </div>
          <div>•</div>
          <div class="font-semibold">500+ Reviews</div>
          <div>•</div>
          <div class="font-semibold">95% Return Rate</div>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Testimonial 1 -->
        <div class="group relative bg-white p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-neutral-100">
          <div class="absolute -top-4 -right-4 w-12 h-12 bg-gradient-to-br from-orange-400 to-red-500 rounded-2xl flex items-center justify-center text-white font-bold text-lg transform rotate-12 group-hover:rotate-0 transition-transform duration-300">
            "
          </div>
          
          <div class="flex items-center mb-6">
            <div class="flex text-yellow-400 mr-3">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
            </div>
            <span class="text-sm text-neutral-500 font-medium">Exceptional Experience</span>
          </div>
          
          <p class="text-neutral-700 leading-relaxed mb-8 text-lg italic">
            "This place is absolutely magical! The jollof rice transported me straight back to my grandmother's kitchen in Lagos. The authentic spices, the perfect texture, and that smoky flavor—it's exactly how I remember it. The staff made me feel like family!"
          </p>
          
          <div class="flex items-center">
            <div class="w-14 h-14 bg-gradient-to-br from-orange-400 to-red-500 rounded-2xl flex items-center justify-center text-white font-bold text-lg mr-4">
              A
            </div>
            <div>
              <div class="font-bold text-neutral-900">Adunni Okafor</div>
              <div class="text-sm text-neutral-500">Lagos, Nigeria • Regular Guest</div>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="group relative bg-white p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-neutral-100">
          <div class="absolute -top-4 -right-4 w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl flex items-center justify-center text-white font-bold text-lg transform rotate-12 group-hover:rotate-0 transition-transform duration-300">
            "
          </div>
          
          <div class="flex items-center mb-6">
            <div class="flex text-yellow-400 mr-3">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
            </div>
            <span class="text-sm text-neutral-500 font-medium">Outstanding Service</span>
          </div>
          
          <p class="text-neutral-700 leading-relaxed mb-8 text-lg italic">
            "We hosted our anniversary dinner here and it was beyond perfect! The Ghanaian banku was incredible, and the team accommodated all our dietary needs beautifully. The cultural atmosphere made our celebration truly special."
          </p>
          
          <div class="flex items-center">
            <div class="w-14 h-14 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl flex items-center justify-center text-white font-bold text-lg mr-4">
              K
            </div>
            <div>
              <div class="font-bold text-neutral-900">Kwame & Sarah Johnson</div>
              <div class="text-sm text-neutral-500">Manchester, UK • Anniversary Celebration</div>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="group relative bg-white p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-neutral-100">
          <div class="absolute -top-4 -right-4 w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl flex items-center justify-center text-white font-bold text-lg transform rotate-12 group-hover:rotate-0 transition-transform duration-300">
            "
          </div>
          
          <div class="flex items-center mb-6">
            <div class="flex text-yellow-400 mr-3">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
            </div>
            <span class="text-sm text-neutral-500 font-medium">Culinary Excellence</span>
          </div>
          
          <p class="text-neutral-700 leading-relaxed mb-8 text-lg italic">
            "As a food blogger, I'm quite picky, but this place absolutely blew me away! The Cameroonian ndole was expertly prepared with perfect balance of flavors. The attention to authenticity while maintaining modern presentation standards is remarkable."
          </p>
          
          <div class="flex items-center">
            <div class="w-14 h-14 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl flex items-center justify-center text-white font-bold text-lg mr-4">
              M
            </div>
            <div>
              <div class="font-bold text-neutral-900">Marcus Thompson</div>
              <div class="text-sm text-neutral-500">London, UK • Food Blogger & Critic</div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

  <!-- CTA SECTION -->
  <section class="py-20 bg-gradient-to-r from-african-600 to-african-700 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute inset-0 bg-gradient-to-br from-white/5 via-transparent to-white/5"></div>
    </div>
    
    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="inline-flex items-center bg-white/10 backdrop-blur-sm text-white px-6 py-3 rounded-full text-sm font-bold mb-6">
        <span class="w-2 h-2 bg-white rounded-full mr-3 animate-pulse"></span>
        Your African Culinary Adventure Awaits
      </div>
      
      <h2 class="text-4xl lg:text-6xl font-display font-bold mb-8">
        Begin Your Journey to 
        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-orange-400 to-red-400">Authentic Africa</span>
      </h2>
      
      <p class="text-xl text-orange-100 mb-12 leading-relaxed max-w-4xl mx-auto">
        Step into a world where every dish tells a story, every spice carries tradition, and every meal connects you to the vibrant heart of African culture. 
        <strong class="text-white">Your table awaits at <?php echo SITE_NAME; ?>.</strong>
      </p>
      
      <!-- Action Buttons -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-12 max-w-4xl mx-auto">
        <button onclick="openBookingModal()" 
                class="group bg-white text-african-600 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-neutral-100 transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-african-600">
          <svg class="w-5 h-5 inline mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a1 1 0 011-1h6a1 1 0 011 1v4m4 0V9a2 2 0 00-2-2H6a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V9a2 2 0 00-2-2z"></path>
          </svg>
          Reserve Your Table
        </button>
        
        <a href="menu.php" 
           class="group border-2 border-white text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-african-600 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-african-600">
          <svg class="w-5 h-5 inline mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
          </svg>
          Explore Menu
        </a>
        
        <a href="tel:<?php echo SITE_PHONE; ?>" 
           class="group bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white px-8 py-4 rounded-2xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-african-600">
          <svg class="w-5 h-5 inline mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
          </svg>
          Call Now
        </a>
      </div>
      
      <!-- Trust Indicators -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center text-orange-100">
        <div>
          <div class="text-2xl font-bold text-white mb-1">5+ Years</div>
          <div class="text-sm">Serving Excellence</div>
        </div>
        <div>
          <div class="text-2xl font-bold text-white mb-1">10,000+</div>
          <div class="text-sm">Happy Customers</div>
        </div>
        <div>
          <div class="text-2xl font-bold text-white mb-1">4.9★</div>
          <div class="text-sm">Customer Rating</div>
        </div>
        <div>
          <div class="text-2xl font-bold text-white mb-1">100%</div>
          <div class="text-sm">Authentic Recipes</div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'core/includes/footer.php'; ?>