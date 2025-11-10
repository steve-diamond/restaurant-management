// Balanced Diet Cottage - Main JavaScript File

// DOM Content Loaded Event
document.addEventListener('DOMContentLoaded', function() {
    initializeApp();
});

// Initialize the application
function initializeApp() {
    handleLoadingScreen();
    initializeNavigation();
    initializeMenuSystem();
    initializeForms();
    initializeAnimations();
    initializeChefSpecials();
    updateRestaurantStatus();
    
    // Set minimum date for booking to today
    const bookingDate = document.getElementById('bookingDate');
    if (bookingDate) {
        const today = new Date().toISOString().split('T')[0];
        bookingDate.setAttribute('min', today);
    }
}

// Loading Screen Handler
function handleLoadingScreen() {
    const loadingScreen = document.getElementById('loadingScreen');
    if (!loadingScreen) return;

    // Hide loading screen after content is loaded
    window.addEventListener('load', function() {
        setTimeout(() => {
            loadingScreen.classList.add('fade-out');
            setTimeout(() => {
                loadingScreen.style.display = 'none';
            }, 500);
        }, 1000);
    });
}

// Navigation Functions
function initializeNavigation() {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', toggleMobileMenu);
    }

    // Close mobile menu when clicking on links
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        const isClickInsideMenu = mobileMenu && mobileMenu.contains(event.target);
        const isClickOnMenuButton = mobileMenuBtn && mobileMenuBtn.contains(event.target);
        
        if (!isClickInsideMenu && !isClickOnMenuButton && mobileMenu && !mobileMenu.classList.contains('hidden')) {
            closeMobileMenu();
        }
    });
}

function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');

    if (!mobileMenu || !menuIcon || !closeIcon || !mobileMenuBtn) return;

    const isHidden = mobileMenu.classList.contains('hidden');
    
    if (isHidden) {
        mobileMenu.classList.remove('hidden');
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
        mobileMenuBtn.setAttribute('aria-expanded', 'true');
    } else {
        mobileMenu.classList.add('hidden');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
    }
}

function closeMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');

    if (!mobileMenu || !menuIcon || !closeIcon || !mobileMenuBtn) return;

    mobileMenu.classList.add('hidden');
    menuIcon.classList.remove('hidden');
    closeIcon.classList.add('hidden');
    mobileMenuBtn.setAttribute('aria-expanded', 'false');
}

// Menu System Functions
function initializeMenuSystem() {
    const menuTabs = document.querySelectorAll('[data-cuisine]');
    const menuSections = document.querySelectorAll('[id$="-menu"]');

    menuTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const cuisine = this.getAttribute('data-cuisine');
            switchMenuTab(cuisine);
        });
    });
}

function switchMenuTab(cuisine) {
    // Remove active class from all tabs
    const allTabs = document.querySelectorAll('[data-cuisine]');
    allTabs.forEach(tab => {
        tab.classList.remove('active', 'bg-african-600', 'text-white');
        tab.classList.add('bg-white', 'text-neutral-700', 'hover:bg-african-50');
    });

    // Add active class to selected tab
    const activeTab = document.querySelector(`[data-cuisine="${cuisine}"]`);
    if (activeTab) {
        activeTab.classList.add('active', 'bg-african-600', 'text-white');
        activeTab.classList.remove('bg-white', 'text-neutral-700', 'hover:bg-african-50');
    }

    // Hide all menu sections
    const allMenus = document.querySelectorAll('[id$="-menu"]');
    allMenus.forEach(menu => {
        menu.classList.add('hidden');
        menu.classList.remove('animate-fade-in');
    });

    // Show selected menu with animation
    const selectedMenu = document.getElementById(`${cuisine}-menu`);
    if (selectedMenu) {
        setTimeout(() => {
            selectedMenu.classList.remove('hidden');
            selectedMenu.classList.add('animate-fade-in');
        }, 150);
    }
}

// Chef's Specials Rotation
function initializeChefSpecials() {
    const specials = [
        {
            name: "Jollof Rice Royale",
            description: "Premium jollof rice with jumbo prawns, tender chicken, and exotic spices",
            price: "£18.99",
            image: "https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?q=80&w=800&auto=format&fit=crop",
            cuisine: "Nigerian"
        },
        {
            name: "Banku & Tilapia Feast",
            description: "Fresh grilled tilapia with authentic banku and spicy pepper sauce",
            price: "£22.50",
            image: "https://images.unsplash.com/photo-1563379091339-03246963d96d?q=80&w=800&auto=format&fit=crop",
            cuisine: "Ghanaian"
        },
        {
            name: "Ndole Supreme",
            description: "Traditional Cameroonian ndole with premium beef and stockfish",
            price: "£19.99",
            image: "https://images.unsplash.com/photo-1574484284002-952d92456975?q=80&w=800&auto=format&fit=crop",
            cuisine: "Cameroonian"
        }
    ];

    let currentSpecialIndex = 0;
    
    function rotateSpecials() {
        const specialCard = document.getElementById('chef-special-card');
        if (!specialCard) return;

        const special = specials[currentSpecialIndex];
        
        // Fade out
        specialCard.style.opacity = '0';
        
        setTimeout(() => {
            // Update content
            const image = specialCard.querySelector('img');
            const name = specialCard.querySelector('h4');
            const description = specialCard.querySelector('p');
            const price = specialCard.querySelector('.text-2xl');
            const cuisine = specialCard.querySelector('.text-xs');

            if (image) image.src = special.image;
            if (name) name.textContent = special.name;
            if (description) description.textContent = special.description;
            if (price) price.textContent = special.price;
            if (cuisine) cuisine.textContent = special.cuisine + ' Cuisine';

            // Fade in
            specialCard.style.opacity = '1';
        }, 300);

        currentSpecialIndex = (currentSpecialIndex + 1) % specials.length;
    }

    // Rotate every 5 seconds
    setInterval(rotateSpecials, 5000);
}

// Restaurant Status Functions
function updateRestaurantStatus() {
    const statusElements = [
        document.getElementById('restaurantStatus'),
        document.getElementById('restaurantStatusMobile'),
        document.getElementById('currentStatus')
    ];

    const now = new Date();
    const currentDay = now.toLocaleDateString('en-US', { weekday: 'long' });
    const currentTime = now.getHours() * 100 + now.getMinutes();

    let isOpen = false;
    let nextOpenTime = '';

    // Define opening hours (24-hour format)
    const openingHours = {
        'Monday': { open: 1200, close: 2200 },
        'Tuesday': { open: 1200, close: 2200 },
        'Wednesday': { open: 1200, close: 2200 },
        'Thursday': { open: 1200, close: 2200 },
        'Friday': { open: 1200, close: 2300 },
        'Saturday': { open: 1200, close: 2300 },
        'Sunday': { open: 1400, close: 2100 }
    };

    const todayHours = openingHours[currentDay];
    
    if (todayHours && currentTime >= todayHours.open && currentTime <= todayHours.close) {
        isOpen = true;
    }

    // Update status display
    statusElements.forEach(element => {
        if (element) {
            const statusText = element.querySelector('span:last-child');
            const statusDot = element.querySelector('div');
            
            if (statusText && statusDot) {
                if (isOpen) {
                    statusText.textContent = 'Open Now';
                    statusDot.className = 'w-3 h-3 bg-green-500 rounded-full animate-pulse';
                } else {
                    statusText.textContent = 'Closed';
                    statusDot.className = 'w-3 h-3 bg-red-500 rounded-full';
                }
            }
        }
    });
}

// Form Handlers
function initializeForms() {
    // Newsletter form
    const newsletterForm = document.getElementById('newsletterForm');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', handleNewsletterSubmit);
    }

    // Booking form
    const bookingForm = document.getElementById('bookingForm');
    if (bookingForm) {
        bookingForm.addEventListener('submit', handleBookingSubmit);
    }

    // Contact form (if exists)
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', handleContactSubmit);
    }
}

function handleNewsletterSubmit(event) {
    event.preventDefault();
    
    const emailInput = document.getElementById('newsletterEmail');
    if (!emailInput) return;

    const email = emailInput.value;
    
    if (!isValidEmail(email)) {
        showNotification('Please enter a valid email address', 'error');
        return;
    }

    // Show loading state
    const submitButton = event.target.querySelector('button[type="submit"]');
    const originalText = submitButton.textContent;
    submitButton.textContent = 'Subscribing...';
    submitButton.disabled = true;

    // EmailJS configuration for newsletter
    const templateParams = {
        to_email: email,
        from_name: 'Balanced Diet Cottage',
        message: 'Thank you for subscribing to our newsletter!'
    };

    emailjs.send('service_newsletter', 'template_newsletter', templateParams)
        .then(() => {
            showNotification('Successfully subscribed to our newsletter!', 'success');
            emailInput.value = '';
        })
        .catch((error) => {
            console.error('Newsletter subscription failed:', error);
            showNotification('Subscription failed. Please try again.', 'error');
        })
        .finally(() => {
            submitButton.textContent = originalText;
            submitButton.disabled = false;
        });
}

function handleBookingSubmit(event) {
    event.preventDefault();
    
    const formData = new FormData(event.target);
    const bookingData = Object.fromEntries(formData);

    // Validate required fields
    const requiredFields = ['name', 'email', 'phone', 'date', 'time', 'guests'];
    const missingFields = requiredFields.filter(field => !bookingData[field]);
    
    if (missingFields.length > 0) {
        showNotification('Please fill in all required fields', 'error');
        return;
    }

    if (!isValidEmail(bookingData.email)) {
        showNotification('Please enter a valid email address', 'error');
        return;
    }

    if (!bookingData.terms) {
        showNotification('Please accept the terms and conditions', 'error');
        return;
    }

    // Show loading state
    const submitButton = event.target.querySelector('button[type="submit"]');
    const submitText = document.getElementById('bookingSubmitText');
    const submitLoader = document.getElementById('bookingSubmitLoader');
    
    if (submitText && submitLoader) {
        submitText.classList.add('hidden');
        submitLoader.classList.remove('hidden');
    }
    submitButton.disabled = true;

    // Prepare booking details
    const templateParams = {
        customer_name: bookingData.name,
        customer_email: bookingData.email,
        customer_phone: bookingData.phone,
        booking_date: bookingData.date,
        booking_time: bookingData.time,
        guest_count: bookingData.guests,
        special_requests: bookingData.requests || 'None',
        occasion: bookingData.occasion || 'Not specified',
        booking_id: generateBookingId()
    };

    // Send booking via EmailJS
    emailjs.send('service_booking', 'template_booking', templateParams)
        .then(() => {
            showBookingSuccess();
            closeBookingModal();
            event.target.reset();
        })
        .catch((error) => {
            console.error('Booking submission failed:', error);
            showBookingError();
        })
        .finally(() => {
            if (submitText && submitLoader) {
                submitText.classList.remove('hidden');
                submitLoader.classList.add('hidden');
            }
            submitButton.disabled = false;
        });
}

function handleContactSubmit(event) {
    event.preventDefault();
    
    const formData = new FormData(event.target);
    const contactData = Object.fromEntries(formData);

    // Validate required fields
    if (!contactData.name || !contactData.email || !contactData.message) {
        showNotification('Please fill in all required fields', 'error');
        return;
    }

    if (!isValidEmail(contactData.email)) {
        showNotification('Please enter a valid email address', 'error');
        return;
    }

    // Show loading state
    const submitButton = event.target.querySelector('button[type="submit"]');
    const originalText = submitButton.textContent;
    submitButton.textContent = 'Sending...';
    submitButton.disabled = true;

    // EmailJS configuration for contact
    const templateParams = {
        from_name: contactData.name,
        from_email: contactData.email,
        subject: contactData.subject || 'Contact Form Inquiry',
        message: contactData.message,
        reply_to: contactData.email
    };

    emailjs.send('service_contact', 'template_contact', templateParams)
        .then(() => {
            showNotification('Message sent successfully! We\'ll get back to you soon.', 'success');
            event.target.reset();
        })
        .catch((error) => {
            console.error('Contact form submission failed:', error);
            showNotification('Failed to send message. Please try again.', 'error');
        })
        .finally(() => {
            submitButton.textContent = originalText;
            submitButton.disabled = false;
        });
}

// Booking Modal Functions
function openBookingModal() {
    const modal = document.getElementById('bookingModal');
    if (modal) {
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        
        // Focus first input for accessibility
        setTimeout(() => {
            const firstInput = modal.querySelector('input');
            if (firstInput) firstInput.focus();
        }, 100);
    }
}

function closeBookingModal() {
    const modal = document.getElementById('bookingModal');
    if (modal) {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }
}

function showBookingSuccess() {
    const message = document.getElementById('bookingSuccessMessage');
    if (message) {
        message.classList.remove('hidden');
        setTimeout(() => {
            message.classList.add('hidden');
        }, 5000);
    }
}

function showBookingError() {
    const message = document.getElementById('bookingErrorMessage');
    if (message) {
        message.classList.remove('hidden');
        setTimeout(() => {
            message.classList.add('hidden');
        }, 5000);
    }
}

// Animation Functions
function initializeAnimations() {
    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animatedElements = document.querySelectorAll('.menu-card, .service-card, .testimonial-card, .gallery-item');
    animatedElements.forEach(el => observer.observe(el));
}

// Utility Functions
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function generateBookingId() {
    return 'BD-' + Date.now().toString(36).toUpperCase() + Math.random().toString(36).substr(2, 4).toUpperCase();
}

function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-60 px-6 py-4 rounded-lg shadow-lg flex items-center space-x-3 transform transition-all duration-300 translate-x-full`;
    
    // Set colors based on type
    const colors = {
        success: 'bg-green-500 text-white',
        error: 'bg-red-500 text-white',
        warning: 'bg-yellow-500 text-white',
        info: 'bg-blue-500 text-white'
    };
    
    notification.className += ` ${colors[type] || colors.info}`;
    
    // Set content
    notification.innerHTML = `
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            ${type === 'success' ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>' :
              type === 'error' ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>' :
              '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>'}
        </svg>
        <span>${message}</span>
    `;
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 100);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            if (document.body.contains(notification)) {
                document.body.removeChild(notification);
            }
        }, 300);
    }, 5000);
}

// Keyboard Navigation Support
document.addEventListener('keydown', function(event) {
    // Close modal with Escape key
    if (event.key === 'Escape') {
        closeBookingModal();
        closeMobileMenu();
    }
    
    // Skip to main content with Tab key
    if (event.key === 'Tab' && !event.shiftKey) {
        const skipLink = document.querySelector('a[href="#main-content"]');
        if (skipLink && document.activeElement === document.body) {
            skipLink.focus();
        }
    }
});

// Update restaurant status every minute
setInterval(updateRestaurantStatus, 60000);

// Smooth scrolling for anchor links
document.addEventListener('click', function(event) {
    const target = event.target.closest('a[href^="#"]');
    if (target) {
        const href = target.getAttribute('href');
        if (href !== '#') {
            const element = document.querySelector(href);
            if (element) {
                event.preventDefault();
                element.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    }
});

// Handle page visibility change
document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
        // Page is hidden
        console.log('Page hidden');
    } else {
        // Page is visible
        updateRestaurantStatus();
    }
});