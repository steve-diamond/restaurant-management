  <!-- BOOKING MODAL -->
  <div id="bookingModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="booking-title" role="dialog" aria-modal="true">
    <div class="flex min-h-screen items-center justify-center p-4">
      <!-- Background overlay -->
      <div class="fixed inset-0 bg-black/50 backdrop-blur-sm transition-opacity" onclick="closeBookingModal()"></div>
      
      <!-- Modal content -->
      <div class="relative w-full max-w-2xl transform rounded-2xl bg-white shadow-2xl transition-all">
        <!-- Header -->
        <div class="flex items-center justify-between p-6 border-b border-neutral-200">
          <div>
            <h3 id="booking-title" class="text-2xl font-display font-bold text-neutral-900">Reserve Your Table</h3>
            <p class="text-sm text-neutral-600 mt-1">Book your authentic African dining experience</p>
          </div>
          <button onclick="closeBookingModal()" 
                  class="p-2 hover:bg-neutral-100 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-african-500"
                  aria-label="Close booking modal">
            <svg class="w-6 h-6 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>

        <!-- Form -->
        <form id="bookingForm" class="p-6">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Personal Information -->
            <div class="space-y-4">
              <div>
                <label for="bookingName" class="block text-sm font-medium text-neutral-700 mb-2">
                  Full Name <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                       id="bookingName" 
                       name="name" 
                       required
                       class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-african-500 focus:border-transparent transition-colors"
                       placeholder="Enter your full name">
              </div>

              <div>
                <label for="bookingEmail" class="block text-sm font-medium text-neutral-700 mb-2">
                  Email Address <span class="text-red-500">*</span>
                </label>
                <input type="email" 
                       id="bookingEmail" 
                       name="email" 
                       required
                       class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-african-500 focus:border-transparent transition-colors"
                       placeholder="your.email@example.com">
              </div>

              <div>
                <label for="bookingPhone" class="block text-sm font-medium text-neutral-700 mb-2">
                  Phone Number <span class="text-red-500">*</span>
                </label>
                <input type="tel" 
                       id="bookingPhone" 
                       name="phone" 
                       required
                       class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-african-500 focus:border-transparent transition-colors"
                       placeholder="+44 xxx xxx xxxx">
              </div>
            </div>

            <!-- Booking Details -->
            <div class="space-y-4">
              <div>
                <label for="bookingDate" class="block text-sm font-medium text-neutral-700 mb-2">
                  Preferred Date <span class="text-red-500">*</span>
                </label>
                <input type="date" 
                       id="bookingDate" 
                       name="date" 
                       required
                       class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-african-500 focus:border-transparent transition-colors">
              </div>

              <div>
                <label for="bookingTime" class="block text-sm font-medium text-neutral-700 mb-2">
                  Preferred Time <span class="text-red-500">*</span>
                </label>
                <select id="bookingTime" 
                        name="time" 
                        required
                        class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-african-500 focus:border-transparent transition-colors">
                  <option value="">Select time</option>
                  <option value="12:00">12:00 PM</option>
                  <option value="12:30">12:30 PM</option>
                  <option value="13:00">1:00 PM</option>
                  <option value="13:30">1:30 PM</option>
                  <option value="14:00">2:00 PM</option>
                  <option value="14:30">2:30 PM</option>
                  <option value="15:00">3:00 PM</option>
                  <option value="15:30">3:30 PM</option>
                  <option value="16:00">4:00 PM</option>
                  <option value="16:30">4:30 PM</option>
                  <option value="17:00">5:00 PM</option>
                  <option value="17:30">5:30 PM</option>
                  <option value="18:00">6:00 PM</option>
                  <option value="18:30">6:30 PM</option>
                  <option value="19:00">7:00 PM</option>
                  <option value="19:30">7:30 PM</option>
                  <option value="20:00">8:00 PM</option>
                  <option value="20:30">8:30 PM</option>
                  <option value="21:00">9:00 PM</option>
                  <option value="21:30">9:30 PM</option>
                </select>
              </div>

              <div>
                <label for="bookingGuests" class="block text-sm font-medium text-neutral-700 mb-2">
                  Number of Guests <span class="text-red-500">*</span>
                </label>
                <select id="bookingGuests" 
                        name="guests" 
                        required
                        class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-african-500 focus:border-transparent transition-colors">
                  <option value="">Select guests</option>
                  <option value="1">1 Guest</option>
                  <option value="2">2 Guests</option>
                  <option value="3">3 Guests</option>
                  <option value="4">4 Guests</option>
                  <option value="5">5 Guests</option>
                  <option value="6">6 Guests</option>
                  <option value="7">7 Guests</option>
                  <option value="8">8 Guests</option>
                  <option value="9">9 Guests</option>
                  <option value="10+">10+ Guests</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Special Requests -->
          <div class="mt-6">
            <label for="bookingRequests" class="block text-sm font-medium text-neutral-700 mb-2">
              Special Requests or Dietary Requirements
            </label>
            <textarea id="bookingRequests" 
                      name="requests" 
                      rows="3"
                      class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-african-500 focus:border-transparent transition-colors resize-none"
                      placeholder="Let us know about any allergies, dietary restrictions, special occasions, or other requests..."></textarea>
          </div>

          <!-- Occasion Type -->
          <div class="mt-6">
            <label class="block text-sm font-medium text-neutral-700 mb-3">Occasion (Optional)</label>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
              <label class="flex items-center space-x-2 cursor-pointer">
                <input type="radio" name="occasion" value="birthday" class="text-african-500 focus:ring-african-500">
                <span class="text-sm text-neutral-700">Birthday</span>
              </label>
              <label class="flex items-center space-x-2 cursor-pointer">
                <input type="radio" name="occasion" value="anniversary" class="text-african-500 focus:ring-african-500">
                <span class="text-sm text-neutral-700">Anniversary</span>
              </label>
              <label class="flex items-center space-x-2 cursor-pointer">
                <input type="radio" name="occasion" value="business" class="text-african-500 focus:ring-african-500">
                <span class="text-sm text-neutral-700">Business</span>
              </label>
              <label class="flex items-center space-x-2 cursor-pointer">
                <input type="radio" name="occasion" value="casual" class="text-african-500 focus:ring-african-500">
                <span class="text-sm text-neutral-700">Casual</span>
              </label>
            </div>
          </div>

          <!-- Terms and Conditions -->
          <div class="mt-6 p-4 bg-neutral-50 rounded-lg">
            <div class="flex items-start space-x-2">
              <input type="checkbox" 
                     id="bookingTerms" 
                     name="terms" 
                     required
                     class="mt-0.5 text-african-500 focus:ring-african-500 rounded">
              <label for="bookingTerms" class="text-xs text-neutral-600 leading-relaxed">
                I agree to the <a href="#" class="text-african-600 hover:text-african-700 underline">terms and conditions</a> 
                and understand that reservations are subject to availability. A confirmation will be sent via email or phone.
              </label>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="mt-8 flex flex-col sm:flex-row gap-3">
            <button type="button" 
                    onclick="closeBookingModal()" 
                    class="px-6 py-3 border border-neutral-300 text-neutral-700 rounded-lg hover:bg-neutral-50 transition-colors focus:outline-none focus:ring-2 focus:ring-neutral-500">
              Cancel
            </button>
            <button type="submit" 
                    class="flex-1 bg-gradient-to-r from-african-500 to-african-600 hover:from-african-600 hover:to-african-700 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-african-500 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed">
              <span id="bookingSubmitText">Reserve Table</span>
              <span id="bookingSubmitLoader" class="hidden">
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                  <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Submitting...
              </span>
            </button>
          </div>

          <!-- Contact Alternative -->
          <div class="mt-6 pt-6 border-t border-neutral-200 text-center">
            <p class="text-sm text-neutral-600">
              Prefer to call? Contact us directly at 
              <a href="tel:<?php echo SITE_PHONE; ?>" class="text-african-600 hover:text-african-700 font-semibold">
                <?php echo SITE_PHONE; ?>
              </a>
            </p>
          </div>

        </form>
      </div>
    </div>
  </div>

  <!-- Success/Error Messages -->
  <div id="bookingSuccessMessage" class="fixed top-4 right-4 z-60 hidden">
    <div class="bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg flex items-center space-x-3">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
      </svg>
      <div>
        <p class="font-semibold">Booking Submitted!</p>
        <p class="text-sm">We'll confirm your reservation shortly.</p>
      </div>
    </div>
  </div>

  <div id="bookingErrorMessage" class="fixed top-4 right-4 z-60 hidden">
    <div class="bg-red-500 text-white px-6 py-4 rounded-lg shadow-lg flex items-center space-x-3">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
      <div>
        <p class="font-semibold">Booking Failed</p>
        <p class="text-sm">Please try again or call us directly.</p>
      </div>
    </div>
  </div>