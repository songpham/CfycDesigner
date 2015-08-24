<?php
$coreUrl['club-hcm'] = 'cau-lac-bo-tai-ho-chi-minh-pa3lo1lg2.html';
$coreUrl['club-hcm/?lang=en'] = 'clubs-in-ho-chi-minh-pa3lo1lg1.html';
$coreUrl['club-ha-noi'] = 'cau-lac-bo-tai-ha-noi-pa3lo2lg2.html';
$coreUrl['club-ha-noi/?lang=en'] = 'clubs-in-ha-noi-pa3lo2lg1.html';
$GLOBALS['urlRedirect'] = array(
    'club-hcm' => $coreUrl['club-hcm'],
    'club-hcm/?lang=en' => $coreUrl['club-hcm/?lang=en'],
    'club-ha-noi' => $coreUrl['club-ha-noi'],
    'club-ha-noi/?lang=en' => $coreUrl['club-ha-noi/?lang=en']
);
$GLOBALS['urlRedirectTranslated'] = array(
    'club-hcm-vn' => $coreUrl['club-hcm'],
    'club-hcm-en' => $coreUrl['club-hcm/?lang=en'],
    'club-ha-noi-vn' => $coreUrl['club-ha-noi'],
    'club-ha-noi-en' => $coreUrl['club-ha-noi/?lang=en']
);
function createUrl ($key) {
    return $GLOBALS['urlRedirect'][$key];
};