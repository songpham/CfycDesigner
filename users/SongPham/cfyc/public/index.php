<?php include './../config.php'; ?>
<!DOCTYPE html>
<html lang="en-US">
<?php include USER_BASE_PATH . '/templates/head.php'; ?>
<body>
<?php
function debug ($var, $traceDetail = FALSE) {
    echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
    // var_dump the variable into a buffer and keep the output
    ob_start();
    $e = new Exception();
    if ($traceDetail === TRUE) {
        echo "------------------------ Variable ------------------------\n";
    }
    var_dump($var);
    if ($traceDetail === TRUE) {
        echo "------------------------ Trace String ------------------------\n";
        echo generateCallTrace($e) . "\n";
        echo "------------------------ Trace Detail ------------------------\n";
        generateTrace($e) . "\n";
    }
    $output = ob_get_clean();
    // neaten the newlines and indents
    $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
    if(!extension_loaded('xdebug')) {
        $flags = ENT_QUOTES;
        // PHP 5.4.0+
        if (defined('ENT_SUBSTITUTE')) {
            $flags = ENT_QUOTES | ENT_SUBSTITUTE;
        }
        $output = htmlspecialchars($output, $flags);
    }
    $output = '<pre>'
            . $output
            . '</pre>';
    echo $output;
}
if (empty($_GET['lang']) === FALSE) {
    $LANG = $_GET['lang'];
} else {
    $LANG = 'vn';
}
/**
 * include languages files
 * variables: $LANG: en, vn;
 * use: echo LANG_ABOUT_US;
 */
$baseLanguageDir = USER_BASE_PATH . '/languages';
include $baseLanguageDir . '/' . $LANG . '.php';
$languageDir = $baseLanguageDir . '/' . $LANG;
$languageFiles = scandir($languageDir);
if (empty($languageFiles) === FALSE) {
    foreach ($languageFiles as $languageFile) {
        if (empty($languageFile) === FALSE && in_array($languageFile, array('.', '..')) === FALSE) {
            include $languageDir . '/' . $languageFile;
        }
    }
}
$uri = str_replace(strtolower(USER_BASE_URL . '/'), NULL, strtolower($_SERVER['REQUEST_URI']));
if (is_file(USER_BASE_PATH . '/pages/' . $uri . '.php') === TRUE) {
    include USER_BASE_PATH . '/pages/' . $uri . '.php';
} else {
    include USER_BASE_PATH . '/pages/home.php';
}
?>
</body>
</html>