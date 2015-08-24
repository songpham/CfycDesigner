<?php include './../config.php'; ?>
<?php include './convert-url.php'; ?>
<!DOCTYPE html>
<html lang="en-US">
<?php include USER_BASE_PATH . '/templates/head.php'; ?>
<body>
<?php
function limitString ($str, $n = 1) {
    if (mb_strlen($str, 'utf-8') <= $n) {
        return $str;
    }
    return mb_substr($str, 0, $n, 'utf-8') . '...';
}
function customUcwords ($str, $type = MB_CASE_TITLE) {
    return mb_convert_case($str, $type, "UTF-8");
}
function unicodeConvert($str, $random = FALSE){
    $str = customUcwords($str, MB_CASE_LOWER);
    if (!$str) return false;
    $unicode = array(
        'a' => array('á', 'à', 'ả', 'ã', 'ạ', 'ă', 'ắ', 'ặ', 'ằ', 'ẳ', 'ẵ', 'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ'),
        'A' => array('Á', 'À', 'Ả', 'Ã', 'Ạ', 'Ă', 'Ắ', 'Ặ', 'Ằ', 'Ẳ', 'Ẵ', 'Â', 'Ấ', 'Ầ', 'Ẩ', 'Ẫ', 'Ậ'),
        'd' => array('đ'),
        'D' => array('Đ'),
        'e' => array('é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ'),
        'E' => array('É', 'È', 'Ẻ', 'Ẽ', 'Ẹ', 'Ê', 'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ'),
        'i' => array('í', 'ì', 'ỉ', 'ĩ', 'ị'),
        'I' => array('Í', 'Ì', 'Ỉ', 'Ĩ', 'Ị'),
        'o' => array('ó', 'ò', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ'),
        '0' => array('Ó', 'Ò', 'Ỏ', 'Õ', 'Ọ', 'Ô', 'Ố', 'Ồ', 'Ổ', 'Ỗ', 'Ộ', 'Ơ', 'Ớ', 'Ờ', 'Ở', 'Ỡ', 'Ợ'),
        'u' => array('ú', 'ù', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự'),
        'U' => array('Ú', 'Ù', 'Ủ', 'Ũ', 'Ụ', 'Ư', 'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự'),
        'y' => array('ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ'),
        'Y' => array('Ý', 'Ỳ', 'Ỷ', 'Ỹ', 'Ỵ'),
        '-' => array(' ', ':', '*', ',', '&', '^', '%', '$', '#', '@', '!', '"', '.', "'", '“', '”', '/', ')', '(', '>', '<', '?', ';', ',', '+', '*', '=', '[', ']', '–', '_', '|', '’')
    );
    foreach ($unicode as $nonUnicode => $uni) {
        foreach ($uni as $value) {
            $str = str_replace($value, $nonUnicode, $str);
        }
    }
    if ($random === TRUE) {
        return $str . "-" . rand(10000,99999);
    } else {
        return $str;
    }
}
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
$tmpUri = rtrim(str_replace(strtolower(USER_BASE_URL . '/'), NULL, strtolower($_SERVER['REQUEST_URI'])), '/');
$URI = rtrim(preg_replace('/\\?.*/', '', $tmpUri), '/');
if (array_key_exists($tmpUri, $GLOBALS['urlRedirect']) === TRUE) {
    header('Location: ' . USER_BASE_URL . '/' . $GLOBALS['urlRedirect'][$tmpUri]);
}
if (in_array($tmpUri, $GLOBALS['urlRedirectTranslated']) === TRUE) {
    $arrayLang = explode('-', array_search($tmpUri, $GLOBALS['urlRedirectTranslated']));
    $_GET['lang'] = end($arrayLang);
}
if (in_array($tmpUri, $GLOBALS['urlRedirectCeleb']) === TRUE) {
    $arrayLang = explode('-', array_search($tmpUri, $GLOBALS['urlRedirectCeleb']));
    $_GET['celeb'] = $arrayLang[count($arrayLang) - 2];
}
if (empty($_GET['lang']) === FALSE) {
    $LANG = $_GET['lang'];
}
if ($LANG == 'vn') {
    $OPPOSITE_LANG = 'en';
    $LANGSTR = NULL;
} else if ($LANG == 'en') {
    $OPPOSITE_LANG = 'vn';
    $LANGSTR = '_en';
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
if (is_file(USER_BASE_PATH . '/pages/' . $URI . '.php') === TRUE || in_array($tmpUri, $GLOBALS['urlRedirect']) === TRUE) {
    if (in_array($tmpUri, $GLOBALS['urlRedirect']) === TRUE) {
        $key = array_search($tmpUri, $GLOBALS['urlRedirect']);
        $URI = rtrim(preg_replace('/\\?.*/', '', str_replace(strtolower(USER_BASE_URL . '/'), NULL, strtolower($key))), '/');
    }
    include USER_BASE_PATH . '/pages/' . $URI . '.php';
} else {
    include USER_BASE_PATH . '/pages/home.php';
}
?>
</body>
</html>