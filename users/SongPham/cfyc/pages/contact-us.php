<?
/**
 * Contact us page
 */
?>
<div class="container-fluid page contact-us-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
    <div class="top-content row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo USER_BASE_URL ?>/img/contact-us/contact-banner.jpg" alt="Contact">
                    <div class="carousel-caption">
                        <fieldset>
                            <legend>CALIFORNIA</legend>
                            FITNESS & YOGA IN VIETNAM<br>
                            <span>Experience a dance class today</span>
                            <a class="cta" href="#" title="Discover Cali Dance">Try a class</a>
                        </fieldset>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/contact-us/contact-banner.jpg" alt="Contact">
                    <div class="carousel-caption">
                        <fieldset>
                            <legend>CALIFORNIA</legend>
                            FITNESS & YOGA IN VIETNAM<br>
                            <span>Experience a dance class today</span>
                            <a class="cta" href="#" title="Discover Cali Dance">Try a class</a>
                        </fieldset>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact container">
        <div class="col-lg-offset-2 col-md-offset-2 col-md-8 col-lg-8 col-sm-12 col-xs-12">
            <h1 class="tilte">CONTACT US</h1>
            <p>REGISTER HERE TO JOIN US, WE WILL CONTACT YOU SOON WITHIN 24 HOURS</p>
            <p>for further information, please reach us at:</p>

            <a href="tel:+84862915999" class="col-lg-3 col-md-3 col-sm-6 col-xs-12" title="Phone">
                <img src="<?php echo USER_BASE_URL ?>/img/contact-us/phone-icon.png" alt="Phone">
                <span>(08) 6291 5999</span>
            </a>
            <a href="mailto:info@cfyc.com.vn" class="col-lg-3 col-md-3 col-sm-6 col-xs-12" title="Mail">
                <img src="<?php echo USER_BASE_URL ?>/img/contact-us/mail-icon.png" alt="Mail">
                <span>info@cfyc.com.vn</span>
            </a>
            <a href="http://cfyc.com.vn" class="col-lg-3 col-md-3 col-sm-6 col-xs-12" title="Website">
                <img src="<?php echo USER_BASE_URL ?>/img/contact-us/web-icon.png" alt="Website">
                <span>cfyc.com.vn</span>
            </a>
            <a href="http://facebook.com/cfycvn" class="col-lg-3 col-md-3 col-sm-6 col-xs-12" title="Facebook" target="_blank">
                <img src="<?php echo USER_BASE_URL ?>/img/contact-us/face-icon.png" alt="Facebook">
                <span>facebook.com/cfycvn</span>
            </a>
        </div>
    </div>
    <?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
<script src="<?php echo USER_BASE_URL ?>/js/scripts/contact-us.js"></script>