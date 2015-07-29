<?php include './../config.php'; ?>
<!DOCTYPE html>
<html lang="en-US">
<?php include USER_BASE_PATH . '/templates/head.php'; ?>
<body>
<?php
$uri = str_replace(strtolower(USER_BASE_URL . '/'), NULL, strtolower($_SERVER['REQUEST_URI']));


if (is_file(USER_BASE_PATH . '/pages/' . $uri . '.php') === TRUE) {
    include USER_BASE_PATH . '/pages/' . $uri . '.php';
} else {
    include USER_BASE_PATH . '/pages/home.php';
}
?>
</body>
</html>