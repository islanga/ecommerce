<?php
/*
 * @Date 2021/07/02
 * @Name Innocent Sizwe Langa
 * @Type PHP
 * @Description Controller page used for routing
 * @Change inside the file
 */

// Activate session
session_start();

// Start output buffer
ob_start();

// Include utility files
require_once 'include/config.php';
require_once BUSINESS_DIR . 'error_handler.php';

// Set the error handler
ErrorHandler::SetHandler();

// Load the application page template
require_once PRESENTATION_DIR . 'application.php';

// Load the application page template
require_once PRESENTATION_DIR . 'link.php';

// Load the database handler
require_once BUSINESS_DIR . 'database_handler.php';

// Load Business Tier
require_once BUSINESS_DIR . 'catalog.php';

// URL correction
Link::CheckRequest();

// Load Smarty template file
$application = new Application();

// Display the page
$application->display(TEMPLATE_DIR . '/store_front.tpl');

// Close database connection
DatabaseHandler::Close();

// Output content from the buffer
flush();
ob_flush();
ob_end_clean();