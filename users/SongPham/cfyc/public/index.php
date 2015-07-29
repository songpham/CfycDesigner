<?php include './../config.php'; ?>
<!DOCTYPE html>
<html lang="en-US">
<?php include USER_BASE_PATH . '/templates/head.php'; ?>
<body>
<?php
$uri = str_replace(strtolower(USER_BASE_URL . '/'), NULL, strtolower($_SERVER['REQUEST_URI']));
switch ($uri) {
    case 'about-us':
        include USER_BASE_PATH . '/pages/about-us.php';
        break;
    case 'services':
        include USER_BASE_PATH . '/pages/services.php';
        break;
    case 'celebrity-trainning':
        include USER_BASE_PATH . '/pages/celebrity-trainning.php';
        break;
    default:
        include USER_BASE_PATH . '/pages/home.php';
        break;
}
?>
</body>
</html>