<?php
define("BASE_PATH", realpath(dirname(__FILE__)));
define("BASE_FOLDER", BASE_PATH . '/projects');
define("DEBUG", true);
require BASE_PATH . '/Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim(array(
    'debug'          => DEBUG,
    'templates.path' => BASE_FOLDER
));
$dirRouters = BASE_PATH . "/routers";
if (is_dir($dirRouters)) {
    if ($dh = opendir($dirRouters)) {
        while (($file = readdir($dh)) !== false) {
            if( $file == '.' || $file == '..')
                continue;
            include $dirRouters . '/' . $file;
        }
        closedir($dh);
    }
}
$app->run();
exit();