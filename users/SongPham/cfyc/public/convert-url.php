<?php
$coreUrl['club-hcm'] = 'cau-lac-bo-tai-ho-chi-minh-pa3lo1lg2.html';
$coreUrl['club-hcm/?lang=en'] = 'clubs-in-ho-chi-minh-pa3lo1lg1.html';
/* url redirect section */
$GLOBALS['urlRedirect']['club-hcm'] = $coreUrl['club-hcm'];
$GLOBALS['urlRedirect']['club-hcm/?lang=en'] = $coreUrl['club-hcm/?lang=en'];
/* url redirect translated */
$GLOBALS['urlRedirectTranslated']['club-hcm-vn'] = $coreUrl['club-hcm'];
$GLOBALS['urlRedirectTranslated']['club-hcm-en'] = $coreUrl['club-hcm/?lang=en'];
include('convert-url-1.php');
function createUrl ($key) {
    return $GLOBALS['urlRedirect'][$key];
};