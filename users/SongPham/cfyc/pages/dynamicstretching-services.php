<div class="container-fluid page <?=LANG_DYNAMIC_STRETCHING_PAGE_NAME_DS?>-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php';?>
    <div id="banner" class="row banner-top">
        <div class="cta">
            <fieldset>
                <legend><?=LANG_DYNAMIC_STRETCHING_BANNER_TEXT_CONTENT_DS?></legend>
                <hr/>
                <span>
                    <?=LANG_DYNAMIC_STRETCHING_BANNER_TEXT_SMALL_DS?>
                </span>
                <div class="red-btn">
                    <a class="cta" href="javascript:animateTo($('.contactform'))" title="<?=LANG_DYNAMIC_STRETCHING_BANNER_TEXT_CTA_DS?>">
                        <?=LANG_DYNAMIC_STRETCHING_BANNER_TEXT_CTA_DS?>
                    </a>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="calidance container">
        <div class="row">
            <div class="strike"><h2><?=LANG_DYNAMIC_STRETCHING_CALIDANCE_DS?></h2></div>
            <div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <?=LANG_DYNAMIC_STRETCHING_CALIDANCE_CONTENT_DS?>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" height="200" src="https://www.youtube.com/embed/USuTyTUzSbY" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="benefits">
        <div class="strike"><h2><?=LANG_DYNAMIC_STRETCHING_BENEFIT_DS?></h2></div>
        <?=LANG_DYNAMIC_STRETCHING_BENEFIT_CONTENT_DS?>
        <br><br>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="javascript:void(0)" title="<?=LANG_DYNAMIC_STRETCHING_BENEFIT_DS?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_DYNAMIC_STRETCHING_PAGE_NAME_DS?>/benefit-1.jpg" alt="<?=LANG_DYNAMIC_STRETCHING_BENEFIT_DS?>">
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="javascript:void(0)" title="<?=LANG_DYNAMIC_STRETCHING_BENEFIT_DS?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_DYNAMIC_STRETCHING_PAGE_NAME_DS?>/benefit-2.jpg" alt="<?=LANG_DYNAMIC_STRETCHING_BENEFIT_DS?>">
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="school row">
        <div class="strike"><h2><?=LANG_DYNAMIC_STRETCHING_ENVIRONMENT_DS?></h2></div>
        <div id="carousel-example-generic-clubs" class="carousel slide desktop" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic-clubs" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic-clubs" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic-clubs" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic-clubs" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
           <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo USER_BASE_URL ?>/img/dynamicstretching-services/perfect-environment/1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/dynamicstretching-services/perfect-environment/2.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                </div>

                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/dynamicstretching-services/perfect-environment/3.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                </div>

                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/dynamicstretching-services/perfect-environment/4.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                </div>
           </div> <!-- inner mobile -->
        </div>
        <div id="carousel-example-generic-clubs-m" class="carousel slide mobile" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic-clubs-m" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic-clubs-m" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic-clubs-m" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic-clubs-m" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
             <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo USER_BASE_URL ?>/img/dynamicstretching-services/perfect-environment/m-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/dynamicstretching-services/perfect-environment/m-2.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/dynamicstretching-services/perfect-environment/m-3.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/dynamicstretching-services/perfect-environment/m-4.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                </div>
           </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="trainers container">
        <div class="strike"><h2><?=LANG_DYNAMIC_STRETCHING_TRAINER_TITLE_DS?></h2></div>
        <center><?=LANG_DYNAMIC_STRETCHING_TRAINER_SUB_DS?></center>
        <div class="tab-content teacher-detail">
            <div role="tabpanel" class="tab-pane active" id="hcmc">
                <ul class="nav nav-tabs col-lg-2 col-md-2 col-sm-2 col-xs-12" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#<?=LANG_DYNAMIC_STRETCHING_TRAINER1_ID_DS?>" aria-controls="<?=LANG_DYNAMIC_STRETCHING_TRAINER1_ID_DS?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_DYNAMIC_STRETCHING_PAGE_NAME_DS?>/linhta-icon.png" alt="<?=LANG_DYNAMIC_STRETCHING_TRAINER1_TITLE_DS?>">
                            <span><?=LANG_DYNAMIC_STRETCHING_TRAINER1_TITLE_DS?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_DYNAMIC_STRETCHING_TRAINER2_ID_DS?>" aria-controls="<?=LANG_DYNAMIC_STRETCHING_TRAINER2_ID_DS?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_DYNAMIC_STRETCHING_PAGE_NAME_DS?>/tieuphuong.png" alt="<?=LANG_DYNAMIC_STRETCHING_TRAINER2_TITLE_DS?>">
                            <span><?=LANG_DYNAMIC_STRETCHING_TRAINER2_TITLE_DS?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_DYNAMIC_STRETCHING_TRAINER3_ID_DS?>" aria-controls="<?=LANG_DYNAMIC_STRETCHING_TRAINER3_ID_DS?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_DYNAMIC_STRETCHING_PAGE_NAME_DS?>/almorgan.png" alt="<?=LANG_DYNAMIC_STRETCHING_TRAINER3_TITLE_DS?>">
                            <span><?=LANG_DYNAMIC_STRETCHING_TRAINER3_TITLE_DS?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_DYNAMIC_STRETCHING_TRAINER4_ID_DS?>" aria-controls="<?=LANG_DYNAMIC_STRETCHING_TRAINER4_ID_DS?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_DYNAMIC_STRETCHING_PAGE_NAME_DS?>/travis.png" alt="<?=LANG_DYNAMIC_STRETCHING_TRAINER4_TITLE_DS?>">
                            <span><?=LANG_DYNAMIC_STRETCHING_TRAINER4_TITLE_DS?></span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div role="tabpanel" class="tab-pane active" id="<?=LANG_DYNAMIC_STRETCHING_TRAINER1_ID_DS?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_DYNAMIC_STRETCHING_PAGE_NAME_DS?>/LinhTa.jpg" alt="<?=LANG_DYNAMIC_STRETCHING_TRAINER1_TITLE_DS?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_DYNAMIC_STRETCHING_TRAINER1_CONTENT_DS?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_DYNAMIC_STRETCHING_TRAINER2_ID_DS?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_DYNAMIC_STRETCHING_PAGE_NAME_DS?>/TieuPhuong.jpg" alt="<?=LANG_DYNAMIC_STRETCHING_TRAINER2_TITLE_DS?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_DYNAMIC_STRETCHING_TRAINER2_CONTENT_DS?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_DYNAMIC_STRETCHING_TRAINER3_ID_DS?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_DYNAMIC_STRETCHING_PAGE_NAME_DS?>/Al.jpg" alt="<?=LANG_DYNAMIC_STRETCHING_TRAINER3_TITLE_DS?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_DYNAMIC_STRETCHING_TRAINER3_CONTENT_DS?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_DYNAMIC_STRETCHING_TRAINER4_ID_DS?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_DYNAMIC_STRETCHING_PAGE_NAME_DS?>/travis.jpg" alt="<?=LANG_DYNAMIC_STRETCHING_TRAINER4_TITLE_DS?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_DYNAMIC_STRETCHING_TRAINER4_CONTENT_DS?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="contactform container">
        <div class="row" id="form">
            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <h2 class="booktitle"><?=LANG_DYNAMIC_STRETCHING_SIGNUP_TITLE?></h2>
                <h3 class="visit_benefit">
                    <?=LANG_DYNAMIC_STRETCHING_SIGNUP_CONTENT?>
                </h3>
                <div id="signUp_form">
                    <?php if ($LANG == 'vn') { ?>
                    <script type="text/javascript" src="https://app.getresponse.com/view_webform.js?wid=12198205&amp;u=kKTV"></script>
                    <?php } else if ($LANG == 'en') { ?>
                    <script type="text/javascript" src="https://app.getresponse.com/view_webform.js?wid=12198805&amp;u=kKTV"></script>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
        </div>
    </div>

    <?php include USER_BASE_PATH . '/templates/footer-bar.php';?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php';?>
