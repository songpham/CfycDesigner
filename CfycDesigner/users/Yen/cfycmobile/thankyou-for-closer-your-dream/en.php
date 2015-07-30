<?php
include '../config.php';
/**
 * base config
 */
$baseUrl = BASE_URL_WEBSITE . USER_BASE_URL . '/thankyou-for-closer-your-dream';
$templateUrl = BASE_URL . TEMPLATE_URL . USER_PROJECT_URL;
/**
 * user config
 */
$linkChangeLanguage = $baseUrl . '/vn.php';
/**
 * code
 */
include BASE_PATH . '/template/cfycmobile/header.phtml' ?>
<link rel="stylesheet" media="screen" href="<?php echo $baseUrl ?>/css/style.css" />
<div class="space"></div>
<div class="row thankyou">
    <div class="col-xs-12 content">
        <h1>Congratulations!!</h1>
        <h2>You are 1 step closer to your dream body.</h2>

        <label>You Are Now Eligible For:</label>
        <ul>
            <li>- 1 week VIP Pass</li>
            <li>- 2 Free 1 on 1 Personal Training Sessions</li>
            <li>- A free fitness assessment</li>
            <li>- full access to all programs and classes<br>
            for the duration for your vip pass</li>
      </ul>

        <p>We will contact you within 24
            hours <br/>to organise your free VIP Pass</p>
    </div>
</div>
<?php include BASE_PATH . '/template/cfycmobile/footer.phtml' ?>