<?php
define("HTTPS", (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? TRUE : FALSE);
define("PROTOCOL", (HTTPS === TRUE) ? 'https' : 'http');
define('BASE_PATH', dirname(__FILE__));
define('BASE_URL', '/CfycDesigner');
define('CFYC_URL', 'cfycnew.song.com');
define('API_CFYC_URL', 'localhost/cfycservice');
define("IMAGES_SERVER", PROTOCOL . '://' . CFYC_URL . '/images_server');
$define_folder["image"]                 = "/phn_image/";
$define_folder["image_new"]             = $define_folder["image"] . "news/";
$define_folder["image_trainer"]         = $define_folder["image"] . "trainer/";
$define_folder["image_article"]         = $define_folder["image"] . "article/";
$define_folder["image_user"]            = $define_folder["image"] . "user/";
$define_folder["image_classes"]         = $define_folder["image"] . "classes/";
$define_folder["image_classes_try"]     = $define_folder["image"] . "classes-try/";
$define_folder["image_classes_article"] = $define_folder["image"] . "classes-article/";
$define_folder["image_club"]            = $define_folder["image"] . "club/";
$define_folder["image_story"]           = $define_folder["image"] . "story/";
$define_folder["image_product"]         = $define_folder["image"] . "product/";
$define_folder["image_menu"]            = $define_folder["image"] . "menu/";
$define_folder["image_category"]        = $define_folder["image"] . "category/";
$define_folder["image_city"]            = $define_folder["image"] . "city/";
$define_folder["image_district"]        = $define_folder["image"] . "district/";
$define_folder["image_ads"]             = $define_folder["image"] . "ads/";
$define_folder["image_schedule"]        = $define_folder["image"] . "schedule/";
define('TEMPLATE_URL', '/template');
define('BASE_PATH_WEBSITE', BASE_PATH . '/users');
define('BASE_URL_WEBSITE', BASE_URL . '/users');