<?php
// Include configuration
require_once '../core/config.php';

// Page-specific variables
$page_title = "Our Menu";
$page_description = "Explore our authentic African menu featuring traditional dishes from Nigeria, Ghana, and Cameroon. Fresh ingredients, authentic recipes, and bold flavors await you.";

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
      <h1 class="text-4xl lg:text-6xl font-display font-bold mb-6">Our Authentic Menu</h1>
      <p class="text-xl lg:text-2xl text-orange-100 max-w-3xl mx-auto leading-relaxed">
        Discover the rich culinary traditions of West and Central Africa through our carefully crafted dishes
      </p>
    </div>
  </section>

  <!-- MENU NAVIGATION -->
  <section class="py-8 bg-white sticky top-16 lg:top-20 z-30 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-wrap justify-center gap-4">
        <button data-cuisine="nigerian" 
                class="menu-tab active bg-african-600 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
          🇳🇬 Nigerian Cuisine
        </button>
        <button data-cuisine="ghanaian" 
                class="menu-tab bg-white text-neutral-700 hover:bg-african-50 px-6 py-3 rounded-full font-semibold border-2 border-neutral-200 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
          🇬🇭 Ghanaian Cuisine
        </button>
        <button data-cuisine="cameroonian" 
                class="menu-tab bg-white text-neutral-700 hover:bg-african-50 px-6 py-3 rounded-full font-semibold border-2 border-neutral-200 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
          🇨🇲 Cameroonian Cuisine
        </button>
        <button data-cuisine="beverages" 
                class="menu-tab bg-white text-neutral-700 hover:bg-african-50 px-6 py-3 rounded-full font-semibold border-2 border-neutral-200 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2">
          🥤 Beverages & Desserts
        </button>
      </div>
    </div>
  </section>

  <!-- NIGERIAN MENU -->
  <section id="nigerian-menu" class="py-16 bg-gradient-to-br from-green-50 to-neutral-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Rice Dishes -->
      <div class="mb-16">
        <h3 class="text-3xl font-display font-bold text-neutral-900 mb-8 flex items-center">
          <span class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
          </span>
          Rice & Grain Dishes
        </h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          
          <!-- Jollof Rice -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="../assets/images/menu/main-dishes/jollof-rice.jpg" 
                 alt="Jollof Rice" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Jollof Rice</h4>
            <p class="text-neutral-600 text-sm mb-4">Aromatic rice cooked in rich tomato sauce with spices, served with your choice of chicken, beef, or prawns</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-green-600">£14.99</span>
              <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Most Popular</span>
            </div>
          </div>

          <!-- Fried Rice -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b?q=80&w=800&auto=format&fit=crop" 
                 alt="Fried Rice" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Nigerian Fried Rice</h4>
            <p class="text-neutral-600 text-sm mb-4">Colorful mixed rice with vegetables, liver, and your choice of protein</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-green-600">£13.99</span>
              <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">Vegetarian Option</span>
            </div>
          </div>

          <!-- Coconut Rice -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?q=80&w=800&auto=format&fit=crop" 
                 alt="Coconut Rice" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Coconut Rice</h4>
            <p class="text-neutral-600 text-sm mb-4">Fragrant rice cooked in rich coconut milk with aromatic spices</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-green-600">£12.99</span>
              <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">Dairy-Free</span>
            </div>
          </div>

        </div>
      </div>

      <!-- Soups & Stews -->
      <div class="mb-16">
        <h3 class="text-3xl font-display font-bold text-neutral-900 mb-8 flex items-center">
          <span class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
            </svg>
          </span>
          Traditional Soups & Stews
        </h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          
          <!-- Egusi Soup -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1574484284002-952d92456975?q=80&w=800&auto=format&fit=crop" 
                 alt="Egusi Soup" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Egusi Soup</h4>
            <p class="text-neutral-600 text-sm mb-4">Traditional melon seed soup with spinach, meat, and fish. Served with pounded yam or fufu</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-green-600">£16.99</span>
              <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Traditional</span>
            </div>
          </div>

          <!-- Pepper Soup -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1547592180-85f173990554?q=80&w=800&auto=format&fit=crop" 
                 alt="Pepper Soup" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Pepper Soup</h4>
            <p class="text-neutral-600 text-sm mb-4">Spicy clear soup with choice of goat meat, fish, or chicken and traditional spices</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-green-600">£15.99</span>
              <span class="text-xs bg-red-100 text-red-800 px-2 py-1 rounded-full">Spicy</span>
            </div>
          </div>

          <!-- Okra Soup -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1563379091339-03246963d96d?q=80&w=800&auto=format&fit=crop" 
                 alt="Okra Soup" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Okra Soup</h4>
            <p class="text-neutral-600 text-sm mb-4">Fresh okra cooked with assorted meat and stockfish in palm oil base</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-green-600">£14.99</span>
              <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Healthy</span>
            </div>
          </div>

        </div>
      </div>

      <!-- Grilled & Proteins -->
      <div class="mb-16">
        <h3 class="text-3xl font-display font-bold text-neutral-900 mb-8 flex items-center">
          <span class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
            </svg>
          </span>
          Grilled Specialties
        </h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          
          <!-- Suya -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1529692236671-f1f6cf9683ba?q=80&w=800&auto=format&fit=crop" 
                 alt="Suya" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Suya</h4>
            <p class="text-neutral-600 text-sm mb-4">Spicy grilled meat skewers with traditional yaji spice blend, onions, and tomatoes</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-green-600">£12.99</span>
              <span class="text-xs bg-orange-100 text-orange-800 px-2 py-1 rounded-full">Street Food</span>
            </div>
          </div>

          <!-- Asun -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=800&auto=format&fit=crop" 
                 alt="Asun" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Asun</h4>
            <p class="text-neutral-600 text-sm mb-4">Spicy grilled goat meat with peppers and onions, perfect for sharing</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-green-600">£18.99</span>
              <span class="text-xs bg-red-100 text-red-800 px-2 py-1 rounded-full">Spicy</span>
            </div>
          </div>

          <!-- Grilled Fish -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1559847844-d721426d6edc?q=80&w=800&auto=format&fit=crop" 
                 alt="Grilled Fish" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Grilled Tilapia</h4>
            <p class="text-neutral-600 text-sm mb-4">Fresh tilapia marinated in African spices and grilled to perfection</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-green-600">£19.99</span>
              <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">Fresh Catch</span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- GHANAIAN MENU -->
  <section id="ghanaian-menu" class="hidden py-16 bg-gradient-to-br from-yellow-50 to-neutral-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Main Dishes -->
      <div class="mb-16">
        <h3 class="text-3xl font-display font-bold text-neutral-900 mb-8 flex items-center">
          <span class="w-12 h-12 bg-yellow-600 rounded-xl flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
          </span>
          Ghanaian Main Dishes
        </h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          
          <!-- Banku & Tilapia -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1563379091339-03246963d96d?q=80&w=800&auto=format&fit=crop" 
                 alt="Banku & Tilapia" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Banku & Tilapia</h4>
            <p class="text-neutral-600 text-sm mb-4">Traditional fermented corn dough with grilled tilapia and spicy pepper sauce</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-yellow-600">£17.99</span>
              <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">Signature</span>
            </div>
          </div>

          <!-- Waakye -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?q=80&w=800&auto=format&fit=crop" 
                 alt="Waakye" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Waakye</h4>
            <p class="text-neutral-600 text-sm mb-4">Rice and beans cooked with millet leaves, served with stew, gari, and eggs</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-yellow-600">£13.99</span>
              <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Protein-Rich</span>
            </div>
          </div>

          <!-- Red Red -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1574484284002-952d92456975?q=80&w=800&auto=format&fit=crop" 
                 alt="Red Red" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Red Red</h4>
            <p class="text-neutral-600 text-sm mb-4">Black-eyed peas cooked in palm oil with plantains and fish or meat</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-yellow-600">£14.99</span>
              <span class="text-xs bg-red-100 text-red-800 px-2 py-1 rounded-full">Traditional</span>
            </div>
          </div>

        </div>
      </div>

      <!-- Soups -->
      <div class="mb-16">
        <h3 class="text-3xl font-display font-bold text-neutral-900 mb-8 flex items-center">
          <span class="w-12 h-12 bg-yellow-600 rounded-xl flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
            </svg>
          </span>
          Traditional Soups
        </h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          
          <!-- Light Soup -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1547592180-85f173990554?q=80&w=800&auto=format&fit=crop" 
                 alt="Light Soup" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Light Soup</h4>
            <p class="text-neutral-600 text-sm mb-4">Clear tomato-based soup with meat or fish, served with fufu or banku</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-yellow-600">£15.99</span>
              <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">Light</span>
            </div>
          </div>

          <!-- Groundnut Soup -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1574484284002-952d92456975?q=80&w=800&auto=format&fit=crop" 
                 alt="Groundnut Soup" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Groundnut Soup</h4>
            <p class="text-neutral-600 text-sm mb-4">Rich peanut-based soup with chicken or beef and vegetables</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-yellow-600">£16.99</span>
              <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">Creamy</span>
            </div>
          </div>

          <!-- Palm Nut Soup -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1563379091339-03246963d96d?q=80&w=800&auto=format&fit=crop" 
                 alt="Palm Nut Soup" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Palm Nut Soup</h4>
            <p class="text-neutral-600 text-sm mb-4">Traditional soup made from fresh palm nuts with meat and fish</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-yellow-600">£17.99</span>
              <span class="text-xs bg-orange-100 text-orange-800 px-2 py-1 rounded-full">Authentic</span>
            </div>
          </div>

        </div>
      </div>

      <!-- Snacks -->
      <div class="mb-16">
        <h3 class="text-3xl font-display font-bold text-neutral-900 mb-8 flex items-center">
          <span class="w-12 h-12 bg-yellow-600 rounded-xl flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
            </svg>
          </span>
          Snacks & Sides
        </h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          
          <!-- Kelewele -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1587334274328-64186a80aeee?q=80&w=800&auto=format&fit=crop" 
                 alt="Kelewele" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Kelewele</h4>
            <p class="text-neutral-600 text-sm mb-4">Spiced fried plantain cubes with ginger and chili</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-yellow-600">£6.99</span>
              <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Vegan</span>
            </div>
          </div>

          <!-- Bofrot -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?q=80&w=800&auto=format&fit=crop" 
                 alt="Bofrot" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Bofrot (Puff Puff)</h4>
            <p class="text-neutral-600 text-sm mb-4">Sweet deep-fried dough balls, perfect as a snack or dessert</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-yellow-600">£5.99</span>
              <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">Sweet Treat</span>
            </div>
          </div>

          <!-- Tatale -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1587334274328-64186a80aeee?q=80&w=800&auto=format&fit=crop" 
                 alt="Tatale" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Tatale</h4>
            <p class="text-neutral-600 text-sm mb-4">Spiced plantain pancakes with onions and pepper</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-yellow-600">£7.99</span>
              <span class="text-xs bg-orange-100 text-orange-800 px-2 py-1 rounded-full">Crispy</span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- CAMEROONIAN MENU -->
  <section id="cameroonian-menu" class="hidden py-16 bg-gradient-to-br from-red-50 to-neutral-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Main Dishes -->
      <div class="mb-16">
        <h3 class="text-3xl font-display font-bold text-neutral-900 mb-8 flex items-center">
          <span class="w-12 h-12 bg-red-600 rounded-xl flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
          </span>
          Cameroonian Specialties
        </h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          
          <!-- Ndole -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1574484284002-952d92456975?q=80&w=800&auto=format&fit=crop" 
                 alt="Ndole" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Ndole</h4>
            <p class="text-neutral-600 text-sm mb-4">National dish with bitter leaves, groundnuts, beef, and stockfish</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-red-600">£18.99</span>
              <span class="text-xs bg-red-100 text-red-800 px-2 py-1 rounded-full">National Dish</span>
            </div>
          </div>

          <!-- Achu Soup -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1547592180-85f173990554?q=80&w=800&auto=format&fit=crop" 
                 alt="Achu Soup" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Achu Soup</h4>
            <p class="text-neutral-600 text-sm mb-4">Yellow soup with cocoyam, palm oil, and traditional spices served with achu</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-red-600">£17.99</span>
              <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">Traditional</span>
            </div>
          </div>

          <!-- Poulet DG -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=800&auto=format&fit=crop" 
                 alt="Poulet DG" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Poulet DG</h4>
            <p class="text-neutral-600 text-sm mb-4">Grilled chicken with plantains and vegetables in a rich sauce</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-red-600">£19.99</span>
              <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Premium</span>
            </div>
          </div>

        </div>
      </div>

      <!-- Vegetables & Beans -->
      <div class="mb-16">
        <h3 class="text-3xl font-display font-bold text-neutral-900 mb-8 flex items-center">
          <span class="w-12 h-12 bg-red-600 rounded-xl flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
            </svg>
          </span>
          Vegetables & Legumes
        </h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          
          <!-- Koki Beans -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1574484284002-952d92456975?q=80&w=800&auto=format&fit=crop" 
                 alt="Koki Beans" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Koki Beans</h4>
            <p class="text-neutral-600 text-sm mb-4">Steamed black-eyed peas pudding wrapped in banana leaves</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-red-600">£12.99</span>
              <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Protein-Rich</span>
            </div>
          </div>

          <!-- Jambo -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?q=80&w=800&auto=format&fit=crop" 
                 alt="Jambo" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Jambo</h4>
            <p class="text-neutral-600 text-sm mb-4">Seasoned rice cooked with vegetables and your choice of meat</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-red-600">£14.99</span>
              <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">Flavorful</span>
            </div>
          </div>

          <!-- Eru -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1563379091339-03246963d96d?q=80&w=800&auto=format&fit=crop" 
                 alt="Eru" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Eru</h4>
            <p class="text-neutral-600 text-sm mb-4">Wild vegetable soup with water leaves, meat, and stockfish</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-red-600">£16.99</span>
              <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Healthy</span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- BEVERAGES & DESSERTS -->
  <section id="beverages-menu" class="hidden py-16 bg-gradient-to-br from-purple-50 to-neutral-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Traditional Drinks -->
      <div class="mb-16">
        <h3 class="text-3xl font-display font-bold text-neutral-900 mb-8 flex items-center">
          <span class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
            </svg>
          </span>
          Traditional Beverages
        </h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          
          <!-- Zobo -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?q=80&w=800&auto=format&fit=crop" 
                 alt="Zobo Drink" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Zobo</h4>
            <p class="text-neutral-600 text-sm mb-4">Refreshing hibiscus drink with natural fruits and spices</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-purple-600">£4.99</span>
            </div>
          </div>

          <!-- Palm Wine -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1574484284002-952d92456975?q=80&w=800&auto=format&fit=crop" 
                 alt="Palm Wine" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Palm Wine</h4>
            <p class="text-neutral-600 text-sm mb-4">Traditional fermented palm sap wine</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-purple-600">£6.99</span>
            </div>
          </div>

          <!-- Bissap -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?q=80&w=800&auto=format&fit=crop" 
                 alt="Bissap" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Bissap</h4>
            <p class="text-neutral-600 text-sm mb-4">Sweet and tangy hibiscus flower drink</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-purple-600">£4.99</span>
            </div>
          </div>

          <!-- Ginger Beer -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1541746972996-4e0b0f93e586?q=80&w=800&auto=format&fit=crop" 
                 alt="Ginger Beer" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">African Ginger Beer</h4>
            <p class="text-neutral-600 text-sm mb-4">Spicy and refreshing homemade ginger beer</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-purple-600">£5.99</span>
            </div>
          </div>

        </div>
      </div>

      <!-- Desserts -->
      <div class="mb-16">
        <h3 class="text-3xl font-display font-bold text-neutral-900 mb-8 flex items-center">
          <span class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0A1.5 1.5 0 013 15.546V9.75A1.5 1.5 0 014.5 8.25h15A1.5 1.5 0 0121 9.75v5.796z"></path>
            </svg>
          </span>
          Traditional Desserts
        </h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          
          <!-- Chin Chin -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?q=80&w=800&auto=format&fit=crop" 
                 alt="Chin Chin" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Chin Chin</h4>
            <p class="text-neutral-600 text-sm mb-4">Crispy fried dough cubes with a hint of nutmeg</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-purple-600">£6.99</span>
            </div>
          </div>

          <!-- Plantain Cake -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?q=80&w=800&auto=format&fit=crop" 
                 alt="Plantain Cake" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Plantain Cake</h4>
            <p class="text-neutral-600 text-sm mb-4">Sweet cake made with ripe plantains and spices</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-purple-600">£7.99</span>
            </div>
          </div>

          <!-- Coconut Candy -->
          <div class="menu-card bg-white rounded-2xl p-6 shadow-lg">
            <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?q=80&w=800&auto=format&fit=crop" 
                 alt="Coconut Candy" 
                 class="w-full h-48 object-cover rounded-xl mb-4">
            <h4 class="text-xl font-display font-bold text-neutral-900 mb-2">Coconut Candy</h4>
            <p class="text-neutral-600 text-sm mb-4">Sweet coconut treats with ginger and spices</p>
            <div class="flex justify-between items-center">
              <span class="text-2xl font-bold text-purple-600">£5.99</span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- CTA SECTION -->
  <section class="py-20 bg-gradient-to-r from-african-600 to-african-700 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-4xl lg:text-5xl font-display font-bold mb-6">Ready to Experience Africa?</h2>
      <p class="text-xl text-orange-100 mb-10 leading-relaxed">
        Book your table now and embark on an unforgettable culinary journey through the heart of Africa.
      </p>
      
      <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <button onclick="openBookingModal()" 
                class="bg-white text-african-600 px-10 py-4 rounded-full font-bold text-lg hover:bg-neutral-100 transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-african-600">
          Reserve Your Table
        </button>
        <a href="contact.php" 
           class="border-2 border-white text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-african-600 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-african-600">
          Contact Us
        </a>
      </div>
    </div>
  </section>

</main>

<?php include '../core/includes/footer.php'; ?>

<script>
// Menu tab switching functionality
document.addEventListener('DOMContentLoaded', function() {
    const menuTabs = document.querySelectorAll('.menu-tab');
    const menuSections = document.querySelectorAll('[id$="-menu"]');

    menuTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const cuisine = this.getAttribute('data-cuisine');
            
            // Remove active class from all tabs
            menuTabs.forEach(t => {
                t.classList.remove('active', 'bg-african-600', 'text-white');
                t.classList.add('bg-white', 'text-neutral-700', 'hover:bg-african-50', 'border-2', 'border-neutral-200');
            });

            // Add active class to clicked tab
            this.classList.add('active', 'bg-african-600', 'text-white');
            this.classList.remove('bg-white', 'text-neutral-700', 'hover:bg-african-50', 'border-2', 'border-neutral-200');

            // Hide all menu sections
            menuSections.forEach(section => {
                section.classList.add('hidden');
            });

            // Show selected menu section
            const selectedMenu = document.getElementById(`${cuisine}-menu`);
            if (selectedMenu) {
                selectedMenu.classList.remove('hidden');
            }
        });
    });
});
</script>