<?php
session_start();

require_once '../vendor/autoload.php'; 
require_once '../app/core/Autoload.php';

require_once '../config/config.php';
require_once '../app/helpers/helpers.php';

// Assuming Router.php is in /app/core
require_once '../app/core/Router.php';

// Run the router
Router::route();
?>
