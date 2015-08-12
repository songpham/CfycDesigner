<?php include './../config.php'; ?>
<!DOCTYPE html>
<html lang="en-US">
<?php include USER_BASE_PATH . '/templates/head.php'; ?>
<body>
<?php
function getFullUrl () {
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https' : 'http';
    return $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}
function parseArrayUri ($suffix) {
    $parse = array();
    if (empty($suffix) === FALSE) {
        $array = explode('&', $suffix);
        if (empty($array) === FALSE) {
            foreach ($array as $item) {
                $arr = explode('=', $item);
                $parse[$arr[0]] = $arr[1];
            }
        }
    }
    return $parse;
}
function trimQueryString ($url) {
    return str_replace('/?' . $GLOBALS['_SERVER']['QUERY_STRING'], NULL, $url);
}
function resetUrl () {
    return rtrim(empty($GLOBALS['_SERVER']['REDIRECT_URL']) === FALSE ? str_replace(USER_BASE_FOLDER, NULL, trimQueryString($GLOBALS['_SERVER']['REDIRECT_URL'])) : '', '/');
}
function getSuffix ($suffix, $url = NULL, $defaultLanguage = DEFAULT_LANGUAGE) {
    if ($url === NULL) {
        $url = resetUrl();
    }
    $url = empty($url) === FALSE ? $url : rtrim(substr($_SERVER['REQUEST_URI'], strlen(USER_BASE_URL) + 1), '/');
    $uri = explode('/', $url);
    $endUri = end($uri);
    $result = NULL;
    if (strpos($endUri, '?') === 0) {
        $endUriParsed = array_merge(parseArrayUri(ltrim($endUri, '?')), parseArrayUri($suffix));
        $newSuffix = array();
        if (empty($endUriParsed) === FALSE) {
            foreach ($endUriParsed as $k => $v) {
                $newSuffix[] = $k . '=' . $v;
            }
            $result = '/?' . implode('&', $newSuffix);
        }
    } else {
        $result = '/?' . $suffix;
    }
    $result = str_replace(array('&lang=' . $defaultLanguage, '?lang=' . $defaultLanguage, '/?&'), array(NULL, '?', '/?'), $result);
    if ($result === '/?') {
        $result = NULL;
    }
    return $result;
}
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
$LANG = DEFAULT_LANGUAGE;
if (empty($_GET['lang']) === FALSE) {
    $LANG = $_GET['lang'];
}
if ($LANG == 'vn') {
    $OPPOSITE_LANG = 'en';
} else if ($LANG == 'en') {
    $OPPOSITE_LANG = 'vn';
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
$URI = rtrim(preg_replace('/\\?.*/', '', str_replace(strtolower(USER_BASE_URL . '/'), NULL, strtolower($_SERVER['REQUEST_URI']))), '/');
if (is_file(USER_BASE_PATH . '/pages/' . $URI . '.php') === TRUE) {
    include USER_BASE_PATH . '/pages/' . $URI . '.php';
} else {
    include USER_BASE_PATH . '/pages/home.php';
}
?>
</body>
</html>