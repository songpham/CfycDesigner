<?php
include dirname(__FILE__) . '/../../../config.php';
define('DEFAULT_LANGUAGE', 'vn');
define('USER_BASE_PATH', BASE_PATH_WEBSITE . '/SongPham/cfyc');
define('USER_BASE_URL', BASE_URL_WEBSITE . '/SongPham/cfyc/public');
define('USER_BASE_FOLDER', str_replace(PROTOCOL . '://' . $_SERVER['HTTP_HOST'], NULL, USER_BASE_URL));