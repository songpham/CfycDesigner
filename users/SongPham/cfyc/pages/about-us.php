<div class="container-fluid page about-us">
<?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
    <div class="row banner-top">
        <img src="<?php echo USER_BASE_URL ?>/img/about-us/bg-header.jpg" class="img-responsive banner" onmousedown="return false;"/>
        <h1 class="headline"><?php echo LANG_ABOUT_US_MAIN_TITLE ?></h1>
    </div>
    <div class="container-page">
        <div class="row quotes-block">
            <div class="col-sm-12">
                <span class="open-quotes">&ldquo;</span><h3><?php echo LANG_ABOUT_US_QUOTE ?></h3><span class="close-quotes">&rdquo;</span>
            </div>
        </div>
    </div><!--end container page-->
    <div class="row randy-quotes">
        <div class="container-page">
            <div class="col-sm-6 quotes">
                <blockquote><?php echo LANG_ABOUT_US_QUOTE ?></blockquote>
            </div>
        </div>
    </div><!--end row-->
    <div class="container-page">
        <div class="row info">
            <div class="col-sm-6">
                <p><?php echo LANG_ABOUT_US_PARAGRAPH1 ?></p>
            </div>
            <div class="col-sm-6">
                <p><?php echo LANG_ABOUT_US_PARAGRAPH2 ?></p>
            </div>
        </div>
        <div class="row gallery">
            <div class="col-xs-6">
                <img src="<?php echo USER_BASE_URL ?>/img/about-us/facilities1.jpg" class="img-responsive"/>
            </div>
            <div class="col-xs-6">
                <img src="<?php echo USER_BASE_URL ?>/img/about-us/facilities2.jpg" class="img-responsive"/>
            </div>
        </div>
        <div class="row gallery">
            <div class="col-xs-6">
                <img src="<?php echo USER_BASE_URL ?>/img/about-us/facilities3.jpg" class="img-responsive"/>
            </div>
            <div class="col-xs-6">
                <img src="<?php echo USER_BASE_URL ?>/img/about-us/facilities4.jpg" class="img-responsive"/>
            </div>

        </div>
    </div><!--end container page-->
<?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
<script src="<?php echo USER_BASE_URL ?>/js/scripts/about-us.js"></script>