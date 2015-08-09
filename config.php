<?php
define("HTTPS", (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? TRUE : FALSE);
define("PROTOCOL", (HTTPS === TRUE) ? 'https' : 'http');
define('BASE_PATH', dirname(__FILE__));
define('BASE_URL', '/CfycDesigner');
define('TEMPLATE_URL', '/template');
define('BASE_PATH_WEBSITE', BASE_PATH . '/users');
define('BASE_URL_WEBSITE', BASE_URL . '/users');