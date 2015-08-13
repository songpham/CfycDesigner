<div class="container-fluid page <?=LANG_GROUP_PAGE_NAME_GROUP?>-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php';?>
    <div id="banner" class="row banner-top">
        <div class="cta">
            <fieldset>
                <legend><?=LANG_GROUP_BANNER_TEXT_CONTENT_GROUP?></legend>
                <hr/>
                <span>
                    <?=LANG_GROUP_BANNER_TEXT_SMALL_GROUP?>
                </span>
                <div class="red-btn">
                    <a class="cta" href="javascript:animateTo($('.contactform'))" title="<?=LANG_GROUP_BANNER_TEXT_CTA_GROUP?>"> <?=LANG_GROUP_BANNER_TEXT_CTA_GROUP?></a>
                </div>
            </fieldset>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="calidance container">
        <div class="row">
            <div class="strike"><h2><?=LANG_GROUP_CALIDANCE_GROUP?></h2></div>
            <div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <?=LANG_GROUP_CALIDANCE_CONTENT_GROUP?>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" height="200" src="<?=LANG_GROUP_YOUTUBE_GROUP?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="benefits">
        <div class="strike"><h2><?=LANG_GROUP_BENEFIT_GROUP?></h2></div>
        <?=LANG_GROUP_BENEFIT_CONTENT_GROUP?>
        <br><br>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="#" title="<?=LANG_GROUP_BENEFIT_GROUP?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_GROUP_PAGE_NAME_GROUP?>/benefit-1.jpg" alt="<?=LANG_GROUP_BENEFIT_GROUP?>">
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="#" title="<?=LANG_GROUP_BENEFIT_GROUP?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_GROUP_PAGE_NAME_GROUP?>/benefit-2.jpg" alt="<?=LANG_GROUP_BENEFIT_GROUP?>">
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="discover row">
        <div class="strike"><h2><?=LANG_GROUP_DISCOVER_GROUP?></h2></div>
        <!-- Nav tabs -->
        <div class="dropdown visible-xs" role="tablist">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose A Class
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li role="presentation">
                    <a href="#<?=LANG_GROUP_DISCOVER_TAB1_ID_GROUP?>" aria-controls="<?=LANG_GROUP_DISCOVER_TAB1_ID_GROUP?>" role="tab" data-toggle="tab"><?=LANG_GROUP_DISCOVER_TAB1_TITLE_GROUP?></a>
                </li>
                <li role="presentation">
                    <a href="#<?=LANG_GROUP_DISCOVER_TAB2_ID_GROUP?>" aria-controls="<?=LANG_GROUP_DISCOVER_TAB2_ID_GROUP?>" role="tab" data-toggle="tab"><?=LANG_GROUP_DISCOVER_TAB2_TITLE_GROUP?></a>
                </li>
                <li role="presentation">
                    <a href="#<?=LANG_GROUP_DISCOVER_TAB3_ID_GROUP?>" aria-controls="<?=LANG_GROUP_DISCOVER_TAB3_ID_GROUP?>" role="tab" data-toggle="tab"><?=LANG_GROUP_DISCOVER_TAB3_TITLE_GROUP?></a>
                </li>
                <li role="presentation">
                    <a href="#<?=LANG_GROUP_DISCOVER_TAB4_ID_GROUP?>" aria-controls="<?=LANG_GROUP_DISCOVER_TAB4_ID_GROUP?>" role="tab" data-toggle="tab"><?=LANG_GROUP_DISCOVER_TAB4_TITLE_GROUP?></a>
                </li>
                <li role="presentation">
                    <a href="#<?=LANG_GROUP_DISCOVER_TAB5_ID_GROUP?>" aria-controls="<?=LANG_GROUP_DISCOVER_TAB5_ID_GROUP?>" role="tab" data-toggle="tab"><?=LANG_GROUP_DISCOVER_TAB5_TITLE_GROUP?></a>
                </li>
            </ul>
        </div>
        <ul class="nav nav-tabs hidden-xs" role="tablist">
            <li role="presentation" class="active">
                <a href="#<?=LANG_GROUP_DISCOVER_TAB1_ID_GROUP?>" aria-controls="<?=LANG_GROUP_DISCOVER_TAB1_ID_GROUP?>" role="tab" data-toggle="tab"><?=LANG_GROUP_DISCOVER_TAB1_TITLE_GROUP?></a>
            </li>
            <li role="presentation">
                <a href="#<?=LANG_GROUP_DISCOVER_TAB2_ID_GROUP?>" aria-controls="<?=LANG_GROUP_DISCOVER_TAB2_ID_GROUP?>" role="tab" data-toggle="tab"><?=LANG_GROUP_DISCOVER_TAB2_TITLE_GROUP?></a>
            </li>
            <li role="presentation">
                <a href="#<?=LANG_GROUP_DISCOVER_TAB3_ID_GROUP?>" aria-controls="<?=LANG_GROUP_DISCOVER_TAB3_ID_GROUP?>" role="tab" data-toggle="tab"><?=LANG_GROUP_DISCOVER_TAB3_TITLE_GROUP?></a>
            </li>
            <li role="presentation">
                <a href="#<?=LANG_GROUP_DISCOVER_TAB4_ID_GROUP?>" aria-controls="<?=LANG_GROUP_DISCOVER_TAB4_ID_GROUP?>" role="tab" data-toggle="tab"><?=LANG_GROUP_DISCOVER_TAB4_TITLE_GROUP?></a>
            </li>
            <li role="presentation">
                <a href="#<?=LANG_GROUP_DISCOVER_TAB5_ID_GROUP?>" aria-controls="<?=LANG_GROUP_DISCOVER_TAB5_ID_GROUP?>" role="tab" data-toggle="tab"><?=LANG_GROUP_DISCOVER_TAB5_TITLE_GROUP?></a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="<?=LANG_GROUP_DISCOVER_TAB1_ID_GROUP?>">
                <div class="container"><?=LANG_GROUP_DISCOVER_TAB1_CONTENT_GROUP?></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="<?=LANG_GROUP_DISCOVER_TAB2_ID_GROUP?>">
                <div class="container"><?=LANG_GROUP_DISCOVER_TAB2_CONTENT_GROUP?></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="<?=LANG_GROUP_DISCOVER_TAB3_ID_GROUP?>">
                <div class="container"><?=LANG_GROUP_DISCOVER_TAB3_CONTENT_GROUP?></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="<?=LANG_GROUP_DISCOVER_TAB4_ID_GROUP?>">
                <div class="container"><?=LANG_GROUP_DISCOVER_TAB4_CONTENT_GROUP?></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="<?=LANG_GROUP_DISCOVER_TAB5_ID_GROUP?>">
                <div class="container"><?=LANG_GROUP_DISCOVER_TAB5_CONTENT_GROUP?></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="school row">
        <div class="strike"><h2><?=LANG_GROUP_ENVIRONMENT_GROUP?></h2></div>
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
                    <img src="<?php echo USER_BASE_URL?>/img/<?=LANG_GROUP_PAGE_NAME_GROUP?>/school.jpg" alt="<?=LANG_GROUP_ENVIRONMENT_GROUP?>">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL?>/img/<?=LANG_GROUP_PAGE_NAME_GROUP?>/school.jpg" alt="<?=LANG_GROUP_ENVIRONMENT_GROUP?>">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL?>/img/<?=LANG_GROUP_PAGE_NAME_GROUP?>/school.jpg" alt="<?=LANG_GROUP_ENVIRONMENT_GROUP?>">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL?>/img/<?=LANG_GROUP_PAGE_NAME_GROUP?>/school.jpg" alt="<?=LANG_GROUP_ENVIRONMENT_GROUP?>">
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="trainers container">
        <div class="strike"><h2><?=LANG_GROUP_TRAINER_TITLE_GROUP?></h2></div>
        <center><?=LANG_GROUP_TRAINER_SUB_GROUP?></center>
        <div class="tab-content teacher-detail">
            <div role="tabpanel" class="tab-pane active" id="hcmc">
                <ul class="nav nav-tabs col-lg-2 col-md-2 col-sm-2 col-xs-12" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#<?=LANG_GROUP_TRAINER1_ID_GROUP?>" aria-controls="<?=LANG_GROUP_TRAINER1_ID_GROUP?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_GROUP_PAGE_NAME_GROUP?>/ta.png" alt="<?=LANG_GROUP_TRAINER1_TITLE_GROUP?>">
                            <span><?=LANG_GROUP_TRAINER1_TITLE_GROUP?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_GROUP_TRAINER2_ID_GROUP?>" aria-controls="<?=LANG_GROUP_TRAINER2_ID_GROUP?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_GROUP_PAGE_NAME_GROUP?>/mint.png" alt="<?=LANG_GROUP_TRAINER2_TITLE_GROUP?>">
                            <span><?=LANG_GROUP_TRAINER2_TITLE_GROUP?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_GROUP_TRAINER3_ID_GROUP?>" aria-controls="<?=LANG_GROUP_TRAINER3_ID_GROUP?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_GROUP_PAGE_NAME_GROUP?>/genesis.png" alt="<?=LANG_GROUP_TRAINER3_TITLE_GROUP?>">
                            <span><?=LANG_GROUP_TRAINER3_TITLE_GROUP?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_GROUP_TRAINER4_ID_GROUP?>" aria-controls="<?=LANG_GROUP_TRAINER4_ID_GROUP?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_GROUP_PAGE_NAME_GROUP?>/katsu.png" alt="<?=LANG_GROUP_TRAINER4_TITLE_GROUP?>">
                            <span><?=LANG_GROUP_TRAINER4_TITLE_GROUP?></span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div role="tabpanel" class="tab-pane active" id="<?=LANG_GROUP_TRAINER1_ID_GROUP?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_GROUP_PAGE_NAME_GROUP?>/ta-img.jpg" alt="<?=LANG_GROUP_TRAINER1_TITLE_GROUP?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_GROUP_TRAINER1_CONTENT_GROUP?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_GROUP_TRAINER2_ID_GROUP?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_GROUP_PAGE_NAME_GROUP?>/Mint.jpg" alt="<?=LANG_GROUP_TRAINER2_TITLE_GROUP?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_GROUP_TRAINER2_CONTENT_GROUP?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_GROUP_TRAINER3_ID_GROUP?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_GROUP_PAGE_NAME_GROUP?>/genesis.jpg" alt="<?=LANG_GROUP_TRAINER3_TITLE_GROUP?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_GROUP_TRAINER3_CONTENT_GROUP?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_GROUP_TRAINER4_ID_GROUP?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_GROUP_PAGE_NAME_GROUP?>/katsu.jpg" alt="<?=LANG_GROUP_TRAINER4_TITLE_GROUP?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_GROUP_TRAINER4_CONTENT_GROUP?></div>
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
                <h2 class="booktitle"><?=LANG_GROUP_SIGNUP_TITLE?></h2>
                <h3 class="visit_benefit">
                    <?=LANG_GROUP_SIGNUP_CONTENT?>
                </h3>
                <div id="signUp_form">
	                <?php if ($LANG == 'vn') { ?>
	                <script type="text/javascript" src="http://app.getresponse.com/view_webform.js?wid=10801805&amp;u=kKTV"></script>
	                <?php } else if ($LANG == 'en') { ?>
	                <script type="text/javascript" src="http://app.getresponse.com/view_webform.js?wid=8580205&amp;u=kKTV"></script>
	                <?php } ?>
				</div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
        </div>
    </div>

    <?php include USER_BASE_PATH . '/templates/footer-bar.php';?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php';?>
