<?php
// index.php

// Autoload dependencies
require_once '../vendor/autoload.php';

// Include necessary files
require_once 'includes/header.php';

// Routing logic
$page = isset($_GET['page']) ? $_GET['page'] : 'list';

// Load the appropriate page
switch ($page) {
    case 'list':
        require_once 'list.php';
        break;
    case 'detail':
        require_once 'detail.php';
        break;
    default:
        require_once 'list.php';
}

// Include footer
require_once 'includes/footer.php';
?>