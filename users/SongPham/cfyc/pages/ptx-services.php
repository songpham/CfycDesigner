<div class="container-fluid page <?=LANG_PAGE_NAME_PTX?>-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
    <div id="banner" class="row banner-top">
        <div class="cta">
            <fieldset>
                <legend><?=LANG_BANNER_TEXT_CONTENT_PTX?></legend>
                <hr/>
                <span>
                    <?=LANG_BANNER_TEXT_SMALL_PTX?>
                </span>
                <div class="red-btn">
                    <a class="cta" href="javascript:animateTo($('.contactform'))" title="<?=LANG_BANNER_TEXT_CTA_PTX?>"> <?=LANG_BANNER_TEXT_CTA_PTX?></a>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="calidance container">
        <div class="row">
            <div class="strike"><h2><?=LANG_CALIDANCE_PTX?></h2></div>
            <div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <?=LANG_CALIDANCE_CONTENT_PTX?>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" height="200" src="<?=LANG_YOUTUBE_PTX?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="benefits">
        <div class="strike"><h2><?=LANG_BENEFIT_PTX?></h2></div>
        <?=LANG_BENEFIT_CONTENT_PTX?>
        <br><br>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="#" title="<?=LANG_BENEFIT_PTX?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_PTX?>/benefit-1.jpg" alt="<?=LANG_BENEFIT_PTX?>">
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="#" title="<?=LANG_BENEFIT_PTX?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_PTX?>/benefit-2.jpg" alt="<?=LANG_BENEFIT_PTX?>">
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="school row">
        <div class="strike"><h2><?=LANG_ENVIRONMENT_PTX?></h2></div>
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
                            <img src="<?php echo USER_BASE_URL ?>/img/ptx-services/perfect-environment/1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/ptx-services/perfect-environment/2.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/ptx-services/perfect-environment/3.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/ptx-services/perfect-environment/4.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                    </div> 
        </div> <!-- end desktop gallery -->
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
                            <img src="<?php echo USER_BASE_URL ?>/img/ptx-services/perfect-environment/m-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/ptx-services/perfect-environment/m-2.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/ptx-services/perfect-environment/m-3.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/ptx-services/perfect-environment/m-4.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                    </div>
        </div> <!-- end mobile gallery -->
    </div>
    <div class="clearfix"></div>
    <div class="trainers container">
        <div class="strike"><h2><?=LANG_TRAINER_TITLE_PTX?></h2></div>
        <center><?=LANG_TRAINER_SUB_PTX?></center>
        <div class="tab-content teacher-detail">
            <div role="tabpanel" class="tab-pane active" id="hcmc">
                <ul class="nav nav-tabs col-lg-2 col-md-2 col-sm-2 col-xs-12" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#<?=LANG_TRAINER1_ID_PTX?>" aria-controls="<?=LANG_TRAINER1_ID_PTX?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME_PTX?>/linhta-icon.png" alt="<?=LANG_TRAINER1_TITLE_PTX?>">
                            <span><?=LANG_TRAINER1_TITLE_PTX?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_TRAINER2_ID_PTX?>" aria-controls="<?=LANG_TRAINER2_ID_PTX?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME_PTX?>/tieuphuong.png" alt="<?=LANG_TRAINER2_TITLE_PTX?>">
                            <span><?=LANG_TRAINER2_TITLE_PTX?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_TRAINER3_ID_PTX?>" aria-controls="<?=LANG_TRAINER3_ID_PTX?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME_PTX?>/almorgan.png" alt="<?=LANG_TRAINER3_TITLE_PTX?>">
                            <span><?=LANG_TRAINER3_TITLE_PTX?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_TRAINER4_ID_PTX?>" aria-controls="<?=LANG_TRAINER4_ID_PTX?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_PTX?>/travis.png" alt="<?=LANG_TRAINER4_TITLE_PTX?>">
                            <span><?=LANG_TRAINER4_TITLE_PTX?></span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div role="tabpanel" class="tab-pane active" id="<?=LANG_TRAINER1_ID_PTX?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_PTX?>/LinhTa.jpg" alt="<?=LANG_TRAINER1_TITLE_PTX?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_TRAINER1_CONTENT_PTX?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_TRAINER2_ID_PTX?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME_PTX?>/TieuPhuong.jpg" alt="<?=LANG_TRAINER2_TITLE_PTX?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_TRAINER2_CONTENT_PTX?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_TRAINER3_ID_PTX?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME_PTX?>/Al.jpg" alt="<?=LANG_TRAINER3_TITLE_PTX?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_TRAINER3_CONTENT_PTX?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_TRAINER4_ID_PTX?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_PTX?>/travis.jpg" alt="<?=LANG_TRAINER4_TITLE_PTX?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_TRAINER4_CONTENT_PTX?></div>
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
                <h2 class="booktitle"><?=LANG_SIGNUP_TITLE_PTX?></h2>
                <h3 class="visit_benefit">
                    <?=LANG_SIGNUP_CONTENT_PTX?>
                </h3>
                <div id="signUp_form">
	                <?php if ($LANG == 'vn') { ?>
	                <script type="text/javascript" src="https://app.getresponse.com/view_webform.js?wid=12777205&u=kKTV"></script>
	                <?php } else if ($LANG == 'en') { ?>
	                <script type="text/javascript" src="https://app.getresponse.com/view_webform.js?wid=12777305&u=kKTV"></script>
	                <?php } ?>
				</div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
        </div>
    </div>

    <?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
