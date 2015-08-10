<div class="container-fluid page <?=LANG_PAGE_NAME_PTX?>-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
    <div class="top-content row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_PTX?>/top-banner.jpg" alt="<?=LANG_BANNER_TITLE_PTX?>">
                    <div class="carousel-caption">
                        <fieldset>
                            <legend><?=LANG_BANNER_TEXT_TOP_PTX?></legend>
                            <?=LANG_BANNER_TEXT_CONTENT_PTX?><br>
                            <span><?=LANG_BANNER_TEXT_SMALL_PTX?></span>
                            <a class="cta" href="#form" title="<?=LANG_BANNER_TEXT_CTA_PTX?>"><?=LANG_BANNER_TEXT_CTA_PTX?></a>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="calidance container">
        <div class="row">
            <h2><div class="line"></div><?=LANG_CALIDANCE_PTX?><div class="line"></div></h2>
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
        <h2><div class="line"></div><?=LANG_BENEFIT_PTX?><div class="line"></div></h2>
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
        <h2><div class="line"></div><?=LANG_ENVIRONMENT_PTX?><div class="line"></div></h2>
        <div id="carousel-example-generic-clubs" class="carousel slide" data-ride="carousel">
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
                    <img src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_PTX?>/school.jpg" alt="<?=LANG_ENVIRONMENT_PTX?>">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME_PTX?>/school.jpg" alt="<?=LANG_ENVIRONMENT_PTX?>">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME_PTX?>/school.jpg" alt="<?=LANG_ENVIRONMENT_PTX?>">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME_PTX?>/school.jpg" alt="<?=LANG_ENVIRONMENT_PTX?>">
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="trainers container">
        <h2><div class="line"></div><?=LANG_TRAINER_TITLE_PTX?><div class="line"></div></h2>
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
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_PTX?>/DJ.jpg" alt="<?=LANG_TRAINER4_TITLE_PTX?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_TRAINER4_CONTENT_PTX?></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>

    <div class="contactform container">
        <form id="form"></form>
    </div>

    <?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
