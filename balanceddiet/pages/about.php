<?php
// Include configuration
require_once '../core/config.php';

// Page-specific variables
$page_title = "About Us";
$page_description = "Learn about our story, our passion for authentic African cuisine, and meet the team behind Balanced Diet Cottage. Discover our commitment to bringing you the finest cultural dining experience.";

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
      <h1 class="text-4xl lg:text-6xl font-display font-bold mb-6">Our Story</h1>
      <p class="text-xl lg:text-2xl text-orange-100 max-w-3xl mx-auto leading-relaxed">
        More than a restaurant - we're a cultural bridge bringing authentic African flavors and traditions to every table
      </p>
    </div>
  </section>

  <!-- FOUNDER'S STORY -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        
        <!-- Story Content -->
        <div class="lg:order-2">
          <h2 class="text-4xl lg:text-5xl font-display font-bold text-neutral-900 mb-8">The Vision Behind Balanced Diet Cottage</h2>
          
          <div class="space-y-6 text-lg text-neutral-700 leading-relaxed">
            <p>
              <strong class="text-african-600">Our journey began in 2018</strong> with a simple yet profound dream: to create a space where the rich culinary heritage of Africa could be shared, celebrated, and enjoyed by everyone. Founded by <strong>Chef Adaora Nkomo</strong>, Balanced Diet Cottage was born from a deep love for authentic African cuisine and a desire to bring people together through food.
            </p>
            
            <p>
              Growing up across Nigeria, Ghana, and Cameroon, Chef Adaora learned the art of cooking from her grandmother, who taught her that <em>"food is the language that speaks to the soul."</em> Each recipe tells a story, carries tradition, and creates connections that transcend borders.
            </p>
            
            <p>
              Today, we're proud to serve as a cultural ambassador, introducing our community to the diverse flavors of West and Central Africa while maintaining the authenticity and tradition that makes each dish special. Every meal we serve is prepared with the same love and care that has been passed down through generations.
            </p>
            
            <blockquote class="border-l-4 border-african-500 pl-6 py-4 bg-african-50 rounded-r-lg italic text-african-800">
              "We don't just serve food; we share stories, celebrate cultures, and create a home away from home for everyone who walks through our doors."
              <cite class="block mt-2 text-sm font-semibold not-italic">- Chef Adaora Nkomo, Founder</cite>
            </blockquote>
          </div>
        </div>

        <!-- Image -->
        <div class="lg:order-1">
          <div class="relative">
            <div class="absolute inset-0 bg-gradient-to-br from-african-500 to-african-600 rounded-3xl transform rotate-3"></div>
            <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?q=80&w=800&auto=format&fit=crop" 
                 alt="Chef Adaora Nkomo" 
                 class="relative w-full h-96 lg:h-[500px] object-cover rounded-3xl shadow-2xl">
            <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-2xl shadow-xl">
              <div class="text-center">
                <div class="text-3xl font-bold text-african-600">2018</div>
                <div class="text-sm text-neutral-600 font-semibold">Est.</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- OUR VALUES -->
  <section class="py-20 bg-gradient-to-br from-neutral-50 to-orange-50/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-4xl lg:text-5xl font-display font-bold text-neutral-900 mb-4">Our Core Values</h2>
        <p class="text-xl text-neutral-600 max-w-2xl mx-auto">
          The principles that guide everything we do
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Value 1 -->
        <div class="value-card bg-white p-8 rounded-2xl shadow-lg text-center group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
          <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-4">Authenticity</h3>
          <p class="text-neutral-600 leading-relaxed">
            We honor traditional recipes and cooking methods, ensuring every dish represents the true essence of African cuisine with genuine flavors and cultural significance.
          </p>
        </div>

        <!-- Value 2 -->
        <div class="value-card bg-white p-8 rounded-2xl shadow-lg text-center group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
          <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-4">Community</h3>
          <p class="text-neutral-600 leading-relaxed">
            We believe in building connections and creating a welcoming space where diverse communities can come together to share experiences and celebrate cultural diversity.
          </p>
        </div>

        <!-- Value 3 -->
        <div class="value-card bg-white p-8 rounded-2xl shadow-lg text-center group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
          <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-4">Quality</h3>
          <p class="text-neutral-600 leading-relaxed">
            From sourcing the finest ingredients to meticulous preparation, we maintain the highest standards to ensure every meal exceeds expectations.
          </p>
        </div>

        <!-- Value 4 -->
        <div class="value-card bg-white p-8 rounded-2xl shadow-lg text-center group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
          <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-4">Cultural Heritage</h3>
          <p class="text-neutral-600 leading-relaxed">
            We're dedicated to preserving and sharing the rich culinary traditions of Africa, educating our guests about the history and culture behind each dish.
          </p>
        </div>

        <!-- Value 5 -->
        <div class="value-card bg-white p-8 rounded-2xl shadow-lg text-center group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
          <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-4">Innovation</h3>
          <p class="text-neutral-600 leading-relaxed">
            While respecting tradition, we embrace creative presentation and modern techniques to make authentic African cuisine accessible and exciting for all palates.
          </p>
        </div>

        <!-- Value 6 -->
        <div class="value-card bg-white p-8 rounded-2xl shadow-lg text-center group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
          <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-4">Sustainability</h3>
          <p class="text-neutral-600 leading-relaxed">
            We source responsibly, support local farmers when possible, and implement eco-friendly practices to ensure our impact on the environment is positive.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- MEET OUR TEAM -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-4xl lg:text-5xl font-display font-bold text-neutral-900 mb-4">Meet Our Team</h2>
        <p class="text-xl text-neutral-600 max-w-2xl mx-auto">
          The passionate individuals who bring authentic African flavors to life
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
        
        <!-- Team Member 1 -->
        <div class="team-member bg-gradient-to-br from-white to-african-50/30 p-8 rounded-2xl shadow-lg text-center group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
          <div class="relative mb-6">
            <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-african-500 shadow-lg group-hover:scale-110 transition-transform duration-300">
              <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?q=80&w=300&auto=format&fit=crop" 
                   alt="Chef Adaora Nkomo" 
                   class="w-full h-full object-cover">
            </div>
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-african-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
              Founder
            </div>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-2">Chef Adaora Nkomo</h3>
          <p class="text-african-600 font-semibold mb-4">Head Chef & Owner</p>
          <p class="text-neutral-600 leading-relaxed text-sm">
            With over 15 years of culinary experience across West and Central Africa, Chef Adaora brings authentic flavors and traditional techniques to every dish.
          </p>
          <div class="flex justify-center mt-4 space-x-3">
            <a href="#" class="text-african-500 hover:text-african-600 transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
              </svg>
            </a>
            <a href="#" class="text-african-500 hover:text-african-600 transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
              </svg>
            </a>
          </div>
        </div>

        <!-- Team Member 2 -->
        <div class="team-member bg-gradient-to-br from-white to-yellow-50/30 p-8 rounded-2xl shadow-lg text-center group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
          <div class="relative mb-6">
            <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-yellow-500 shadow-lg group-hover:scale-110 transition-transform duration-300">
              <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=300&auto=format&fit=crop" 
                   alt="Kwame Asante" 
                   class="w-full h-full object-cover">
            </div>
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-yellow-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
              Sous Chef
            </div>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-2">Kwame Asante</h3>
          <p class="text-yellow-600 font-semibold mb-4">Sous Chef</p>
          <p class="text-neutral-600 leading-relaxed text-sm">
            Specializing in Ghanaian cuisine, Kwame ensures every dish maintains the perfect balance of spices and traditional cooking methods passed down through generations.
          </p>
          <div class="flex justify-center mt-4 space-x-3">
            <a href="#" class="text-yellow-500 hover:text-yellow-600 transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
              </svg>
            </a>
            <a href="#" class="text-yellow-500 hover:text-yellow-600 transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
              </svg>
            </a>
          </div>
        </div>

        <!-- Team Member 3 -->
        <div class="team-member bg-gradient-to-br from-white to-green-50/30 p-8 rounded-2xl shadow-lg text-center group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
          <div class="relative mb-6">
            <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-green-500 shadow-lg group-hover:scale-110 transition-transform duration-300">
              <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=300&auto=format&fit=crop" 
                   alt="Emmanuel Njoku" 
                   class="w-full h-full object-cover">
            </div>
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
              Manager
            </div>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-2">Emmanuel Njoku</h3>
          <p class="text-green-600 font-semibold mb-4">Restaurant Manager</p>
          <p class="text-neutral-600 leading-relaxed text-sm">
            With a warm smile and extensive hospitality experience, Emmanuel ensures every guest feels welcomed and has an exceptional dining experience from start to finish.
          </p>
          <div class="flex justify-center mt-4 space-x-3">
            <a href="#" class="text-green-500 hover:text-green-600 transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
              </svg>
            </a>
            <a href="#" class="text-green-500 hover:text-green-600 transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
              </svg>
            </a>
          </div>
        </div>

      </div>

      <!-- Extended Team -->
      <div class="bg-gradient-to-r from-african-50 to-yellow-50 p-8 rounded-2xl">
        <h3 class="text-2xl font-bold text-center mb-8 text-neutral-900">Our Extended Family</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
          <div>
            <div class="text-3xl font-bold text-african-600">12+</div>
            <div class="text-sm text-neutral-600 font-semibold">Kitchen Staff</div>
          </div>
          <div>
            <div class="text-3xl font-bold text-yellow-600">8+</div>
            <div class="text-sm text-neutral-600 font-semibold">Service Team</div>
          </div>
          <div>
            <div class="text-3xl font-bold text-green-600">5+</div>
            <div class="text-sm text-neutral-600 font-semibold">Years Experience</div>
          </div>
          <div>
            <div class="text-3xl font-bold text-red-600">100%</div>
            <div class="text-sm text-neutral-600 font-semibold">Passionate</div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- OUR COMMITMENT -->
  <section class="py-20 bg-gradient-to-br from-neutral-50 to-orange-50/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        
        <!-- Image -->
        <div>
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1559847844-d721426d6edc?q=80&w=800&auto=format&fit=crop" 
                 alt="Restaurant Interior" 
                 class="w-full h-96 lg:h-[500px] object-cover rounded-3xl shadow-2xl">
            <div class="absolute -top-6 -left-6 bg-white p-6 rounded-2xl shadow-xl">
              <div class="text-center">
                <div class="text-3xl font-bold text-african-600">5000+</div>
                <div class="text-sm text-neutral-600 font-semibold">Happy Customers</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div>
          <h2 class="text-4xl lg:text-5xl font-display font-bold text-neutral-900 mb-8">Our Commitment to You</h2>
          
          <div class="space-y-6">
            
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-gradient-to-br from-african-500 to-african-600 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold text-neutral-900 mb-2">Fresh, Quality Ingredients</h3>
                <p class="text-neutral-600 leading-relaxed">
                  We source the freshest ingredients daily and work with trusted suppliers to ensure every dish meets our high standards for quality and authenticity.
                </p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold text-neutral-900 mb-2">Exceptional Service</h3>
                <p class="text-neutral-600 leading-relaxed">
                  From the moment you walk in until you leave, our team is dedicated to providing warm, attentive service that makes you feel like part of our family.
                </p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-bold text-neutral-900 mb-2">Cultural Education</h3>
                <p class="text-neutral-600 leading-relaxed">
                  We're passionate about sharing the stories and traditions behind each dish, helping our guests understand and appreciate African culinary heritage.
                </p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA SECTION -->
  <section class="py-20 bg-gradient-to-r from-african-600 to-african-700 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">Join Our Culinary Journey</h2>
      <p class="text-xl text-orange-100 mb-10 leading-relaxed">
        Experience the warmth of African hospitality and the authentic flavors that have been passed down through generations.
      </p>
      
      <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <button onclick="openBookingModal()" 
                class="bg-white text-african-600 px-10 py-4 rounded-full font-bold text-lg hover:bg-neutral-100 transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-african-600">
          Reserve Your Table
        </button>
        <a href="menu.php" 
           class="border-2 border-white text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-african-600 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-african-600">
          Explore Our Menu
        </a>
      </div>
    </div>
  </section>

</main>

<?php include '../core/includes/footer.php'; ?>

<script>
// Add smooth animations on scroll
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, observerOptions);

    // Observe team members and value cards
    document.querySelectorAll('.team-member, .value-card').forEach(el => {
        observer.observe(el);
    });
});
</script>