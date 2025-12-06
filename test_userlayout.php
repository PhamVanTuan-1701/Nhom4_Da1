<?php
// Test file to quickly load the UserLayout for debugging in browser
// Usage: http://localhost/website_quan_ly_tour/test_userlayout.php

// Load project config (defines BASE_URL)
require_once __DIR__ . '/config/config.php';

// Include the layout (will output the HTML)
include __DIR__ . '/views/layouts/UserLayout.php';
