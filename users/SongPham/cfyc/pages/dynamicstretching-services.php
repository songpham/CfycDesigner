<div class="container-fluid page <?=LANG_PAGE_NAME_DS?>-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php';?>
    <div class="top-content row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_DS?>/top-banner.jpg" alt="<?=LANG_BANNER_TITLE_DS?>">
                    <div class="carousel-caption">
                        <fieldset>
                            <legend><?=LANG_BANNER_TEXT_TOP_DS?></legend>
                            <?=LANG_BANNER_TEXT_CONTENT_DS?><br>
                            <span><?=LANG_BANNER_TEXT_SMALL_DS?></span>
                            <a class="cta" href="#form" title="<?=LANG_BANNER_TEXT_CTA_DS?>"><?=LANG_BANNER_TEXT_CTA_DS?></a>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="calidance container">
        <div class="row">
            <h2><div class="line"></div><?=LANG_CALIDANCE_DS?><div class="line"></div></h2>
            <div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <?=LANG_CALIDANCE_CONTENT_DS?>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" height="200" src="<?=LANG_YOUTUBE_DS?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="benefits">
        <h2><div class="line"></div><?=LANG_BENEFIT_DS?><div class="line"></div></h2>
        <?=LANG_BENEFIT_CONTENT_DS?>
        <br><br>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="#" title="<?=LANG_BENEFIT_DS?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_DS?>/benefit-1.jpg" alt="<?=LANG_BENEFIT_DS?>">
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="#" title="<?=LANG_BENEFIT_DS?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_DS?>/benefit-2.jpg" alt="<?=LANG_BENEFIT_DS?>">
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="school row">
        <h2><div class="line"></div><?=LANG_ENVIRONMENT_DS?><div class="line"></div></h2>
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
                    <img src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_DS?>/school.jpg" alt="<?=LANG_ENVIRONMENT_DS?>">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_DS?>/school.jpg" alt="<?=LANG_ENVIRONMENT_DS?>">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_DS?>/school.jpg" alt="<?=LANG_ENVIRONMENT_DS?>">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_DS?>/school.jpg" alt="<?=LANG_ENVIRONMENT_DS?>">
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="trainers container">
        <h2><div class="line"></div><?=LANG_TRAINER_TITLE_DS?><div class="line"></div></h2>
        <center><?=LANG_TRAINER_SUB_DS?></center>
        <div class="tab-content teacher-detail">
            <div role="tabpanel" class="tab-pane active" id="hcmc">
                <ul class="nav nav-tabs col-lg-2 col-md-2 col-sm-2 col-xs-12" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#<?=LANG_TRAINER1_ID_DS?>" aria-controls="<?=LANG_TRAINER1_ID_DS?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_DS?>/linhta-icon.png" alt="<?=LANG_TRAINER1_TITLE_DS?>">
                            <span><?=LANG_TRAINER1_TITLE_DS?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_TRAINER2_ID_DS?>" aria-controls="<?=LANG_TRAINER2_ID_DS?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_DS?>/tieuphuong.png" alt="<?=LANG_TRAINER2_TITLE_DS?>">
                            <span><?=LANG_TRAINER2_TITLE_DS?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_TRAINER3_ID_DS?>" aria-controls="<?=LANG_TRAINER3_ID_DS?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_DS?>/almorgan.png" alt="<?=LANG_TRAINER3_TITLE_DS?>">
                            <span><?=LANG_TRAINER3_TITLE_DS?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_TRAINER4_ID_DS?>" aria-controls="<?=LANG_TRAINER4_ID_DS?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_DS?>/travis.png" alt="<?=LANG_TRAINER4_TITLE_DS?>">
                            <span><?=LANG_TRAINER4_TITLE_DS?></span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div role="tabpanel" class="tab-pane active" id="<?=LANG_TRAINER1_ID_DS?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_DS?>/LinhTa.jpg" alt="<?=LANG_TRAINER1_TITLE_DS?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_TRAINER1_CONTENT_DS?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_TRAINER2_ID_DS?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_DS?>/TieuPhuong.jpg" alt="<?=LANG_TRAINER2_TITLE_DS?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_TRAINER2_CONTENT_DS?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_TRAINER3_ID_DS?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_DS?>/Al.jpg" alt="<?=LANG_TRAINER3_TITLE_DS?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_TRAINER3_CONTENT_DS?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_TRAINER4_ID_DS?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PAGE_NAME_DS?>/DJ.jpg" alt="<?=LANG_TRAINER4_TITLE_DS?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_TRAINER4_CONTENT_DS?></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>

    <div class="contactform container">
        <form id="form"></form>
    </div>

    <?php include USER_BASE_PATH . '/templates/footer-bar.php';?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php';?>
