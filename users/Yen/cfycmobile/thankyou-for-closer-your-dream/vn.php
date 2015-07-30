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
$linkChangeLanguage = $baseUrl . '/en.php';
/**
 * code
 */
include BASE_PATH . '/template/cfycmobile/header.phtml' ?>
<link rel="stylesheet" media="screen" href="<?php echo $baseUrl ?>/css/style.css" />
<div class="space"></div>
<div class="row thankyou">
    <div class="col-xs-12 content">
        <h1>Chúc mừng bạn đã <br>đăng kí thành công!!</h1>
        <h2>Bạn đã tiến thêm 1 bước, đến gần hơn <br/>với thân hình đáng mơ ước.</h2>
        <label>Bạn hiện tại đã nhận được:</label>
        <ul>
            <li>- 1 tuần tập luyện dành cho VIP</li>
            <li>- 2 buổi tập 1 kèm 1 cùng HLV cá nhân</li>
            <li>- Kiểm tra, đánh giá sức khỏe thể hình</li>
            <li>- Quyền tham dự hơn 50 lớp thể dục <br/>tiêu chuẩn quốc tê</li>
        </ul>
        <p>Chúng tôi sẽ liên hệ với bạn trong vòng <br/>24 giờ và hướng dẫn bạn cách nhận <br/>quà tặng tại CLB</p>
    </div>
</div>
<?php include BASE_PATH . '/template/cfycmobile/footer.phtml' ?>