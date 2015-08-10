<div class="container-fluid page <?=LANG_PAGE_NAME?>-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
    <div class="top-content row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME?>/top-banner.jpg" alt="<?=LANG_BANNER_TITLE?>">
                    <div class="carousel-caption">
                        <fieldset>
                            <legend><?=LANG_BANNER_TEXT_TOP?></legend>
                            <?=LANG_BANNER_TEXT_CONTENT?><br>
                            <span><?=LANG_BANNER_TEXT_SMALL?></span>
                            <a class="cta" href="#form" title="<?=LANG_BANNER_TEXT_CTA?>"><?=LANG_BANNER_TEXT_CTA?></a>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="calidance container">
        <div class="row">
            <h2><div class="line"></div><?=LANG_CALIDANCE?><div class="line"></div></h2>
            <div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <?=LANG_CALIDANCE_CONTENT?>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" height="200" src="<?=LANG_YOUTUBE?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="benefits">
        <h2><div class="line"></div><?=LANG_BENEFIT?><div class="line"></div></h2>
        <?=LANG_BENEFIT_CONTENT?>
        <br><br>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="#" title="<?=LANG_BENEFIT?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME?>/benefit1.jpg" alt="<?=LANG_BENEFIT?>">
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="#" title="<?=LANG_BENEFIT?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME?>/benefit2.jpg" alt="<?=LANG_BENEFIT?>">
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="discover row">
        <h2><div class="line"></div><?=LANG_DISCOVER?><div class="line"></div></h2>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#<?=LANG_DISCOVER_TAB1_ID?>" aria-controls="<?=LANG_DISCOVER_TAB1_ID?>" role="tab" data-toggle="tab"><?=LANG_DISCOVER_TAB1_TITLE?></a>
            </li>
            <li role="presentation">
                <a href="#<?=LANG_DISCOVER_TAB2_ID?>" aria-controls="<?=LANG_DISCOVER_TAB2_ID?>" role="tab" data-toggle="tab"><?=LANG_DISCOVER_TAB2_TITLE?></a>
            </li>
            <li role="presentation">
                <a href="#<?=LANG_DISCOVER_TAB3_ID?>" aria-controls="<?=LANG_DISCOVER_TAB3_ID?>" role="tab" data-toggle="tab"><?=LANG_DISCOVER_TAB3_TITLE?></a>
            </li>
            <li role="presentation">
                <a href="#<?=LANG_DISCOVER_TAB4_ID?>" aria-controls="<?=LANG_DISCOVER_TAB4_ID?>" role="tab" data-toggle="tab"><?=LANG_DISCOVER_TAB4_TITLE?></a>
            </li>
            <li role="presentation">
                <a href="#<?=LANG_DISCOVER_TAB5_ID?>" aria-controls="<?=LANG_DISCOVER_TAB5_ID?>" role="tab" data-toggle="tab"><?=LANG_DISCOVER_TAB5_TITLE?></a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="<?=LANG_DISCOVER_TAB1_ID?>">
                <div class="container"><?=LANG_DISCOVER_TAB1_CONTENT?></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="<?=LANG_DISCOVER_TAB2_ID?>">
                <div class="container"><?=LANG_DISCOVER_TAB2_CONTENT?></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="<?=LANG_DISCOVER_TAB3_ID?>">
                <div class="container"><?=LANG_DISCOVER_TAB3_CONTENT?></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="<?=LANG_DISCOVER_TAB4_ID?>">
                <div class="container"><?=LANG_DISCOVER_TAB4_CONTENT?></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="<?=LANG_DISCOVER_TAB5_ID?>">
                <div class="container"><?=LANG_DISCOVER_TAB5_CONTENT?></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="school row">
        <h2><div class="line"></div><?=LANG_ENVIRONMENT?><div class="line"></div></h2>
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
                    <img src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME?>/school.jpg" alt="<?=LANG_ENVIRONMENT?>">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME?>/school.jpg" alt="<?=LANG_ENVIRONMENT?>">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME?>/school.jpg" alt="<?=LANG_ENVIRONMENT?>">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME?>/school.jpg" alt="<?=LANG_ENVIRONMENT?>">
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="trainers container">
        <h2><div class="line"></div><?=LANG_TRAINER_TITLE?><div class="line"></div></h2>
        <center><?=LANG_TRAINER_SUB?></center>
        <div class="tab-content teacher-detail">
            <div role="tabpanel" class="tab-pane active" id="hcmc">
                <ul class="nav nav-tabs col-lg-2 col-md-2 col-sm-2 col-xs-12" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#<?=LANG_TRAINER1_ID?>" aria-controls="<?=LANG_TRAINER1_ID?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME?>/dj-icon.png" alt="<?=LANG_TRAINER1_TITLE?>">
                            <span><?=LANG_TRAINER1_TITLE?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_TRAINER2_ID?>" aria-controls="<?=LANG_TRAINER2_ID?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME?>/tylerly-icon.png" alt="<?=LANG_TRAINER2_TITLE?>">
                            <span><?=LANG_TRAINER2_TITLE?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_TRAINER3_ID?>" aria-controls="<?=LANG_TRAINER3_ID?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME?>/genesis-icon.png" alt="<?=LANG_TRAINER3_TITLE?>">
                            <span><?=LANG_TRAINER3_TITLE?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_TRAINER4_ID?>" aria-controls="<?=LANG_TRAINER4_ID?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME?>/katsu-icon.png" alt="<?=LANG_TRAINER4_TITLE?>">
                            <span><?=LANG_TRAINER4_TITLE?></span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div role="tabpanel" class="tab-pane active" id="<?=LANG_TRAINER1_ID?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME?>/DJ.jpg" alt="<?=LANG_TRAINER1_TITLE?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_TRAINER1_CONTENT?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_TRAINER2_ID?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME?>/Tyler.jpg" alt="<?=LANG_TRAINER2_TITLE?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_TRAINER2_CONTENT?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_TRAINER3_ID?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME?>/DJ.jpg" alt="<?=LANG_TRAINER3_TITLE?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_TRAINER3_CONTENT?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_TRAINER4_ID?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_PAGE_NAME?>/DJ.jpg" alt="<?=LANG_TRAINER4_TITLE?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_TRAINER4_CONTENT?></div>
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
