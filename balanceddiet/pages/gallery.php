<?php
// Include configuration
require_once '../core/config.php';

// Page-specific variables
$page_title = "Gallery";
$page_description = "Explore our beautiful restaurant atmosphere, delicious dishes, and happy customers. See why Balanced Diet Cottage is the premier destination for authentic African cuisine.";

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
      <h1 class="text-4xl lg:text-6xl font-display font-bold mb-6">Gallery</h1>
      <p class="text-xl lg:text-2xl text-orange-100 max-w-3xl mx-auto leading-relaxed">
        A visual journey through our authentic African cuisine, warm atmosphere, and memorable experiences
      </p>
    </div>
  </section>

  <!-- GALLERY CATEGORIES -->
  <section class="py-8 bg-white sticky top-16 lg:top-20 z-30 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-wrap justify-center gap-4">
        <button data-category="all" 
                class="gallery-filter active bg-african-600 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
          All Photos
        </button>
        <button data-category="food" 
                class="gallery-filter bg-white text-neutral-700 hover:bg-african-50 px-6 py-3 rounded-full font-semibold border-2 border-neutral-200 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
          🍽️ Food & Dishes
        </button>
        <button data-category="restaurant" 
                class="gallery-filter bg-white text-neutral-700 hover:bg-african-50 px-6 py-3 rounded-full font-semibold border-2 border-neutral-200 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
          🏪 Restaurant Interior
        </button>
        <button data-category="events" 
                class="gallery-filter bg-white text-neutral-700 hover:bg-african-50 px-6 py-3 rounded-full font-semibold border-2 border-neutral-200 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
          🎉 Events & Celebrations
        </button>
        <button data-category="team" 
                class="gallery-filter bg-white text-neutral-700 hover:bg-african-50 px-6 py-3 rounded-full font-semibold border-2 border-neutral-200 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
          👨‍🍳 Our Team
        </button>
      </div>
    </div>
  </section>

  <!-- GALLERY GRID -->
  <section class="py-16 bg-gradient-to-br from-neutral-50 to-orange-50/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div id="gallery-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-16">
        
        <!-- Food Gallery Items -->
        <div class="gallery-item food group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" onclick="openLightbox(this)">
          <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?q=80&w=800&auto=format&fit=crop" 
               alt="Jollof Rice" 
               class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
            <div class="p-4 text-white">
              <h3 class="text-lg font-bold">Signature Jollof Rice</h3>
              <p class="text-sm text-orange-200">Nigerian Cuisine</p>
            </div>
          </div>
        </div>

        <div class="gallery-item food group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" onclick="openLightbox(this)">
          <img src="https://images.unsplash.com/photo-1563379091339-03246963d96d?q=80&w=800&auto=format&fit=crop" 
               alt="Banku & Tilapia" 
               class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
            <div class="p-4 text-white">
              <h3 class="text-lg font-bold">Banku & Grilled Tilapia</h3>
              <p class="text-sm text-orange-200">Ghanaian Cuisine</p>
            </div>
          </div>
        </div>

        <div class="gallery-item food group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" onclick="openLightbox(this)">
          <img src="https://images.unsplash.com/photo-1574484284002-952d92456975?q=80&w=800&auto=format&fit=crop" 
               alt="Ndole" 
               class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
            <div class="p-4 text-white">
              <h3 class="text-lg font-bold">Traditional Ndole</h3>
              <p class="text-sm text-orange-200">Cameroonian Cuisine</p>
            </div>
          </div>
        </div>

        <div class="gallery-item food group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" onclick="openLightbox(this)">
          <img src="https://images.unsplash.com/photo-1529692236671-f1f6cf9683ba?q=80&w=800&auto=format&fit=crop" 
               alt="Suya" 
               class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
            <div class="p-4 text-white">
              <h3 class="text-lg font-bold">Spicy Suya Skewers</h3>
              <p class="text-sm text-orange-200">Nigerian Street Food</p>
            </div>
          </div>
        </div>

        <!-- Restaurant Interior -->
        <div class="gallery-item restaurant group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" onclick="openLightbox(this)">
          <img src="https://images.unsplash.com/photo-1559847844-d721426d6edc?q=80&w=800&auto=format&fit=crop" 
               alt="Restaurant Interior" 
               class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
            <div class="p-4 text-white">
              <h3 class="text-lg font-bold">Main Dining Area</h3>
              <p class="text-sm text-orange-200">Warm & Welcoming Atmosphere</p>
            </div>
          </div>
        </div>

        <div class="gallery-item restaurant group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" onclick="openLightbox(this)">
          <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=800&auto=format&fit=crop" 
               alt="Restaurant Bar" 
               class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
            <div class="p-4 text-white">
              <h3 class="text-lg font-bold">Bar & Lounge Area</h3>
              <p class="text-sm text-orange-200">Relaxing Environment</p>
            </div>
          </div>
        </div>

        <!-- Events -->
        <div class="gallery-item events group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" onclick="openLightbox(this)">
          <img src="https://images.unsplash.com/photo-1555244162-803834f70033?q=80&w=800&auto=format&fit=crop" 
               alt="Private Event" 
               class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
            <div class="p-4 text-white">
              <h3 class="text-lg font-bold">Private Celebration</h3>
              <p class="text-sm text-orange-200">Wedding Reception</p>
            </div>
          </div>
        </div>

        <div class="gallery-item events group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" onclick="openLightbox(this)">
          <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=800&auto=format&fit=crop" 
               alt="Cultural Event" 
               class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
            <div class="p-4 text-white">
              <h3 class="text-lg font-bold">Cultural Festival</h3>
              <p class="text-sm text-orange-200">Community Celebration</p>
            </div>
          </div>
        </div>

        <!-- Team -->
        <div class="gallery-item team group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" onclick="openLightbox(this)">
          <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?q=80&w=800&auto=format&fit=crop" 
               alt="Head Chef" 
               class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
            <div class="p-4 text-white">
              <h3 class="text-lg font-bold">Chef Adaora</h3>
              <p class="text-sm text-orange-200">Head Chef & Owner</p>
            </div>
          </div>
        </div>

        <div class="gallery-item team group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" onclick="openLightbox(this)">
          <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=800&auto=format&fit=crop" 
               alt="Kitchen Team" 
               class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
            <div class="p-4 text-white">
              <h3 class="text-lg font-bold">Our Kitchen Team</h3>
              <p class="text-sm text-orange-200">Passionate About Authentic Flavors</p>
            </div>
          </div>
        </div>

        <!-- More Food Items -->
        <div class="gallery-item food group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" onclick="openLightbox(this)">
          <img src="https://images.unsplash.com/photo-1587334274328-64186a80aeee?q=80&w=800&auto=format&fit=crop" 
               alt="Kelewele" 
               class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
            <div class="p-4 text-white">
              <h3 class="text-lg font-bold">Spicy Kelewele</h3>
              <p class="text-sm text-orange-200">Ghanaian Fried Plantain</p>
            </div>
          </div>
        </div>

        <div class="gallery-item food group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer" onclick="openLightbox(this)">
          <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=800&auto=format&fit=crop" 
               alt="Poulet DG" 
               class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
            <div class="p-4 text-white">
              <h3 class="text-lg font-bold">Poulet DG</h3>
              <p class="text-sm text-orange-200">Cameroonian Grilled Chicken</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Load More Button -->
      <div class="text-center">
        <button id="loadMoreBtn" 
                class="bg-gradient-to-r from-african-500 to-african-600 hover:from-african-600 hover:to-african-700 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
          Load More Photos
        </button>
      </div>

    </div>
  </section>

  <!-- CUSTOMER TESTIMONIALS WITH PHOTOS -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-4xl lg:text-5xl font-display font-bold text-neutral-900 mb-4">Happy Customers</h2>
        <p class="text-xl text-neutral-600 max-w-2xl mx-auto">
          See what our guests are saying about their dining experiences
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Testimonial 1 -->
        <div class="testimonial-card bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-2xl shadow-lg">
          <div class="flex items-center mb-6">
            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b1e5?q=80&w=150&auto=format&fit=crop" 
                 alt="Customer" 
                 class="w-16 h-16 rounded-full object-cover mr-4 border-4 border-white shadow-lg">
            <div>
              <h4 class="font-bold text-neutral-900 text-lg">Amara Johnson</h4>
              <p class="text-sm text-neutral-600">Regular Customer</p>
              <div class="flex text-yellow-400 mt-1">
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
            </div>
          </div>
          <p class="text-neutral-700 leading-relaxed italic">
            "Absolutely incredible! The jollof rice was perfect, and the atmosphere made me feel like I was back home in Lagos. The presentation is beautiful and the flavors are authentic."
          </p>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial-card bg-gradient-to-br from-yellow-50 to-yellow-100 p-8 rounded-2xl shadow-lg">
          <div class="flex items-center mb-6">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150&auto=format&fit=crop" 
                 alt="Customer" 
                 class="w-16 h-16 rounded-full object-cover mr-4 border-4 border-white shadow-lg">
            <div>
              <h4 class="font-bold text-neutral-900 text-lg">Michael Chen</h4>
              <p class="text-sm text-neutral-600">Food Blogger</p>
              <div class="flex text-yellow-400 mt-1">
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
            </div>
          </div>
          <p class="text-neutral-700 leading-relaxed italic">
            "As a food blogger, I've tried African cuisine everywhere. This place stands out for its authenticity and exceptional presentation. Every dish tells a story!"
          </p>
        </div>

        <!-- Testimonial 3 -->
        <div class="testimonial-card bg-gradient-to-br from-red-50 to-red-100 p-8 rounded-2xl shadow-lg">
          <div class="flex items-center mb-6">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=150&auto=format&fit=crop" 
                 alt="Customer" 
                 class="w-16 h-16 rounded-full object-cover mr-4 border-4 border-white shadow-lg">
            <div>
              <h4 class="font-bold text-neutral-900 text-lg">Sarah Williams</h4>
              <p class="text-sm text-neutral-600">Event Host</p>
              <div class="flex text-yellow-400 mt-1">
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
            </div>
          </div>
          <p class="text-neutral-700 leading-relaxed italic">
            "We hosted our wedding reception here and it was magical! The catering was impeccable, and the venue looked stunning. Our guests are still talking about it!"
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- LIGHTBOX MODAL -->
  <div id="lightboxModal" class="fixed inset-0 z-50 hidden bg-black/90 flex items-center justify-center p-4">
    <div class="relative max-w-4xl max-h-full">
      <button onclick="closeLightbox()" 
              class="absolute top-4 right-4 text-white hover:text-gray-300 z-10 bg-black/50 rounded-full p-2 focus:outline-none focus:ring-2 focus:ring-white">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
      <img id="lightboxImage" src="" alt="" class="max-w-full max-h-full object-contain rounded-lg">
      <div id="lightboxCaption" class="absolute bottom-4 left-4 right-4 text-white bg-black/50 p-4 rounded-lg">
        <h3 id="lightboxTitle" class="text-lg font-bold mb-1"></h3>
        <p id="lightboxSubtitle" class="text-sm text-gray-300"></p>
      </div>
    </div>
  </div>

  <!-- CTA SECTION -->
  <section class="py-20 bg-gradient-to-r from-african-600 to-african-700 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">Ready to Create Your Own Memories?</h2>
      <p class="text-xl text-orange-100 mb-10 leading-relaxed">
        Join us for an unforgettable dining experience and become part of our gallery of happy customers.
      </p>
      
      <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <button onclick="openBookingModal()" 
                class="bg-white text-african-600 px-10 py-4 rounded-full font-bold text-lg hover:bg-neutral-100 transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-african-600">
          Book Your Table
        </button>
        <a href="menu.php" 
           class="border-2 border-white text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-african-600 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-african-600">
          View Our Menu
        </a>
      </div>
    </div>
  </section>

</main>

<?php include '../core/includes/footer.php'; ?>

<script>
// Gallery functionality
document.addEventListener('DOMContentLoaded', function() {
    const galleryFilters = document.querySelectorAll('.gallery-filter');
    const galleryItems = document.querySelectorAll('.gallery-item');

    // Filter functionality
    galleryFilters.forEach(filter => {
        filter.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update active filter
            galleryFilters.forEach(f => {
                f.classList.remove('active', 'bg-african-600', 'text-white');
                f.classList.add('bg-white', 'text-neutral-700', 'hover:bg-african-50', 'border-2', 'border-neutral-200');
            });
            
            this.classList.add('active', 'bg-african-600', 'text-white');
            this.classList.remove('bg-white', 'text-neutral-700', 'hover:bg-african-50', 'border-2', 'border-neutral-200');

            // Filter gallery items
            galleryItems.forEach(item => {
                if (category === 'all' || item.classList.contains(category)) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 100);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
});

// Lightbox functionality
function openLightbox(element) {
    const modal = document.getElementById('lightboxModal');
    const image = document.getElementById('lightboxImage');
    const title = document.getElementById('lightboxTitle');
    const subtitle = document.getElementById('lightboxSubtitle');
    
    const img = element.querySelector('img');
    const overlay = element.querySelector('.gallery-overlay');
    const titleEl = overlay ? overlay.querySelector('h3') : null;
    const subtitleEl = overlay ? overlay.querySelector('p') : null;
    
    image.src = img.src;
    image.alt = img.alt;
    
    if (titleEl && subtitleEl) {
        title.textContent = titleEl.textContent;
        subtitle.textContent = subtitleEl.textContent;
    } else {
        title.textContent = img.alt;
        subtitle.textContent = '';
    }
    
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    const modal = document.getElementById('lightboxModal');
    modal.classList.add('hidden');
    document.body.style.overflow = '';
}

// Close lightbox on escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeLightbox();
    }
});

// Close lightbox when clicking outside image
document.getElementById('lightboxModal').addEventListener('click', function(event) {
    if (event.target === this) {
        closeLightbox();
    }
});

// Load more functionality (simulate)
document.getElementById('loadMoreBtn').addEventListener('click', function() {
    this.textContent = 'Loading...';
    this.disabled = true;
    
    setTimeout(() => {
        this.textContent = 'All Photos Loaded';
        this.classList.add('opacity-50', 'cursor-not-allowed');
    }, 1000);
});
</script>