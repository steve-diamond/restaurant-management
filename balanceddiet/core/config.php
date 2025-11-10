<?php
// Balanced Diet Cottage - Configuration File
// Authentic African Cuisine Restaurant

// Site Configuration
define('SITE_NAME', 'Balanced Diet Cottage');
define('SITE_TAGLINE', 'Authentic African Heritage Cuisine');
define('SITE_URL', 'https://balanceddietcottage.co.uk');
define('SITE_EMAIL', 'info@balanceddietcottage.co.uk');
define('SITE_PHONE', '+44 7990 579737');

// Restaurant Information
define('RESTAURANT_EMAIL', SITE_EMAIL);
define('RESTAURANT_PHONE', SITE_PHONE);
define('RESTAURANT_ADDRESS', '39A St Andrew Street');
define('RESTAURANT_POSTCODE', 'IDDI 2EU');
define('RESTAURANT_CITY', 'London');
define('RESTAURANT_COUNTRY', 'United Kingdom');

// Opening Hours
define('OPENING_HOURS', [
    'monday' => 'Mon: 12:00 - 22:00',
    'tuesday' => 'Tue: 12:00 - 22:00', 
    'wednesday' => 'Wed: 12:00 - 22:00',
    'thursday' => 'Thu: 12:00 - 22:00',
    'friday' => 'Fri: 12:00 - 23:00',
    'saturday' => 'Sat: 12:00 - 23:00',
    'sunday' => 'Sun: 14:00 - 21:00'
]);

$opening_hours = [
    'monday' => ['open' => '12:00', 'close' => '22:00', 'closed' => false],
    'tuesday' => ['open' => '12:00', 'close' => '22:00', 'closed' => false],
    'wednesday' => ['open' => '12:00', 'close' => '22:00', 'closed' => false],
    'thursday' => ['open' => '12:00', 'close' => '22:00', 'closed' => false],
    'friday' => ['open' => '12:00', 'close' => '23:00', 'closed' => false],
    'saturday' => ['open' => '12:00', 'close' => '23:00', 'closed' => false],
    'sunday' => ['open' => '14:00', 'close' => '21:00', 'closed' => false]
];

// Social Media Links
define('SOCIAL_MEDIA', [
    'facebook' => 'https://facebook.com/balanceddietcottage',
    'instagram' => 'https://instagram.com/balanceddietcottage',
    'twitter' => 'https://twitter.com/balanceddietcottage',
    'youtube' => 'https://youtube.com/@balanceddietcottage'
]);

// EmailJS Configuration (Replace with actual keys)
define('EMAILJS_PUBLIC_KEY', 'YOUR_PUBLIC_KEY');
define('EMAILJS_SERVICE_ID', 'YOUR_SERVICE_ID');
define('EMAILJS_TEMPLATE_ID', 'YOUR_TEMPLATE_ID');
define('EMAILJS_CUSTOMER_TEMPLATE_ID', 'CUSTOMER_TEMPLATE_ID');

// Database Configuration (if needed for future features)
define('DB_HOST', 'localhost');
define('DB_NAME', 'balanceddiet_db');
define('DB_USER', 'root');
define('DB_PASS', '');

// Path Configuration
define('BASE_PATH', dirname(__FILE__));
define('INCLUDES_PATH', BASE_PATH . '/includes/');
define('PAGES_PATH', BASE_PATH . '/pages/');
define('ASSETS_PATH', BASE_PATH . '/assets/');

// Function to get current page
function getCurrentPage() {
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $allowed_pages = ['home', 'menu', 'services', 'gallery', 'about', 'contact', 'booking'];
    return in_array($page, $allowed_pages) ? $page : 'home';
}

// Function to generate page URL
function pageURL($page) {
    return 'index.php?page=' . $page;
}

// Function to format opening hours
function formatOpeningHours($day) {
    global $opening_hours;
    $hours = $opening_hours[strtolower($day)];
    
    if ($hours['closed']) {
        return 'Closed';
    }
    
    return $hours['open'] . ' - ' . $hours['close'];
}

// Function to check if restaurant is currently open
function isRestaurantOpen() {
    global $opening_hours;
    
    $current_day = strtolower(date('l'));
    $current_time = date('H:i');
    
    $today_hours = $opening_hours[$current_day];
    
    if ($today_hours['closed']) {
        return false;
    }
    
    return ($current_time >= $today_hours['open'] && $current_time <= $today_hours['close']);
}

// Function to get restaurant status text
function getRestaurantStatus() {
    return isRestaurantOpen() ? 'Open Now' : 'Closed';
}

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>