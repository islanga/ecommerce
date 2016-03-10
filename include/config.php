<?php
// SITE_ROOT contains the full path to the tshirtshop folder
define('SITE_ROOT', dirname(dirname(__FILE__)));

// Application directories
define('PRESENTATION_DIR', SITE_ROOT . DIRECTORY_SEPARATOR . 'presentation' . DIRECTORY_SEPARATOR);
define('BUSINESS_DIR', SITE_ROOT . '/business/');

// Settings needed to configure the Smarty template engine
define('SMARTY_DIR', SITE_ROOT . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'smarty' . DIRECTORY_SEPARATOR);
define('TEMPLATE_DIR', PRESENTATION_DIR . 'templates');
define('COMPILE_DIR', PRESENTATION_DIR . 'templates_c');
define('CONFIG_DIR', SITE_ROOT . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR . 'configs');

// These should be true while developing the web site
define('IS_WARNING_FATAL', true);
define('DEBUGGING', true);

// The error types to be reported
define('ERROR_TYPES', E_ALL);

// Settings about mailing the error messages to admin
define('SEND_ERROR_MAIL', false);
define('ADMIN_ERROR_MAIL', 'innocent@gaap.co.za');
define('SENDMAIL_FROM', 'innocent@gaap.co.za');
ini_set('sendmail_from', SENDMAIL_FROM);

// By default we don't log errors to a file
define('LOG_ERRORS', false);
define('LOG_ERRORS_FILE', 'C:\\wamp\\www\\tshirtshop\\errors_log.txt'); // Windows
define('SITE_GENERIC_ERROR_MESSAGE', '<h1>TShirtShop Error!</h1>');

// Database connectivity setup
define('DB_PERSISTENCY', true);
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'tshirtshopadmin');
define('DB_PASSWORD', 'tshirtshopadmin');
define('DB_DATABASE', 'tshirtshop');
define('PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);

// Server HTTP port (can omit if the default 80 is used)
define('HTTP_SERVER_PORT', '80');

/* Name of the virtual directory the site runs in, for example:	'/tshirtshop/' if the site runs at http://www.example.com/tshirtshop/ '/' if the site runs at 
	http://www.example.com/ */
define('VIRTUAL_LOCATION', '/tshirtshop/');

// Configure product lists display options
define('SHORT_PRODUCT_DESCRIPTION_LENGTH', 150);
define('PRODUCTS_PER_PAGE', 4);

/* Minimum word length for searches; this constant must be kept in sync with the ft_min_word_len MySQL variable */
define('FT_MIN_WORD_LEN', 4);

// PayPal configuration
define('PAYPAL_URL', 'https://www.paypal.com/cgi-bin/webscr');
define('PAYPAL_EMAIL', 'islanga@magicmail.co.za');
define('PAYPAL_CURRENCY_CODE', 'USD');
define('PAYPAL_RETURN_URL', 'http://localhost/tshirtshop');
define('PAYPAL_CANCEL_RETURN_URL', 'http://localhost/tshirtshop');